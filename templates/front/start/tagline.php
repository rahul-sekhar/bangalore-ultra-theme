<?php $start = get_query_var('front_section'); ?>

<div class="tagline"
  <?php $start->point('sponsors', 0); ?>="left: 0%"
  <?php $start->point('sponsors', 1); ?>="left: 100%"
>
  <p class="title"><?php the_field('event_title', 'options'); ?></p>
  <img class="subtitle" src="<?php image_path('start/textb-1.2.png'); ?>" alt="It's tough. Are you?" />
</div>
