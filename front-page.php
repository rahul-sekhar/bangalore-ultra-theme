<div id="loading">
  <div class="center">
    <div class="center-inner">
      <img src="<?php image_path('logo-256.png'); ?>" alt="Bangalore Ultra" />
      <div class="spinner">
        <div class="rect1"></div><div class="rect2"></div><div class="rect3"></div><div class="rect4"></div><div class="rect5"></div>
      </div>
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
  data-marker="<?php echo $exhaustion->raw_section_point('start'); ?>"
>
  <div class="inner">

    <img class="cloud" src="<?php image_path('exhaustion/cloud-64.png'); ?>" alt="" />

    <div class="silhouettes"></div>

    <div class="ground"></div>

    <div class="person">
      <img class="person-img" src="<?php image_path('exhaustion/person-64.png'); ?>" alt="" />

      <div class="z"
        <?php $exhaustion->point('z1', 0); ?>="transform:translate(0px,0px);"
        <?php $exhaustion->point('z1', 1); ?>="transform:translate(120px,-120px);"
        <?php $exhaustion->point('z1', 2); ?>="transform:translate(180px,-180px);"
      >
        <img
          <?php $exhaustion->point('z1', 0); ?>="width:0px; height: 0px"
          <?php $exhaustion->point('z1', 1); ?>="opacity:1; width:50px; height:50px;"
          <?php $exhaustion->point('z1', 2); ?>="opacity: 0; width:75px; height:75px;"
          src="<?php image_path('exhaustion/z3-8.png'); ?>" alt="Z" />
      </div>

      <div class="z"
        <?php $exhaustion->point('z2', 0); ?>="transform:translate(0px,0px);"
        <?php $exhaustion->point('z2', 1); ?>="transform:translate(120px,-120px);"
        <?php $exhaustion->point('z2', 2); ?>="transform:translate(180px,-180px);"
      >
        <img
          <?php $exhaustion->point('z2', 0); ?>="width:0px; height: 0px"
          <?php $exhaustion->point('z2', 1); ?>="opacity:1; width:50px; height:50px;"
          <?php $exhaustion->point('z2', 2); ?>="opacity: 0; width:75px; height:75px;"
          src="<?php image_path('exhaustion/z3-8.png'); ?>" alt="Z" />
      </div>

      <div class="z"
        <?php $exhaustion->point('z3', 0); ?>="transform:translate(0px,0px);"
        <?php $exhaustion->point('z3', 1); ?>="transform:translate(120px,-120px);"
        <?php $exhaustion->point('z3', 2); ?>="transform:translate(180px,-180px);"
      >
        <img
          <?php $exhaustion->point('z3', 0); ?>="width:0px; height: 0px"
          <?php $exhaustion->point('z3', 1); ?>="opacity:1; width:50px; height:50px;"
          <?php $exhaustion->point('z3', 2); ?>="opacity: 0; width:75px; height:75px;"
          src="<?php image_path('exhaustion/z3-8.png'); ?>" alt="Z" />
      </div>

      <div class="z"
        <?php $exhaustion->point('z4', 0); ?>="transform:translate(0px,0px);"
        <?php $exhaustion->point('z4', 1); ?>="transform:translate(120px,-120px);"
        <?php $exhaustion->point('z4', 2); ?>="transform:translate(180px,-180px);"
      >
        <img
          <?php $exhaustion->point('z4', 0); ?>="width:0px; height: 0px"
          <?php $exhaustion->point('z4', 1); ?>="opacity:1; width:50px; height:50px;"
          <?php $exhaustion->point('z4', 2); ?>="opacity: 0; width:75px; height:75px;"
          src="<?php image_path('exhaustion/z3-8.png'); ?>" alt="Z" />
      </div>

      <div class="z"
        <?php $exhaustion->point('z5', 0); ?>="transform:translate(0px,0px);"
        <?php $exhaustion->point('z5', 1); ?>="transform:translate(120px,-120px);"
        <?php $exhaustion->point('z5', 2); ?>="transform:translate(180px,-180px);"
      >
        <img
          <?php $exhaustion->point('z5', 0); ?>="width:0px; height: 0px"
          <?php $exhaustion->point('z5', 1); ?>="opacity:1; width:50px; height:50px;"
          <?php $exhaustion->point('z5', 2); ?>="opacity: 0; width:75px; height:75px;"
          src="<?php image_path('exhaustion/z3-8.png'); ?>" alt="Z" />
      </div>
    </div>

    <img class="shoes" src="<?php image_path('exhaustion/shoes-128.png'); ?>" alt="" />
  </div>

  <div class="text-container"
    <?php $exhaustion->point('text', 0); ?>="background-color: rgba(0,0,0,0.4); opacity: 0;"
    <?php $exhaustion->point('text', 1); ?>="background-color: rgba(0,0,0,0.4); opacity: 1;"
    <?php $exhaustion->point('text', 2); ?>="background-color: rgba(0,0,0,0.4);"
    <?php $exhaustion->point('text', 3); ?>="background-color: rgba(0,0,0,0.6);"
  >
    <div class="text-wrapper"
      <?php $exhaustion->point('text', 2); ?>="left: 0%;"
      <?php $exhaustion->point('text', 3); ?>="left: 100%;"
      data-marker="<?php echo $exhaustion->raw_point('text', 0); ?>"
    >
      <div class="text1 fit">
        <img src="<?php image_path('exhaustion/texta2-2.png'); ?>" alt="The sweetest exhaustion" />
      </div>
    </div>

    <div class="text-wrapper"
      <?php $exhaustion->point('text', 2); ?>="left: -100%;"
      <?php $exhaustion->point('text', 3); ?>="left: 0%;"
      data-marker="<?php echo $exhaustion->raw_point('text', 2); ?>"
    >
      <div class="text2 fit">
        <img src="<?php image_path('exhaustion/textb2-2.png'); ?>" alt="...when you've pushed your limits" />
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
  data-enter-mark="<?php echo 'data' . $victory->raw_section_point('enter') . 'p'; ?>,<?php echo 'data' . $victory->raw_section_point('enter', -1) . 'p'; ?>"
  data-start-mark="<?php echo 'data' . $victory->raw_section_point('start') . 'p'; ?>"
  data-leave-mark="<?php echo 'data' . $victory->raw_section_point('leave') . 'p'; ?>"
  data-emit-events
  data-marker="<?php echo $victory->raw_section_point('start'); ?>"
