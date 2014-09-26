<?php $bamboo = get_query_var('front_page')->sections['bamboo']; ?>
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
        <source src="<?php video_path('bamboo.webm'); ?>" type="video/webm">
        <source src="<?php video_path('bamboo.mp4'); ?>" type="video/mp4">
      </div>
      <div class="overlay"></div>
      <div class="text-container">
        <div class="text fit">
          <img src="<?php image_path('bamboo/text2.2.png'); ?>" alt="and experienced a trail through bamboo" />
        </div>
      </div>
    </div>
  </div>
</section>