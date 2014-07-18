<?php
$page = ultra_front_page();
?>
<?php $exhaustion = $page->sections['exhaustion']; ?>
<section id="exhaustion" <?php $exhaustion->data(); ?>>
  <div class="person fit">
    <div class="z 1"
      <?php $exhaustion->point('z1', 0); ?>="transform:translate(0px, 0px);"
      <?php $exhaustion->point('z1', 2); ?>="transform:translate(150px, -150x);"
    >
      <img src="<?php image_path('z.png'); ?>" alt="Z"
        <?php $exhaustion->point('z1', 0); ?>="width:0px; height: 0px"
        <?php $exhaustion->point('z1', 1); ?>="opacity:1; width:35px; height:35px;"
        <?php $exhaustion->point('z1', 2); ?>="width: 70px; height: 70px; opacity: 0;"
      />
    </div>

    <div class="z 1"
      <?php $exhaustion->point('z2', 0); ?>="transform:translate(0px, 0px);"
      <?php $exhaustion->point('z2', 2); ?>="transform:translate(150px, -150x);"
    >
      <img src="<?php image_path('z.png'); ?>" alt="Z"
        <?php $exhaustion->point('z2', 0); ?>="width:0px; height: 0px"
        <?php $exhaustion->point('z2', 1); ?>="opacity:1; width:35px; height:35px;"
        <?php $exhaustion->point('z2', 2); ?>="width: 70px; height: 70px; opacity: 0;"
      />
    </div>

    <div class="z 1"
      <?php $exhaustion->point('z3', 0); ?>="transform:translate(0px, 0px);"
      <?php $exhaustion->point('z3', 2); ?>="transform:translate(150px, -150x);"
    >
      <img src="<?php image_path('z.png'); ?>" alt="Z"
        <?php $exhaustion->point('z3', 0); ?>="width:0px; height: 0px"
        <?php $exhaustion->point('z3', 1); ?>="opacity:1; width:35px; height:35px;"
        <?php $exhaustion->point('z3', 2); ?>="width: 70px; height: 70px; opacity: 0;"
      />
    </div>
  </div>

  <!-- <img class="z 2" src="<?php image_path('z.png'); ?>" alt="Z" /> -->
  <!-- <img class="z 3" src="<?php image_path('z.png'); ?>" alt="Z" /> -->

  <p class="line 1">The sweetest kind of exhaustion</p>

  <p class="line 2">...is when you've tested yourself and discovered a grit and determination you didn't know you had.</p>
</section>

<section id="victory" <?php $page->sections['victory']->data(); ?>>
  <div class="video-container">
    <video loop>
      <source src="<?php video_path('clip1.webm'); ?>" type="video/webm">
    </video>
    <p>A deeply personal victory for each runner</p>
  </div>
</section>

<section id="impossible" <?php $page->sections['impossible']->data(); ?>>
  <p>It always seems impossible until it's done.</p>
</section>

<section id="bamboo" <?php $page->sections['bamboo']->data(); ?>>
  <div class="video-container">
    <video loop>
      <source src="<?php video_path('clip2.webm'); ?>" type="video/webm">
    </video>
    <p>A trail through bamboo</p>
  </div>
</section>

<section id="start" <?php $page->sections['start']->data(); ?>>
  <p>
    The start &mdash;<br />
    <br />
    early morning darkness,<br />
    excitement in the air,<br />
    energy in your veins, and<br />
    incredibly inspiring fellow runners.<br />
  </p>
</section>

<section id="start-vid" <?php $page->sections['start_vid']->data(); ?>>
  <div class="video-container">
    <video loop>
      <source src="<?php video_path('clip3.webm'); ?>" type="video/webm">
    </video>
  </div>
</section>

<section id="tagline" <?php $page->sections['tagline']->data(); ?>>
  <p>
    Bangalore ultra.<br />
    It's tough. Are you?
  </p>

  <p><a href="">Register now</a></p>
</section>