<?php

function ultra_front_page() {
  $page = new UltraFrontPage();

  $page->section('exhaustion')
    ->event('z1', 0)
      ->add(500)
      ->add(300)
      ->section()

    ->event('z2', 'z1:1', -200)
      ->add(500)
      ->add(300)
      ->section()

    ->event('z3', 'z2:1', -200)
      ->add(500)
      ->section()

    ->event('form-letters', 'z3:end')
      ->add(250)
      ->add(250)
      ->section()

    ->event('wait', 'form-letters:end')
      ->add(300);

  $page->section('victory', 400)
    ->event('wait')
      ->add(0)
      ->add(300);

  $page->section('impossible')
    ->event('wait')
      ->add(0)
      ->add(200);

  $page->section('bamboo', 400)
    ->event('wait')
      ->add(0)
      ->add(300);

  $page->section('start')
    ->event('wait')
      ->add(0)
      ->add(300);

  $page->section('start_vid')
    ->event('wait')
      ->add(0)
      ->add(300);

  $page->section('tagline', 200, 0)
    ->event('wait')
      ->add(0)
      ->add(300);

  return $page;
}