<?php

function get_logo_image($image_path, $maxArea, $targetColor = null) {
  if (!$image_path) return null;

  $image_name = pathinfo($image_path);
  $image_name = $image_name['filename'];
  $cached_image = CACHE_DIRECTORY . '/' . $image_name . '.png';

  if (!file_exists($cached_image) || (filemtime($cached_image) < filemtime($image_path))) {
    convert_white_to_transparency($cached_image, $image_path, $targetColor);
    $img = wp_get_image_editor($cached_image);
    $size = $img->get_size();
    $currArea = $size['width'] * $size['height'];
    $ratio = sqrt($maxArea / $currArea);
    $img->resize($size['width'] * $ratio, $size['height'] * $ratio);
    $img->save($cached_image);
  }

  return CACHE_URI . '/' . $image_name . '.png';
}


function convert_white_to_transparency($dest, $source, $targetColor = null) {
  list($width, $height, $type, $attr) = getimagesize($source);

  $mime_type = image_type_to_mime_type($type);
  $mime_type = preg_replace("/^.*?\//", "", $mime_type);

  if (($mime_type) == "jpg") {
      $mime_type = "jpeg";
  }

  // call the appropriate imagecreatefrom function for this image
  if (function_exists("imagecreatefrom" . $mime_type)) {
      $img = call_user_func("imagecreatefrom" . $mime_type, $source);
  } else {
      error_log("imagecreatefrom{$mime_type} doesn't exist");
      return false;
  }

  $new_img = imagecreatetruecolor($width, $height);
  imagealphablending($new_img, false);
  imagesavealpha($new_img, true);

  // Set transparencies
  for($x = 0; $x < imagesx($img); $x++) {
    for($y = 0; $y < imagesy($img); $y++) {
      $colorIndex = imagecolorat($img, $x, $y);
      $colorInfo = imagecolorsforindex($img, $colorIndex);

      $colorInfo = convertAlphaColors($colorInfo);
      $alpha = decideAlpha($colorInfo);
      if ($targetColor) {
        $newColor = changeColorToTarget($new_img, $colorInfo, $alpha, $targetColor);
      } else {
        $newColor = decideColor($new_img, $colorInfo, $alpha);
      }
    imagesetpixel($new_img, $x, $y, $newColor);
    }
  }
  imagedestroy($img);
  $res = imagepng($new_img, $dest);
  return $res;
}

function convertAlphaColors($color) {
  $newColor = array();

  $r = $color['red'];
  $g = $color['green'];
  $b = $color['blue'];
  $alp = $color['alpha'] / 127;

  $newColor['red'] = round((0xff * $alp) - $r * ($alp - 1));
  $newColor['blue'] = round((0xff * $alp) - $b * ($alp - 1));
  $newColor['green'] = round((0xff * $alp) - $g * ($alp - 1));

  return $newColor;
}

function decideAlpha($color) {
  $r = $color['red'];
  $g = $color['green'];
  $b = $color['blue'];

  $min = min($r,$g,$b);

  $alpha = $min/255*127;  // resize value to alpha levels ( 0-127 )

  // $alpha = min($alpha + $color['alpha'], 127);

  return (int)($alpha);
}

// function decides the new color w/ alpha based on old color + alpha level
function decideColor($image, $color, $alpha) {
  $alp = $alpha/127;  // get alpha as a percentage

  $r = $color['red'];
  $g = $color['green'];
  $b = $color['blue'];

  if ($alpha == 127) {  // if alpha is 100%, then will be transparent
    return imagecolorallocatealpha($image, $r, $g, $b, $alpha);
  }

  // calculate new color values based on alpha
  $newR = round((0xFF*$alp-$r)/-(1-$alp));
  $newG = round((0xFF*$alp-$g)/-(1-$alp));
  $newB = round((0xFF*$alp-$b)/-(1-$alp));

  // return new color
  return imagecolorallocatealpha($image, $newR, $newG, $newB, $alpha);
}

// function decides the new color as a shade of the target color
function changeColorToTarget($image, $color, $alpha, $targetColor) {
  $alp = $alpha/127;  // get alpha as a percentage

  $targetColor = hex2rgb( $targetColor );

  return imagecolorallocatealpha($image, $targetColor['red'], $targetColor['green'], $targetColor['blue'], $alpha);
}

function hex2rgb( $colour ) {
  if ( $colour[0] == '#' ) {
    $colour = substr( $colour, 1 );
  }
  if ( strlen( $colour ) == 6 ) {
    list( $r, $g, $b ) = array( $colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5] );
  } elseif ( strlen( $colour ) == 3 ) {
    list( $r, $g, $b ) = array( $colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2] );
  } else {
    return false;
  }
  $r = hexdec( $r );
  $g = hexdec( $g );
  $b = hexdec( $b );
  return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}
