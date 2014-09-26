<?php $despair = get_query_var('front_page')->sections['despair']; ?>
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

    <img class="fixed" src="<?php image_path('despair/cloud.32.png'); ?>" alt="" />
    <img class="fixed" src="<?php image_path('despair/dragonflies.16.png'); ?>" alt="" />

    <img class="runner drinking" src="<?php image_path('despair/runner-drinking.32.png'); ?>" alt="" />
    <img class="runner lady-2" src="<?php image_path('despair/runner-lady-2.32.png'); ?>" alt="" />
    <img class="runner towel" src="<?php image_path('despair/runner-towel.32.png'); ?>" alt="" />

    <img class="person fixed" src="<?php image_path('despair/person.128.png'); ?>" alt="" />
    <img class="tears" src="<?php image_path('despair/person-tears.16.png'); ?>" alt="" />

    <img class="runner african" src="<?php image_path('despair/runner-african.32.png'); ?>" alt="" />
    <img class="runner fat" src="<?php image_path('despair/runner-fat.32.png'); ?>" alt="" />
    <img class="runner lady-1" src="<?php image_path('despair/runner-lady-1.32.png'); ?>" alt="" />


    <div class="text-container">
      <div class="text fit">
        <img src="<?php image_path('despair/text3.2.png'); ?>" alt="achieved what seemed impossible" />
      </div>
    </div>
  </div>
</section>