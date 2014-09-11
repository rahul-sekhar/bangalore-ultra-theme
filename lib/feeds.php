<?php

function ultra_display_facebook_feed($name) {
  $cache_file = CACHE_DIRECTORY . '/feed-' . $name . '.json';
  $cache_interval = 10;
  $cachedFeed = new SimpleCache('ultra_facebook_feed', array($name), $cache_file, $cache_interval);

  $data = json_decode($cachedFeed->get());

  $output = '';
  $output .= '<ul>';
  foreach($data as $feed_item) {
    $output .= '<li>';
    $output .= '<a href="' . htmlspecialchars($feed_item->url) . '" target="_blank">';
    $output .= wpautop(ultra_shorten_text(ultra_trim_urls(htmlspecialchars($feed_item->text)), 300));
    $output .= '</a></li>';
  }
  $output .= '</ul>';

  echo $output;
}

function ultra_facebook_feed($name) {
  $facebook = new FacebookGraphAPI( ultra_facebook_keys() );
  $fields = array(
    'fields' => 'id,type,message,picture,link,created_time'
  );

  $result = $facebook->setUrl($name . '/posts')
    ->setFields($fields)
    ->performRequest();

  $result = json_decode($result);
  if (isset($result->data)) {
    $result = ultra_format_facebook( $result->data, $name );
  } else {
    $result = array();
  }

  return json_encode( $result );
}

function ultra_facebook_keys() {
  return array(
    'appId' => FACEBOOK_APPID,
    'secret' => FACEBOOK_SECRET
  );
}

function ultra_format_facebook($facebook_data, $name) {
  $output = array();

  if ($facebook_data) {
    foreach($facebook_data as $post) {

      // Skip posts without a message
      if (!isset($post->message)) {
        continue;
      }

      $timestamp = strtotime($post->created_time);

      // Photos link to the photo, while other posts have a permalink
      if ($post->type == 'photo') {
        $url = $post->link;
      } else {
        $id = explode('_', $post->id);
        $id = $id[1];
        $url = 'https://facebook.com/' . $name . '/posts/' . $id;
      }
      $output[] = array(
        'text' => $post->message,
        'url' => $url,
        'timestamp' => $timestamp
      );
    }
  }

  return $output;
}