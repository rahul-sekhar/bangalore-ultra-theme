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
    <img src="<?php image_path('exhaustion/background-shape.png'); ?>" class="background-shape" alt="" />
    <div class="illustration-container fit">
      <div class="illustration"
        <?php $exhaustion->point('form-letters', 0); ?>="transform:translate(0%,0%); opacity: 1;"
        <?php $exhaustion->point('form-letters', 3); ?>xx="transform:translate(0%,-100%); opacity: 0;"
      >
        <img src="<?php image_path('exhaustion/figure-drinking.png'); ?>" alt="" />
        <img src="<?php image_path('exhaustion/figure-highfive-1.png'); ?>" alt="" />
        <img src="<?php image_path('exhaustion/figure-highfive-2.png'); ?>" alt="" />
        <img src="<?php image_path('exhaustion/figure-hugging.png'); ?>" alt="" />
        <img src="<?php image_path('exhaustion/figure-stretching-1.png'); ?>" alt="" />
        <img src="<?php image_path('exhaustion/figure-stretching-2.png'); ?>" alt="" />
        <img src="<?php image_path('exhaustion/figure-up-arms.png'); ?>" alt="" />

        <img src="<?php image_path('exhaustion/banana.png'); ?>" alt="" />
        <img src="<?php image_path('exhaustion/bottle.png'); ?>" alt="" />

        <img src="<?php image_path('exhaustion/shadow.png'); ?>" alt="" />
        <img src="<?php image_path('exhaustion/chap.png'); ?>" alt="" />

        <img src="<?php image_path('exhaustion/shoes.png'); ?>" alt="" />
      </div>

      <div class="z"
        <?php $exhaustion->point('z1', 0); ?>="transform:translate(0px,0px);"
        <?php $exhaustion->point('z1', 1); ?>="transform:translate(100px,-100px);"
        <?php $exhaustion->point('z1', 2); ?>="transform:translate(160px,-160px);"
      >
        <img
          <?php $exhaustion->point('z2', 0); ?>="width:0px; height: 0px"
          <?php $exhaustion->point('z1', 1); ?>="opacity:1; width:70px; height:70px;"
          <?php $exhaustion->point('z1', 2); ?>="opacity: 0;"
          src="<?php image_path('exhaustion/z.png'); ?>" alt="Z" />
      </div>

      <div class="z"
        <?php $exhaustion->point('z2', 0); ?>="transform:translate(0px,0px);"
        <?php $exhaustion->point('z2', 1); ?>="transform:translate(70px,-100px);"
        <?php $exhaustion->point('z2', 2); ?>="transform:translate(100px,-140px);"
        <?php $exhaustion->point('form-letters', 3); ?>="transform:translate(-170px,-220px);"
      >
        <img
          <?php $exhaustion->point('z2', 0); ?>="width:0px; height: 0px"
          <?php $exhaustion->point('z2', 1); ?>="width:70px; height:70px;"
          <?php $exhaustion->point('form-letters', 1); ?>="transform:rotateY(0deg);"
          <?php $exhaustion->point('form-letters', 2); ?>="transform:rotateY(-90deg); opacity: 1;"
          <?php $exhaustion->point('form-letters', 3); ?>="transform:rotateY(-180deg); opacity: 0;"
        src="<?php image_path('exhaustion/z.png'); ?>" alt="Z" />
      </div>

      <div class="z x"
        <?php $exhaustion->point('z3', 0); ?>="transform:translate(0px,0px);"
        <?php $exhaustion->point('z3', 1); ?>="transform:translate(20px,-20px);"
        <?php $exhaustion->point('form-letters', 3); ?>="transform:translate(-250px,-120px);"
      >
        <img
          <?php $exhaustion->point('z3', 0); ?>="width:0px; height: 0px"
          <?php $exhaustion->point('z3', 1); ?>="width:70px; height:70px;"
          <?php $exhaustion->point('form-letters', 1); ?>="width:100px; height:100px;"
          <?php $exhaustion->point('form-letters', 2); ?>="opacity: 1;"
          <?php $exhaustion->point('form-letters', 3); ?>="opacity: 0;"
        src="<?php image_path('exhaustion/z.png'); ?>" alt="Z" />
      </div>
    </div>

    <div class="text-container"
      <?php $exhaustion->point('form-letters', 2); ?>="opacity: 0;"
      <?php $exhaustion->point('form-letters', 3); ?>="opacity: 1;"
    >
      <div class="text fit">
        <img src="<?php image_path('exhaustion/text.png'); ?>" alt="The sweetest exhaustion" />
      </div>
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
    <div class="text fit">
      <img src="<?php image_path('limits/text.png'); ?>" alt="...when you've pushed your limits" />
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
        <source src="<?php video_path('clip1.webm'); ?>" type="video/webm">
      </video>
      <div class="text-container">
        <div class="text fit">
          <img src="<?php image_path('victory/text1.png'); ?>" alt="experienced your own kind of triumph" />
        </div>
      </div>
    </div>
  </div>
</section>



<?php $despair = $page->sections['despair']; ?>
<section id="despair" class="run"
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

    <div class="text-container">
      <div class="text fit">
        <img src="<?php image_path('despair/text.png'); ?>" alt="achieved what seemed impossible" />
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
  <?php $bamboo->section_point('leave'); ?>="top: 0%;"
  <?php $bamboo->section_point('leave', 1); ?>="top: -100%;"
  data-enter-mark="<?php echo 'data' . $bamboo->enter(); ?>,<?php echo 'data' . $bamboo->enter() - 1; ?>"
  data-leave-mark="<?php echo 'data' . $bamboo->leave(); ?>"
  data-emit-events
>
  <div class="inner">
    <div class="video-container">
      <video loop>
        <source src="<?php video_path('clip2.webm'); ?>" type="video/webm">
      </video>
      <div class="text-container">
        <div class="text fit">
          <img src="<?php image_path('bamboo/text.png'); ?>" alt="and experienced a trail through bamboo" />
        </div>
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
        <source src="<?php video_path('clip3.webm'); ?>" type="video/webm">
      </video>
      <div class="text fit">
        <img src="<?php image_path('start/text.png'); ?>" alt="The journey begins..." />
      </div>
    </div>
  </div>
</section>




<?php $dates = $page->sections['dates']; ?>
<section id="dates"
  <?php $dates->section_point('enter'); ?>="top: 100%;"
  <?php $dates->section_point('start'); ?>="top: 0%;"
  <?php $dates->section_point('end'); ?>="top: 0%;"
  <?php $dates->section_point('leave'); ?>="top: 0%;"
>
  <div class="inner">
    <div class="dates">
      <div class="text fit">
        <img src="<?php image_path('dates/text.png'); ?>" alt="8th &amp; 9th November" />
      </div>
    </div>

    <div class="register-container">
      <a class="register button" href="">Register now</a>
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

      <ul class="sponsors">
        <?php
        $logoColor = 'ffffff';
        $logoArea = 8000;
        ?>
        <?php foreach(get_field('sponsors', 'options') as $sponsor) : ?>
          <li>
            <?php if( $sponsor['url'] ) : ?>
              <a href="<?php echo $sponsor['url']; ?>" target="_blank">
            <?php endif; ?>
              <img
                src="<?php echo get_logo_image(get_attached_file($sponsor['logo']['id']), $logoArea, $logoColor) ?>"
                alt="<?php echo $sponsor['name']; ?>"
              />
            <?php if( $sponsor['url'] ) : ?>
              </a>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>