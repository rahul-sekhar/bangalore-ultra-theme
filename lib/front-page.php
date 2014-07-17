<?php

class UltraFrontPage {
  public static function Instance() {
    static $inst = null;
    if ($inst === null) {
      $inst = new UltraFrontPage();
    }
    return $inst;
  }

  public $exhaustion_pre, $exhaustion;

  private function __construct() {
    $this->exhaustion_pre = new FrontPageSection(0);
    $this->exhaustion = new FrontPageSection($this->exhaustion_pre->out());
    $this->test = new FrontPageSection($this->exhaustion->out());
    $this->victory = new FrontPageSection($this->test->out());
    $this->impossible = new FrontPageSection($this->victory->out());
    $this->bamboo = new FrontPageSection($this->impossible->out());
    $this->start = new FrontPageSection($this->bamboo->out());
    $this->start_vid = new FrontPageSection($this->start->out());
    $this->tagline = new FrontPageSection($this->start_vid->out(), 600, 200, 0);
  }
}

class FrontPageSection {
  private $in_time, $start, $length, $out_time;

  function __construct($start, $length=600, $in_time=200, $out_time=200) {
    $this->start = $start;
    $this->length = $length;
    $this->in_time = $in_time;
    $this->out_time = $out_time;
  }

  function in() {
    return max(0, $this->start() - $this->in_time);
  }

  function start() {
    return $this->start;
  }

  function end() {
    return $this->start() + $this->length;
  }

  function out() {
    return $this->end() + $this->out_time;
  }

  function data() {
    $data = '';
    if ($this->in() != $this->start()) {
      $data .= 'data-' . $this->in() . '="top: 100%" ';
    }

    $data .= 'data-' . $this->start() . '="top: 0%" ';
    $data .= 'data-' . $this->end() . '="top: 0%"';
    $data .= 'data-' . $this->out() . '="top: -100%"';

    return $data;
  }
}