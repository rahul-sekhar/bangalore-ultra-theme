<?php
set_query_var('front_page', ultra_front_page());

get_template_part('templates/front/loading');

get_template_part('templates/front/exhaustion');

get_template_part('templates/front/victory');

get_template_part('templates/front/despair');

get_template_part('templates/front/bamboo');

get_template_part('templates/front/start');

get_template_part('templates/front/scroll_button');
?>