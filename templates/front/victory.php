<?php $victory = get_query_var('front_page')->sections['victory']; ?>
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
        <source src="<?php video_path('triumph-v3.webm'); ?>" type="video/webm">
        <source src="<?php video_path('triumph-v3.mp4'); ?>" type="video/mp4">
      </div>
      <div class="text-container">
        <div class="text fit">
          <img src="<?php image_path('victory/text3.png'); ?>" alt="experienced your own kind of triumph" />
        </div>
      </div>
    </div>
  </div>
</section>