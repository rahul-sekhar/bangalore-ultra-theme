<?php

function ultra_front_page() {
  $page = new UltraFrontPage();

  $page->section('exhaustion')
    ->event('z1', 0)
      ->add(500)
      ->add(300)
      ->section()

    ->event('z2', ':last', -300)
      ->add(500)
      ->add(300)
      ->section()

    ->event('z3', ':last', -300)
      ->add(500)
      ->add(300)
      ->section()

    ->event('wait', ':last')
      ->add(100);

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