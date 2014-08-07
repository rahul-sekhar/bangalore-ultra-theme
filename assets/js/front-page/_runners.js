'use strict';

(function($) {
  var runners = [
    {
      name: 'lady',
      speed: 1.2
    },
    {
      name: 'african',
      speed: 1.4
    },
    {
      name: 'fat',
      speed: 1.1
    }
  ];
  var speedMultiplier = 0.9;


  $(document).ready(function () {
    var inProgress = false;
    var section = $('#despair');

    $.each(runners, function (index, runner) {
      runner.element = section.find('.' + runner.name + '-runner');
    });

    section.on('start-down', function () {
      prepareAnimation();
      section.addClass('run');
    });

    section.on('enter-down enter-up', function () {
      instantChange();
      section.removeClass('run');
    });

    function instantChange() {
      $.each(runners, function (index, runner) {
        runner.element
          .css('transition-delay', '0ms')
          .css('transition-duration', '0ms');
      });

      section.find('.text')
        .css('transition-delay', '0ms')
        .css('transition-duration', '0ms');
    }

    function prepareAnimation() {
      var maxTime = 0;

      $.each(runners, function (index, runner) {
        var distance = section.width() + runner.element.width();
        var time = distance / (runner.speed * speedMultiplier);
        runner.element
          .css('transition-delay', '0ms')
          .css('transition-duration', time + 'ms');

        if (time > maxTime) {
          maxTime = time;
        }
      });

      section.find('.text')
        .css('transition-delay', maxTime + 'ms')
        .css('transition-duration', '500ms');
    }
  });
})(jQuery);