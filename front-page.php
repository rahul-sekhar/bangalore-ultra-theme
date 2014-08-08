<?php
$page = ultra_front_page();
?>
<?php $exhaustion = $page->sections['exhaustion']; ?>
<section id="exhaustion"
  <?php $exhaustion->section_point('start'); ?>="top: 0%;"
  <?php $exhaustion->section_point('leave'); ?>="top: 0%;"
  <?php $exhaustion->section_point('leave', 1); ?>="top: -100%;"
>
  <div class="inner">
    <div class="person-container fit">
      <div class="person-and-shoes"
        <?php $exhaustion->point('form-letters', 0); ?>="transform:translate(0%,0%); opacity: 1;"
        <?php $exhaustion->point('form-letters', 3); ?>xx="transform:translate(0%,-100%); opacity: 0;"
      >
        <img src="<?php image_path('exhaustion/person.png'); ?>" alt="person" class="person" />

        <img src="<?php image_path('exhaustion/mouth-1.png'); ?>" alt="" class="mouth-1" />
        <img src="<?php image_path('exhaustion/mouth-2.png'); ?>" alt="" class="mouth-2" />
        <img src="<?php image_path('exhaustion/tummy-1.png'); ?>" alt="" class="tummy-1" />
        <img src="<?php image_path('exhaustion/tummy-2.png'); ?>" alt="" class="tummy-2" />

        <img src="<?php image_path('exhaustion/shoe-1.png'); ?>" alt="" class="shoe-1"
          <?php $exhaustion->point('form-letters', 0); ?>="transform:translate(0%,0%);"
          <?php $exhaustion->point('form-letters', 3); ?>xx="transform:translate(0%,10%);"
        />
        <img src="<?php image_path('exhaustion/shoe-2.png'); ?>" alt="" class="shoe-2"
          <?php $exhaustion->point('form-letters', 0); ?>="transform:translate(0%,0%);"
          <?php $exhaustion->point('form-letters', 3); ?>xx="transform:translate(0%,20%);"
        />
      </div>

      <div class="z z1"
        <?php $exhaustion->point('z1', 0); ?>="transform:translate(0px,0px);"
        <?php $exhaustion->point('z1', 1); ?>="transform:translate(100px,-100px);"
        <?php $exhaustion->point('z1', 2); ?>="transform:translate(160px,-160px);"
      >
        <div class="container"
          <?php $exhaustion->point('z1', 0); ?>="width:0px; height: 0px"
          <?php $exhaustion->point('z1', 1); ?>="opacity:1; width:70px; height:70px;"
          <?php $exhaustion->point('z1', 2); ?>="opacity: 0;"
        >
          <img class="t" src="<?php image_path('exhaustion/z1.png'); ?>" alt="" />
          <img class="m" src="<?php image_path('exhaustion/z2.png'); ?>" alt="" />
          <img class="b" src="<?php image_path('exhaustion/z3.png'); ?>" alt="" />
        </div>
      </div>

      <div class="z s"
        <?php $exhaustion->point('z2', 0); ?>="transform:translate(0px,0px);"
        <?php $exhaustion->point('z2', 1); ?>="transform:translate(70px,-100px);"
        <?php $exhaustion->point('z2', 2); ?>="transform:translate(100px,-140px);"
        <?php $exhaustion->point('form-letters', 3); ?>="transform:translate(-170px,-220px);"
      >
        <div class="container"
          <?php $exhaustion->point('z2', 0); ?>="width:0px; height: 0px"
          <?php $exhaustion->point('z2', 1); ?>="width:70px; height:70px;"
          <?php $exhaustion->point('form-letters', 1); ?>="transform:rotateY(0deg);"
          <?php $exhaustion->point('form-letters', 2); ?>="transform:rotateY(-90deg); opacity: 1;"
          <?php $exhaustion->point('form-letters', 3); ?>="transform:rotateY(-180deg); opacity: 0;"
        >
          <img class="t" src="<?php image_path('exhaustion/z1.png'); ?>" alt="" />
          <img class="m" src="<?php image_path('exhaustion/z2.png'); ?>" alt="" />
          <img class="b" src="<?php image_path('exhaustion/z3.png'); ?>" alt="" />
        </div>
      </div>

      <div class="z x"
        <?php $exhaustion->point('z3', 0); ?>="transform:translate(0px,0px);"
        <?php $exhaustion->point('z3', 1); ?>="transform:translate(20px,-20px);"
        <?php $exhaustion->point('form-letters', 3); ?>="transform:translate(-250px,-120px);"
      >
        <div class="container"
          <?php $exhaustion->point('z3', 0); ?>="width:0px; height: 0px"
          <?php $exhaustion->point('z3', 1); ?>="width:70px; height:70px;"
          <?php $exhaustion->point('form-letters', 1); ?>="width:100px; height:100px;"
          <?php $exhaustion->point('form-letters', 2); ?>="opacity: 1;"
          <?php $exhaustion->point('form-letters', 3); ?>="opacity: 0;"
        >
          <img class="t" src="<?php image_path('exhaustion/z1.png'); ?>" alt=""
            <?php $exhaustion->point('form-letters', 1); ?>="transform:translate(0%, 0%) rotate(0deg);"
            <?php $exhaustion->point('form-letters', 3); ?>="transform:translate(-8%, 50%) rotate(40deg);"
          />
          <img class="m" src="<?php image_path('exhaustion/z2.png'); ?>" alt="" />
          <img class="b" src="<?php image_path('exhaustion/z3.png'); ?>" alt=""
            <?php $exhaustion->point('form-letters', 1); ?>="transform:translate(0%, 0%) rotate(0deg);"
            <?php $exhaustion->point('form-letters', 3); ?>="transform:translate(0%, -44%) rotate(40deg);"
          />
        </div>
      </div>
    </div>

    <div class="center"
      <?php $exhaustion->point('form-letters', 2); ?>="opacity: 0;"
      <?php $exhaustion->point('form-letters', 3); ?>="opacity: 1;"
    >
      <p class="center-inner">The sweetest exhaustion&hellip;</p>
    </div>
  </div>