>
  <div class="inner">
    <div class="video-container">
      <div class="video-placeholder">
        <source src="<?php video_path('triumph-v2.webm'); ?>" type="video/webm">
      </div>
      <div class="text-container">
        <div class="text fit">
          <img src="<?php image_path('victory/text3.png'); ?>" alt="experienced your own kind of triumph" />
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
  data-enter-mark="<?php echo 'data' . $despair->raw_section_point('enter') . 'p'; ?>"
  data-start-mark="<?php echo 'data' . $despair->raw_section_point('start') . 'p'; ?>"
  data-end-mark="<?php echo 'data' . $despair->raw_section_point('end') . 'p'; ?>"
  data-leave-mark="<?php echo 'data' . $despair->raw_section_point('leave') . 'p'; ?>"
  data-emit-events
  data-marker="<?php echo $despair->raw_section_point('start', 1); ?>"
>
  <div class="inner">
    <div class="ground"></div>

    <img class="fixed" src="<?php image_path('despair/cloud-32.png'); ?>" alt="" />
    <img class="fixed" src="<?php image_path('despair/dragonflies-16.png'); ?>" alt="" />

    <img class="runner drinking" src="<?php image_path('despair/runner-drinking-32.png'); ?>" alt="" />
    <img class="runner lady-2" src="<?php image_path('despair/runner-lady-2-32.png'); ?>" alt="" />
    <img class="runner towel" src="<?php image_path('despair/runner-towel-32.png'); ?>" alt="" />

    <img class="person fixed" src="<?php image_path('despair/person-128.png'); ?>" alt="" />
    <img class="tears" src="<?php image_path('despair/person-tears-16.png'); ?>" alt="" />

    <img class="runner african" src="<?php image_path('despair/runner-african-32.png'); ?>" alt="" />
    <img class="runner fat" src="<?php image_path('despair/runner-fat-32.png'); ?>" alt="" />
    <img class="runner lady-1" src="<?php image_path('despair/runner-lady-1-32.png'); ?>" alt="" />


    <div class="text-container">
      <div class="text fit">
        <img src="<?php image_path('despair/text3-2.png'); ?>" alt="achieved what seemed impossible" />
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
  data-enter-mark="<?php echo 'data' . $bamboo->raw_section_point('enter') . 'p'; ?>,<?php echo 'data' . $bamboo->raw_section_point('enter', -1) . 'p'; ?>"
  data-start-mark="<?php echo 'data' . $bamboo->raw_section_point('start') . 'p'; ?>"
  data-leave-mark="<?php echo 'data' . $bamboo->raw_section_point('leave') . 'p'; ?>"
  data-emit-events
  data-marker="<?php echo $bamboo->raw_section_point('start'); ?>"
