<?php $start = get_query_var('front_page')->sections['start']; ?>
<?php set_query_var('front_section', $start); ?>
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
        <?php $start->point('sponsors', 1); ?>="background-color: rgba(0,0,0,0.8);"
        <?php $start->point('sponsors', 0); ?>="background-color: rgba(0,0,0,0);"
        data-marker="<?php echo $start->raw_point('register', 1); ?>"
      >
        <?php echo do_shortcode('[register]'); ?>

        <div class="info">
          <?php
          get_template_part('templates/front/start/tagline');

          get_template_part('templates/front/start/sponsors');

          get_template_part('templates/front/start/feeds');
          ?>
        </div>
      </div>
    </div>
  </div>
</section>