</section>



<?php $limits = $page->sections['limits']; ?>
<section id="limits"
  <?php $limits->section_point('enter'); ?>="opacity: 0;"
  <?php $limits->section_point('start'); ?>="opacity: 1;"
  <?php $limits->section_point('end'); ?>="top: 0%;"
  <?php $limits->section_point('leave'); ?>="top: -100%;"
>
  <div class="inner">
    <div class="center">
      <p class="center-inner">When you've pushed your limits,</p>
    </div>
  </div>
</section>



<?php $victory = $page->sections['victory']; ?>
<section id="victory"
  <?php $victory->section_point('enter', -1); ?>="top: 100%;"
  <?php $victory->section_point('enter'); ?>="top: 100%;"
  <?php $victory->section_point('start'); ?>="top: 0%;"
  <?php $victory->section_point('end'); ?>="top: 0%;"
  <?php $victory->section_point('leave'); ?>="top: -100%;"
  data-enter-mark="<?php echo 'data' . $victory->enter(); ?>,<?php echo 'data' . $victory->enter() - 1; ?>"
  data-leave-mark="<?php echo 'data' . $victory->leave(); ?>"
  data-emit-events
>
  <div class="inner">
    <div class="video-container">
      <video loop>
        <source src="<?php //video_path('clip1.webm'); ?>" type="video/webm">
      </video>
      <div class="center">
        <p class="center-inner">Experienced your own kind of triumph</p>
      </div>
    </div>
  </div>
</section>



<?php $despair = $page->sections['despair']; ?>
<section id="despair"
  <?php $despair->section_point('enter'); ?>="top: 100%;"
  <?php $despair->section_point('start'); ?>="top: 0%;"
  <?php $despair->section_point('end'); ?>="top: 0%;"
  <?php $despair->section_point('leave'); ?>="top: 0%;"
  <?php $despair->section_point('leave', 1); ?>="top: -100%;"
  data-enter-mark="<?php echo 'data' . $despair->enter(); ?>"
  data-start-mark="<?php echo 'data' . $despair->start(); ?>"
  data-end-mark="<?php echo 'data' . $despair->end(); ?>"
  data-leave-mark="<?php echo 'data' . $despair->leave(); ?>"
  data-emit-events
>
  <div class="inner">
    <div class="runners">
      <img class="fat-runner" src="<?php image_path('despair/fat-runner.png'); ?>" alt="" />
      <img class="african-runner" src="<?php image_path('despair/african-runner.png'); ?>" alt="" />
      <img class="despairing-runner" src="<?php image_path('despair/despairing-runner.png'); ?>" alt="" />
      <img class="lady-runner" src="<?php image_path('despair/lady-runner.png'); ?>" alt="" />
    </div>

    <div class="text">
      <div class="center">
        <p class="center-inner">Achieved what seemed impossible</p>
      </div>
    </div>
  </div>
</section>



<?php $bamboo = $page->sections['bamboo']; ?>
<section id="bamboo"
  <?php $bamboo->section_point('enter', -1); ?>="top: 100%;"
  <?php $bamboo->section_point('enter'); ?>="top: 100%;"
  <?php $bamboo->section_point('start'); ?>="top: 0%;"
  <?php $bamboo->section_point('end'); ?>="top: 0%;"
  <?php $bamboo->section_point('leave'); ?>="top: -100%;"
  data-enter-mark="<?php echo 'data' . $bamboo->enter(); ?>,<?php echo 'data' . $bamboo->enter() - 1; ?>"
  data-leave-mark="<?php echo 'data' . $bamboo->leave(); ?>"
  data-emit-events
>
  <div class="inner">
    <div class="video-container">
      <video loop>
        <source src="<?php //video_path('clip2.webm'); ?>" type="video/webm">
      </video>
      <div class="center">
        <p class="center-inner">And experienced a trail through bamboo.</p>
      </div>
    </div>
  </div>
</section>



<?php $start = $page->sections['start']; ?>
<section id="start"
  <?php $start->section_point('enter'); ?>="top: 100%;"
  <?php $start->section_point('start'); ?>="top: 0%;"
  <?php $start->section_point('end'); ?>="top: 0%;"
  <?php $start->section_point('leave'); ?>="top: 0%;"
  data-enter-mark="<?php echo 'data' . $start->enter(); ?>"
  data-leave-mark="<?php echo 'data' . $start->leave(); ?>"
  data-emit-events
>
  <div class="inner">
    <div class="video-container">
      <video loop>
        <source src="<?php //video_path('clip3.webm'); ?>" type="video/webm">
      </video>
      <div class="center">
        <p class="center-inner">A journey that began in early morning darkness.</p>
      </div>
    </div>
  </div>
</section>



<?php $register = $page->sections['register']; ?>
<section id="register"
  <?php $register->section_point('enter'); ?>="top: 100%;"
  <?php $register->section_point('start'); ?>="top: 0%;"
  <?php $register->section_point('end'); ?>="top: 0%;"
  <?php $register->section_point('leave'); ?>="top: -100%;"
>
  <div class="inner center">
    <div class="center-inner">
      <p class="title">Bangalore ultra.</p>
      <p class="subtitle">It's tough. Are you?</p>

      <a class="register button" href="">Register now</a>
    </div>
  </div>
</section>