>
  <div class="inner">
    <div class="video-container">
      <div class="video-placeholder">
        <source src="<?php video_path('clip2.webm'); ?>" type="video/webm">
      </div>
      <div class="overlay"></div>
      <div class="text-container">
        <div class="text fit">
          <img src="<?php image_path('bamboo/text2.png'); ?>" alt="and experienced a trail through bamboo" />
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
  data-enter-mark="<?php echo 'data' . $start->raw_section_point('enter') . 'p'; ?>"
  data-start-mark="<?php echo 'data' . $start->raw_section_point('start') . 'p'; ?>"
  data-emit-events
  data-marker="<?php echo $start->raw_section_point('start'); ?>"
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
          <img src="<?php image_path('start/texta-1-2.png'); ?>" alt="the journey begins" />
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

      <div class="info-container"
        <?php $start->point('register', 0); ?>="left: -100%;"
        <?php $start->point('register', 1); ?>="left: 0%;"
        <?php $start->point('feeds', 0); ?>="background-color: rgba(0,0,0,0);"
        <?php $start->point('feeds', 1); ?>="background-color: rgba(0,0,0,0.8);"
        data-marker="<?php echo $start->raw_point('register', 1); ?>"
      >
        <div class="register-container"
          <?php $start->point('feeds', 0); ?>="bottom: 50%; transform: translateY(50%);"
          <?php $start->point('feeds', 1); ?>="bottom: 100%; transform: translateY(0%);"
        >
          <p class="title">Bangalore ultra.</p>
          <img class="subtitle" src="<?php image_path('start/textb-1-2.png'); ?>" alt="It's tough. Are you?" />
          <div
            <?php $start->point('feeds', 0); ?>="bottom: 50%; transform: translateY(0px);"
            <?php $start->point('feeds', 1); ?>="bottom: 100%; transform: translateY(100px);"
          >
            <?php echo do_shortcode('[register]'); ?>
          </div>
        </div>

        <div class="feeds-container"
          <?php $start->point('feeds', 0); ?>="bottom: -100%;"
          <?php $start->point('feeds', 1); ?>="bottom: 0%;"
          <?php $start->point('sponsors', 0); ?>="bottom: 0%;"
          <?php $start->point('sponsors', 1); ?>="bottom: 100%;"
          data-marker="<?php echo $start->raw_point('feeds', 1); ?>"
        >
          <div class="feeds">
            <div class="feed-1">
              <h3>
                <a href="https://facebook.com/<?php the_field('feed_1_id', 'options'); ?>/">
                  <?php the_field('feed_1_title', 'options'); ?>
                </a>
              </h3>
              <?php ultra_display_facebook_feed( get_field('feed_1_id', 'options') ); ?>
            </div>

            <div class="feed-2">
              <h3>
                <a href="https://facebook.com/<?php the_field('feed_2_id', 'options'); ?>/">
                  <?php the_field('feed_2_title', 'options'); ?>
                </a>
              </h3>
              <?php ultra_display_facebook_feed( get_field('feed_2_id', 'options') ); ?>
            </div>
          </div>
        </div>

        <div class="sponsors-container"
          <?php $start->point('sponsors', 0); ?>="bottom: -100%;"
          <?php $start->point('sponsors', 1); ?>="bottom: 0%;"
          data-marker="<?php echo $start->raw_point('sponsors', 1); ?>"
        >
          <div class="sponsors-inner">
            <?php
            $logoColor = 'fffeef';
            $logoArea = 8000;

            for($i = 1; $i <= 2; $i++) : ?>
              <div class="sponsors sponsors-<?php echo $i; ?>">
                <p><?php the_field('sponsors_title_' . $i, 'options'); ?></p>

                <ul class="logos">
                  <?php
                  $logos = get_field('sponsors_logos_' . $i, 'options');
                  foreach(to_array($logos) as $logo) : ?>
                    <li>
                      <?php if( $logo['link'] ) : ?>
                        <a href="<?php echo $logo['link']; ?>" target="_blank">
                      <?php endif; ?>
                        <img
                          src="<?php echo get_logo_image(get_attached_file($logo['image']['id']), $logoArea, $logoColor) ?>"
                          alt="<?php echo $logo['name']; ?>"
                        />
                      <?php if( $logo['link'] ) : ?>
                        </a>
                      <?php endif; ?>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            <?php endfor; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<a href="#" id="scroll-button"
  <?php $start->point('sponsors', 0); ?>="opacity: 1;"
  <?php $start->point('sponsors', 1); ?>="opacity: 0;"
></a>