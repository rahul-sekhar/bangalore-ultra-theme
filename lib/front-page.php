<?php

function ultra_front_page() {
  $page = new UltraFrontPage();

  $page->section('exhaustion')
    ->event('z1', -50)
      ->add(50)
      ->add(25)
      ->section()

    ->event('z2', 'z1:1', -25)
      ->add(50)
      ->add(25)
      ->section()

    ->event('z3', 'z2:1', -25)
      ->add(50)
      ->add(25)
      ->section()

    ->event('z4', 'z3:1', -25)
      ->add(50)
      ->add(25)
      ->section()

    ->event('z5', 'z4:1', -25)
      ->add(50)
      ->add(25)
      ->section()

    ->event('text', 'z5:end', -30)
      ->add(20)
      ->add(40)
      ->add(20)
      ->add(40);

  $page->section('victory')
    ->event('wait')
      ->add(30);

  $page->section('despair', 20)
    ->event('wait')
      ->add(40);

  $page->section('bamboo')
    ->event('wait')
      ->add(30);

  $page->section('start')
    ->event('wait')
      ->add(40)
      ->section()

    ->event('dates', 'wait:end')
      ->add(20)
      ->add(40)
      ->section()

    ->event('register', 'dates:end')
      ->add(20)
      ->add(40)
      ->section()

    ->event('sponsors', 'register:end')
      ->add(20);

  return $page;
}