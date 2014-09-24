<?php

function ultra_front_page() {
  $page = new UltraFrontPage();

  $page->section('exhaustion')
    ->event('z1', -75)
      ->add(5)
      ->add(70)
      ->add(30)
      ->section()

    ->event('z2', 'z1:2', -40)
      ->add(5)
      ->add(70)
      ->add(35)
      ->section()

    ->event('z3', 'z2:2', -40)
      ->add(5)
      ->add(70)
      ->add(35)
      ->section()

    ->event('z4', 'z3:2', 40)
      ->add(10)
      ->add(70)
      ->add(35)
      ->section()

    ->event('z5', 'z4:2', -40)
      ->add(10)
      ->add(70)
      ->add(35)
      ->section()

    ->event('z6', 'z5:2', -40)
      ->add(10)
      ->add(70)
      ->add(35)
      ->section()

    ->event('text', 'z6:end', -45)
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
      ->add(20)
      ->add(40)
      ->section()

    ->event('feeds', 'sponsors:end')
      ->add(20);

  return $page;
}