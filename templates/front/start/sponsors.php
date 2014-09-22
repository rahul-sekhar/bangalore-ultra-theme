<?php $start = get_query_var('front_section'); ?>

<div class="sponsors-container"
  <?php $start->point('sponsors', 0); ?>="left: -100%;"
  <?php $start->point('sponsors', 1); ?>="left: 0%;"
  <?php $start->point('feeds', 0); ?>="left: 0%;"
  <?php $start->point('feeds', 1); ?>="left: 100%;"
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