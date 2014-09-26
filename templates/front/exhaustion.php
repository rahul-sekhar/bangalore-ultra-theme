<?php $exhaustion = get_query_var('front_page')->sections['exhaustion']; ?>
<section id="exhaustion"
  <?php $exhaustion->section_point('start'); ?>="top: 0%;"
  <?php $exhaustion->section_point('leave'); ?>="top: 0%;"
  <?php $exhaustion->section_point('leave', 1); ?>="top: -100%;"
  data-marker="<?php echo $exhaustion->raw_section_point('start'); ?>"
>
  <div class="inner">

    <img class="cloud" src="<?php image_path('exhaustion/cloud.64.png'); ?>" alt="" />

    <div class="silhouettes"></div>

    <div class="ground"></div>

    <div class="person">
      <img class="person-img" src="<?php image_path('exhaustion/person-old.64.png'); ?>" alt="" />

      <div class="z"
        <?php $exhaustion->point('z1', 0); ?>="transform:translate(40px,-40px);"
        <?php $exhaustion->point('z1', 1); ?>="transform:translate(50px,-50px);"
        <?php $exhaustion->point('z1', 2); ?>="transform:translate(120px,-120px);"
        <?php $exhaustion->point('z1', 3); ?>="transform:translate(200px,-200px);"
      >
        <img
          <?php $exhaustion->point('z1', 0); ?>="opacity:0;width:10px;height:10px"
          <?php $exhaustion->point('z1', 1); ?>="opacity:1;width:15px;height:15px"
          <?php $exhaustion->point('z1', 2); ?>="opacity:1;width:50px;height:50px;"
          <?php $exhaustion->point('z1', 3); ?>="opacity:0;width:80px;height:80px;"
          src="<?php image_path('exhaustion/z3.8.png'); ?>" alt="Z" />
      </div>

      <div class="z"
        <?php $exhaustion->point('z2', 0); ?>="transform:translate(40px,-40px);"
        <?php $exhaustion->point('z2', 1); ?>="transform:translate(50px,-50px);"
        <?php $exhaustion->point('z2', 2); ?>="transform:translate(120px,-120px);"
        <?php $exhaustion->point('z2', 3); ?>="transform:translate(200px,-200px);"
      >
        <img
          <?php $exhaustion->point('z2', 0); ?>="opacity:0;width:10px;height:10px"
          <?php $exhaustion->point('z2', 1); ?>="opacity:1;width:15px;height:15px"
          <?php $exhaustion->point('z2', 2); ?>="opacity:1;width:50px;height:50px;"
          <?php $exhaustion->point('z2', 3); ?>="opacity:0;width:80px;height:80px;"
          src="<?php image_path('exhaustion/z3.8.png'); ?>" alt="Z" />
      </div>

      <div class="z"
        <?php $exhaustion->point('z3', 0); ?>="transform:translate(40px,-40px);"
        <?php $exhaustion->point('z3', 1); ?>="transform:translate(50px,-50px);"
        <?php $exhaustion->point('z3', 2); ?>="transform:translate(120px,-120px);"
        <?php $exhaustion->point('z3', 3); ?>="transform:translate(200px,-200px);"
      >
        <img
          <?php $exhaustion->point('z3', 0); ?>="opacity:0;width:10px;height:10px"
          <?php $exhaustion->point('z3', 1); ?>="opacity:1;width:15px;height:15px"
          <?php $exhaustion->point('z3', 2); ?>="opacity:1;width:50px;height:50px;"
          <?php $exhaustion->point('z3', 3); ?>="opacity:0;width:80px;height:80px;"
          src="<?php image_path('exhaustion/z3.8.png'); ?>" alt="Z" />
      </div>
    </div>

    <img class="shoes" src="<?php image_path('exhaustion/shoes.128.png'); ?>" alt="" />
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
      data-marker="<?php echo $exhaustion->raw_point('text', 1); ?>"
    >
      <div class="text1 fit">
        <img src="<?php image_path('exhaustion/texta2.2.png'); ?>" alt="The sweetest exhaustion" />
      </div>
    </div>

    <div class="text-wrapper"
      <?php $exhaustion->point('text', 2); ?>="left: -100%;"
      <?php $exhaustion->point('text', 3); ?>="left: 0%;"
      data-marker="<?php echo $exhaustion->raw_point('text', 3); ?>"
    >
      <div class="text2 fit">
        <img src="<?php image_path('exhaustion/textb2.2.png'); ?>" alt="...when you've pushed your limits" />
      </div>
    </div>
  </div>
</section>