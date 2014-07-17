<?php
$page = UltraFrontPage::Instance()
?>
<section id="exhaustion-pre" <?php echo $page->exhaustion_pre->data(); ?>>
  <div class="person">
  </div>
</section>

<section id="exhaustion" <?php echo $page->exhaustion->data(); ?>>
  <p>The sweetest kind of exhaustion</p>
</section>

<section id="test" <?php echo $page->test->data(); ?>>
  <p>...is when you've tested yourself and discovered a grit and determination you didn't know you had.</p>
</section>

<section id="victory" <?php echo $page->victory->data(); ?>>
  <div class="video-container">
    <video loop>
      <source src="<?php echo video_path('clip1.webm'); ?>" type="video/webm">
    </video>
    <p>A deeply personal victory for each runner</p>
  </div>
</section>

<section id="impossible" <?php echo $page->impossible->data(); ?>>
  <p>It always seems impossible until it's done.</p>
</section>

<section id="bamboo" <?php echo $page->bamboo->data(); ?>>
  <div class="video-container">
    <video loop>
      <source src="<?php echo video_path('clip2.webm'); ?>" type="video/webm">
    </video>
    <p>A trail through bamboo</p>
  </div>
</section>

<section id="start" <?php echo $page->start->data(); ?>>
  <p>
    The start &mdash;<br />
    <br />
    early morning darkness,<br />
    excitement in the air,<br />
    energy in your veins, and<br />
    incredibly inspiring fellow runners.<br />
  </p>
</section>

<section id="start-vid" <?php echo $page->start_vid->data(); ?>>
  <div class="video-container">
    <video loop>
      <source src="<?php echo video_path('clip3.webm'); ?>" type="video/webm">
    </video>
  </div>
</section>

<section id="tagline" <?php echo $page->tagline->data(); ?>>
  <p>
    Bangalore ultra.<br />
    It's tough. Are you?
  </p>

  <p><a href="">Register now</a></p>
</section>