<?php

function ultra_front_page() {
  $page = new UltraFrontPage();

  $page->section('exhaustion')
    ->event('z1', 0)
      ->add(300)
      ->add(200)
      ->section()

    ->event('wait', ':last')
      ->add(200);

  $page->section('victory')
    ->event('wait')
      ->add(0)
      ->add(500);

  $page->section('impossible')
    ->event('wait')
      ->add(0)
      ->add(500);

  $page->section('bamboo')
    ->event('wait')
      ->add(0)
      ->add(500);

  $page->section('start')
    ->event('wait')
      ->add(0)
      ->add(500);

  $page->section('start_vid')
    ->event('wait')
      ->add(0)
      ->add(500);

  $page->section('tagline', 200, 0)
    ->event('wait')
      ->add(0)
      ->add(500);

  return $page;
}