<?php
$page = ultra_front_page();
?>
<?php $exhaustion = $page->sections['exhaustion']; ?>
<section id="exhaustion" <?php $exhaustion->data(); ?>>
  <div class="person-container fit">
    <img src="<?php image_path('person.png'); ?>" alt="person" class="person"
      <?php $exhaustion->point('form-letters', 0); ?>="transform:translate(-50%,0%); opacity: 1;"
      <?php $exhaustion->point('form-letters', 2); ?>="transform:translate(-50%,-100%); opacity: 0;"
    />

    <div class="z 1"
      <?php $exhaustion->point('z1', 0); ?>="transform:translate(0px,0px);"
      <?php $exhaustion->point('z1', 1); ?>="transform:translate(100px,-100px);"
      <?php $exhaustion->point('z1', 2); ?>="transform:translate(160px,-160px);"
    >
      <img src="<?php image_path('z1.png'); ?>" alt="Z"
        <?php $exhaustion->point('z1', 0); ?>="width:0px; height: 0px"
        <?php $exhaustion->point('z1', 1); ?>="opacity:1; width:70px; height:70px;"
        <?php $exhaustion->point('z1', 2); ?>="opacity: 0;"
      />
    </div>

    <div class="z s"
      <?php $exhaustion->point('z2', 0); ?>="transform:translate(0px,0px);"
      <?php $exhaustion->point('z2', 1); ?>="transform:translate(70px,-100px);"
      <?php $exhaustion->point('z2', 2); ?>="transform:translate(100px,-140px);"
      <?php $exhaustion->point('form-letters', 2); ?>="transform:translate(0px,-150px);"
    >
      <img src="<?php image_path('zs.png'); ?>" alt="Z"
        <?php $exhaustion->point('z2', 0); ?>="width:0px; height: 0px"
        <?php $exhaustion->point('z2', 1); ?>="width:70px; height:70px;"
        <?php $exhaustion->point('form-letters', 1); ?>="transform:rotateY(0deg);"
        <?php $exhaustion->point('form-letters', 2); ?>="transform:rotateY(-180deg);"
      />
    </div>

    <div class="z x"
      <?php $exhaustion->point('z3', 0); ?>="transform:translate(0px,0px);"
      <?php $exhaustion->point('z3', 1); ?>="transform:translate(20px,-20px);"
      <?php $exhaustion->point('form-letters', 2); ?>="transform:translate(100px,-100px);"
    >
      <div class="container"
        <?php $exhaustion->point('z3', 0); ?>="width:0px; height: 0px"
        <?php $exhaustion->point('z3', 1); ?>="width:70px; height:70px;"
      >
        <img class="top" src="<?php image_path('zx-top.png'); ?>" alt=""
          <?php $exhaustion->point('form-letters', 1); ?>="transform:translate(0%, 0%) rotate(0deg);"
          <?php $exhaustion->point('form-letters', 2); ?>="transform:translate(-38%, -26%) rotate(-140deg);"
        />
        <img class="bottom" src="<?php image_path('zx-bottom.png'); ?>" alt=""
          <?php $exhaustion->point('form-letters', 1); ?>="transform:translate(0%, 0%) rotate(0deg);"
          <?php $exhaustion->point('form-letters', 2); ?>="transform:translate(22%, 4%) rotate(-145deg);"
        />
        <img class="mid" src="<?php image_path('zx-mid.png'); ?>" alt="Z" />
      </div>
    </div>
  </div>

  <!-- <img class="z 2" src="<?php image_path('z.png'); ?>" alt="Z" /> -->
  <!-- <img class="z 3" src="<?php image_path('z.png'); ?>" alt="Z" /> -->

  <p class="line 1">The sweetest kind of exhaustion</p>

  <p class="line 2">...is when you've tested yourself and discovered a grit and determination you didn't know you had.</p>
</section>

<?php $victory = $page->sections['victory']; ?>
<section id="victory"
  data-<?php echo ($victory->enter() - 1); ?>="top: 100%;"
  data-<?php echo $victory->enter(); ?>="top: 0%; opacity: 0;"
  data-<?php echo $victory->start(); ?>="top: 0%; opacity: 1;"
  data-<?php echo $victory->end(); ?>="top: 0%;"
  data-<?php echo $victory->leave(); ?>="top: -100%;"
>
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