'use strict';

(function($) {
  window.runners = [
    {
      name: 'drinking',
      speed: 0.9
    },
    {
      name: 'african',
      speed: 1.7
    },
    {
      name: 'lady',
      speed: 1.2
    },
    {
      name: 'lady-2',
      speed: 1.05
    },
    {
      name: 'towel',
      speed: 1.1
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
          .css('transition-delay', '0ms')
          .css('transition-duration', time + 'ms');

        if (time > maxTime) {
          maxTime = time;
        }
      });

      section.find('.text-container')
        .css('transition-delay', maxTime + 'ms')
        .css('transition-duration', '500ms');
    }
  });
})(jQuery);