<div id="loading">
  <div class="center">
    <div class="center-inner">
      <img src="<?php image_path('logo.png'); ?>" alt="Bangalore Ultra" />
      <i class="icon icon-spin6 animate-spin"></i>
    </div>
  </div>
</div>

<?php
$page = ultra_front_page();
?>
<?php $exhaustion = $page->sections['exhaustion']; ?>
<section id="exhaustion"
  <?php $exhaustion->section_point('start'); ?>="top: 0%;"
  <?php $exhaustion->section_point('leave'); ?>="top: 0%;"
  <?php $exhaustion->section_point('leave', 1); ?>="top: -100%;"
  data-marker="<?php echo $exhaustion->start(); ?>"
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
      <?php $exhaustion->point('form-letters', 2); ?>="background-color: rgba(0,0,0,0.4); opacity: 0;"
      <?php $exhaustion->point('form-letters', 3); ?>="background-color: rgba(0,0,0,0.4); opacity: 1;"
      <?php $exhaustion->point('text', 1); ?>="background-color: rgba(0,0,0,0.4);"
      <?php $exhaustion->point('text', 2); ?>="background-color: rgba(0,0,0,0.6);"
    >
      <div class="text-wrapper"
        <?php $exhaustion->point('text', 1); ?>="left: 0%;"
        <?php $exhaustion->point('text', 2); ?>="left: 100%;"
        data-marker="<?php echo $exhaustion->raw_point('text', 0); ?>"
      >
        <div class="text1 fit">
          <img src="<?php image_path('exhaustion/text1.png'); ?>" alt="The sweetest exhaustion" />
        </div>
      </div>

      <div class="text-wrapper"
        <?php $exhaustion->point('text', 1); ?>="left: -100%;"
        <?php $exhaustion->point('text', 2); ?>="left: 0%;"
        data-marker="<?php echo $exhaustion->raw_point('text', 2); ?>"
      >
        <div class="text2 fit">
          <img src="<?php image_path('exhaustion/text3.png'); ?>" alt="...when you've pushed your limits" />
        </div>
      </div>
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
  data-start-mark="<?php echo 'data' . $victory->start(); ?>"
  data-leave-mark="<?php echo 'data' . $victory->leave(); ?>"
  data-emit-events
  data-marker="<?php echo $victory->start(); ?>"
>
  <div class="inner">
    <div class="video-container">
      <div class="video-placeholder">
        <source src="<?php video_path('clip1.webm'); ?>" type="video/webm">
      </div>
      <div class="text-container">
        <div class="text fit">
          <img src="<?php image_path('victory/text2.png'); ?>" alt="experienced your own kind of triumph" />
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
  data-marker="<?php echo $despair->start() + 1; ?>"
>
  <div class="inner">
    <div class="runners fit">
      <img class="ground" src="<?php image_path('despair/ground.png'); ?>" alt="" />
      <img class="cloud" src="<?php image_path('despair/cloud.png'); ?>" alt="" />
      <img class="dragonfly-1" src="<?php image_path('despair/dragonfly-1.png'); ?>" alt="" />
      <img class="dragonfly-2" src="<?php image_path('despair/dragonfly-2.png'); ?>" alt="" />

      <img class="runner drinking" src="<?php image_path('despair/runner-drinking.png'); ?>" alt="" />
      <img class="runner african" src="<?php image_path('despair/runner-african.png'); ?>" alt="" />
      <img class="runner lady" src="<?php image_path('despair/runner-lady.png'); ?>" alt="" />

      <img class="person" src="<?php image_path('despair/person.png'); ?>" alt="" />

      <img class="runner lady-2" src="<?php image_path('despair/runner-lady-2.png'); ?>" alt="" />
      <img class="runner towel" src="<?php image_path('despair/runner-towel.png'); ?>" alt="" />
    </div>

    <div class="text-container">
      <div class="text fit">
        <img src="<?php image_path('despair/text2.png'); ?>" alt="achieved what seemed impossible" />
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
  data-start-mark="<?php echo 'data' . $bamboo->start(); ?>"
  data-leave-mark="<?php echo 'data' . $bamboo->leave(); ?>"
  data-emit-events
  data-marker="<?php echo $bamboo->start(); ?>"
>
  <div class="inner">
    <div class="video-container">
      <div class="video-placeholder">
        <source src="<?php video_path('clip2.webm'); ?>" type="video/webm">
      </div>
      <div class="overlay"></div>
      <div class="text-container">
        <div class="text fit">
          <img src="<?php image_path('bamboo/text1.png'); ?>" alt="and experienced a trail through bamboo" />
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
  data-start-mark="<?php echo 'data' . $start->start(); ?>"
  data-leave-mark="<?php echo 'data' . $start->leave(); ?>"
  data-emit-events
  data-marker="<?php echo $start->start(); ?>"
>
  <div class="inner">
    <div class="video-container">
      <div class="video-placeholder">
        <source src="<?php video_path('clip3.webm'); ?>" type="video/webm">
      </div>
      <div class="text-container"
        <?php $start->point('dates', 0); ?>="left: 0%;"
        <?php $start->point('dates', 1); ?>="left: 100%;"
      >
        <div class="text fit">
          <img src="<?php image_path('start/text-alt.png'); ?>" alt="the journey begins" />
        </div>
      </div>

      <div class="dates-container"
        <?php $start->point('dates', 0); ?>="left: -100%;"
        <?php $start->point('dates', 1); ?>="left: 0%;"
        <?php $start->point('register', 0); ?>="left: 0%;"
        <?php $start->point('register', 1); ?>="left: 100%;"
        data-marker="<?php echo $start->raw_point('dates', 1); ?>"
      >
        <p class="dates"><?php the_field('dates', 'options'); ?></p>
      </div>

      <div class="register-container"
        <?php $start->point('register', 0); ?>="left: -100%;"
        <?php $start->point('register', 1); ?>="left: 0%;"
        <?php $start->point('sponsors', 0); ?>="background-color: rgba(0,0,0,0);"
        <?php $start->point('sponsors', 1); ?>="background-color: rgba(0,0,0,0.8);"
        data-marker="<?php echo $start->raw_point('register', 1); ?>"
      >
        <div class="center"
          <?php $start->point('sponsors', 0); ?>="height: 100%;"
          <?php $start->point('sponsors', 1); ?>="height: 70%;"
        >
          <div class="center-inner">
            <p class="title">Bangalore ultra.</p>
            <p class="subtitle">It's tough. Are you?</p>
            <a class="register button" href="">Register now</a>
          </div>

          <div class="sponsors-container"
            <?php $start->point('sponsors', 0); ?>="top: 100%;"
            <?php $start->point('sponsors', 1); ?>="top: 0%;"
            data-marker="<?php echo $start->raw_point('sponsors', 1); ?>"
          >
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
      </div>
    </div>
  </div>
</section>

<a href="#" id="scroll-button"
  <?php $start->point('sponsors', 0); ?>="opacity: 1;"
  <?php $start->point('sponsors', 1); ?>="opacity: 0;"
>Scroll</a>