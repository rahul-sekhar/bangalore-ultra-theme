<?php

function ultra_front_page() {
  $page = new UltraFrontPage();

  $page->section('exhaustion')
    ->event('static-z', 5)
      ->add(25)
      ->section()

    ->event('z1', 0)
      ->add(50)
      ->add(30)
      ->section()

    ->event('z2', 'z1:1', -20)
      ->add(50)
      ->add(30)
      ->section()

    ->event('z3', 'z2:1', -20)
      ->add(50)
      ->section()

    ->event('form-letters', 'z3:end')
      ->add(25)
      ->add(25)
      ->add(25)
      ->section()

    ->event('text', 'form-letters:end')
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