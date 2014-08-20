<?php

// Page class
class UltraFrontPage {
  public $sections = [];

  function section($name, $enter_time=200, $leave_time=200) {
    $last_section = end($this->sections);
    $start = $last_section ? $last_section->leave() : 0;
    $this->sections[$name] = new FPSection($start, $enter_time, $leave_time);
    return $this->sections[$name];
  }
}


// Page section class
class FPSection {
  private $enter_time, $start, $leave_time;
  public $events = [];

  function __construct($start, $enter_time, $leave_time) {
    $this->start = $start;
    $this->enter_time = $enter_time;
    $this->leave_time = $leave_time;
  }

  function event($name, $marker=null, $offset=0) {
    $event = new FPEvent($this);
    $event->decode($marker, $offset);

    $this->events[$name] = $event;
    return $event;
  }

  function last_event() {
    return end($this->events);
  }

  function length() {
    $last_event = $this->last_event();
    $length = $last_event ? $last_event->end() : 0;
    return $length;
  }

  function enter() {
    return max(0, $this->start() - $this->enter_time);
  }

  function start() {
    return $this->start;
  }

  function end() {
    return $this->start() + $this->length();
  }

  function leave() {
    return $this->end() + $this->leave_time;
  }

  function section_point($section_event, $offset=0) {
    echo 'data-' . ($this->{ $section_event }() + $offset);
  }

  function point($event, $point) {
    echo 'data-' . ($this->start() + $this->events[$event]->points[$point]);
  }
}


// Section event class
class FPEvent {
  public $points = [];

  private $section;

  function __construct($section) {
    $this->section = $section;
  }

  function mark($point) {
    $this->points[] = $point;
    return $this;
  }

  function add($length) {
    $this->mark($this->end() + $length);
    return $this;
  }

  function end() {
    $last_point = end($this->points);
    return $last_point ? $last_point : 0;
  }

  function section() {
    return $this->section;
  }

  function decode($marker, $offset=0) {
    if (is_null($marker)) return $this;

    if (is_int($marker)) {
      $this->mark($marker + $offset);
      return $this;
    }

    $parts = explode(':', $marker);
    if (count($parts) !== 2) throw new Exception('Invalid marker');
    $event = $this->section->events[$parts[0]];

    if ($parts[1] === 'end') {
      $start = $event->end();
    } else {
      $start = $event->points[$parts[1]];
    }

    $this->mark($start + $offset);
    return $this;
  }
}