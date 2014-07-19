<?php
$page = ultra_front_page();
?>
<?php $exhaustion = $page->sections['exhaustion']; ?>
<section id="exhaustion"
  <?php $exhaustion->section_point('start'); ?>="top: 0%;"
  <?php $exhaustion->section_point('leave'); ?>="top: 0%;"
  <?php $exhaustion->section_point('leave', 1); ?>="top: -100%;"
>
  <div class="person-container fit">
    <div class="person-and-shoes"
      <?php $exhaustion->point('form-letters', 0); ?>="transform:translate(0%,0%); opacity: 1;"
      <?php $exhaustion->point('form-letters', 2); ?>="transform:translate(0%,-100%); opacity: 0;"
    >
      <img src="<?php image_path('back-shoe.png'); ?>" alt="person" class="back-shoe"
        <?php $exhaustion->point('form-letters', 0); ?>="transform:translate(0%,0%);"
        <?php $exhaustion->point('form-letters', 2); ?>="transform:translate(0%,20%);"
      />
      <img src="<?php image_path('front-shoe.png'); ?>" alt="person" class="front-shoe"
        <?php $exhaustion->point('form-letters', 0); ?>="transform:translate(0%,0%);"
        <?php $exhaustion->point('form-letters', 2); ?>="transform:translate(0%,-40%);"
      />
      <img src="<?php image_path('person.png'); ?>" alt="person" class="person" />
    </div>

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
        <?php $exhaustion->point('form-letters', 1); ?>="width:100px; height:100px;"
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
  <?php $victory->section_point('enter', -1); ?>="top: 100%;"
  <?php $victory->section_point('enter'); ?>="top: 0%; opacity: 0;"
  <?php $victory->section_point('start'); ?>="top: 0%; opacity: 1;"
  <?php $victory->section_point('end'); ?>="top: 0%;"
  <?php $victory->section_point('leave'); ?>="top: -100%;"
  data-enter-mark="<?php echo 'data' . $victory->enter(); ?>,<?php echo 'data' . $victory->enter() - 1; ?>"
  data-leave-mark="<?php echo 'data' . $victory->leave(); ?>"
  data-emit-events
>
  <div class="video-container">
    <video loop>
      <source src="<?php video_path('clip1.webm'); ?>" type="video/webm">
    </video>
    <p>A deeply personal victory for each runner</p>
  </div>
</section>



<?php $impossible = $page->sections['impossible']; ?>
<section id="impossible"
  <?php $impossible->section_point('enter'); ?>="top: 100%;"
  <?php $impossible->section_point('start'); ?>="top: 0%;"
  <?php $impossible->section_point('leave'); ?>="top: 0%;"
  <?php $impossible->section_point('leave', 1); ?>="top: -100%;"
  data-start-mark="<?php echo 'data' . $impossible->start(); ?>"
  data-end-mark="<?php echo 'data' . $impossible->end(); ?>"
  data-emit-events
>
  <div class="runners fit">
    <img class="background-runners" src="<?php image_path('background-runners.png'); ?>" alt="hunched person" />
    <img class="person" src="<?php image_path('hunched-person.png'); ?>" alt="hunched person" />
    <img class="tears" src="<?php image_path('hunched-person-tears.png'); ?>" alt="hunched person" />
    <img class="foreground-runners" src="<?php image_path('foreground-runners.png'); ?>" alt="hunched person" />
  </div>

  <p class="line">It always seems impossible until it's done.</p>
</section>



<?php $bamboo = $page->sections['bamboo']; ?>
<section id="bamboo"
  <?php $bamboo->section_point('enter', -1); ?>="top: 100%;"
  <?php $bamboo->section_point('enter'); ?>="top: 0%; opacity: 0;"
  <?php $bamboo->section_point('start'); ?>="top: 0%; opacity: 1;"
  <?php $bamboo->section_point('end'); ?>="top: 0%;"
  <?php $bamboo->section_point('leave'); ?>="top: -100%;"
  data-enter-mark="<?php echo 'data' . $bamboo->enter(); ?>,<?php echo 'data' . $bamboo->enter() - 1; ?>"
  data-leave-mark="<?php echo 'data' . $bamboo->leave(); ?>"
  data-emit-events
>
  <div class="video-container">
    <video loop>
      <source src="<?php video_path('clip2.webm'); ?>" type="video/webm">
    </video>
    <p>A trail through bamboo</p>
  </div>
</section>



<?php $start = $page->sections['start']; ?>
<section id="start"
  <?php $start->section_point('enter'); ?>="top: 100%;"
  <?php $start->section_point('start'); ?>="top: 0%;"
  <?php $start->section_point('end'); ?>="top: 0%;"
  <?php $start->section_point('leave'); ?>="top: -100%;"
>
  <p>
    The start &mdash;<br />
    <br />
    early morning darkness,<br />
    excitement in the air,<br />
    energy in your veins, and<br />
    incredibly inspiring fellow runners.<br />
  </p>
</section>



<?php $start_vid = $page->sections['start_vid']; ?>
<section id="start-vid"
  <?php $start_vid->section_point('enter'); ?>="top: 100%;"
  <?php $start_vid->section_point('start'); ?>="top: 0%;"
  <?php $start_vid->section_point('end'); ?>="top: 0%;"
  <?php $start_vid->section_point('leave'); ?>="top: -100%;"
  data-enter-mark="<?php echo 'data' . $start_vid->enter(); ?>"
  data-leave-mark="<?php echo 'data' . $start_vid->leave(); ?>"
  data-emit-events
>
  <div class="video-container">
    <video loop>
      <source src="<?php video_path('clip3.webm'); ?>" type="video/webm">
    </video>
  </div>
</section>



<?php $tagline = $page->sections['tagline']; ?>
<section id="tagline"
  <?php $tagline->section_point('enter'); ?>="top: 100%;"
  <?php $tagline->section_point('start'); ?>="top: 0%;"
  <?php $tagline->section_point('end'); ?>="top: 0%;"
  <?php $tagline->section_point('leave'); ?>="top: -100%;"
>
  <p>
    Bangalore ultra.<br />
    It's tough. Are you?
  </p>

  <p><a href="">Register now</a></p>
</section>