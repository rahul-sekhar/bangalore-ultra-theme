'use strict';

(function($) {
  window.runners = [
    {
      name: 'drinking',
      speed: 1,
      delay: 300
    },
    {
      name: 'african',
      speed: 1.3,
      delay: 0
    },
    {
      name: 'lady-1',
      speed: 1.2,
      delay: 200
    },
    {
      name: 'lady-2',
      speed: 1.05,
      delay: 700
    },
    {
      name: 'towel',
      speed: 1.1,
      delay: 500
    },
    {
      name: 'fat',
      speed: 0.9,
      delay: 800
    }
  ];
  window.speedMultiplier = 0.6;


  $(document).ready(function () {
    var inProgress = false;
    var section = $('#despair');

    $.each(window.runners, function (index, runner) {
      runner.element = section.find('.' + runner.name + '.runner');
    });

    section.on('start-down leave-down leave-up', function () {
      prepareAnimation();
      section.addClass('run');
    });

    section.on('enter-down enter-up', function () {
      instantChange();
      section.removeClass('run');
    });

    function instantChange() {
      $.each(window.runners, function (index, runner) {
        runner.element
          .css('transition-delay', '0ms')
          .css('transition-duration', '0ms');
      });

      section.find('.tears')
        .css('transition-delay', '0ms')
        .css('transition-duration', '0ms');

      section.find('.text-container')
        .css('transition-delay', '0ms')
        .css('transition-duration', '0ms');
    }

    function prepareAnimation() {
      var maxTime = 0;

      $.each(window.runners, function (index, runner) {
        var distance = section.find('.runners').width() + runner.element.width();
        var time = distance / (runner.speed * window.speedMultiplier);
        runner.element
          .css('transition-delay', runner.delay + 'ms')
          .css('transition-duration', time + 'ms');

        if (time + runner.delay > maxTime) {
          maxTime = time + runner.delay;
        }
      });

      section.find('.tears')
        .css('transition-delay', (maxTime - 500) + 'ms')
        .css('transition-duration', '200ms, 1000ms');

      section.find('.text-container')
        .css('transition-delay', (maxTime + 250) + 'ms')
        .css('transition-duration', '500ms');
    }
  });
})(jQuery);