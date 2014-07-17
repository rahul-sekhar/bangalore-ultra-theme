<?php

function ultra_info_link() {
  $page = get_pages('number=1')[0];
  return get_permalink($page);
}