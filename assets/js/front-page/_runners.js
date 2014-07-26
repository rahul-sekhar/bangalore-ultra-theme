(function($) {
  var runners = [
    {
      name: 'lady',
      speed: 1.2
    },
    {
      name: 'crutch',
      speed: 1
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
  var lastElement = '.crutch-runner';
  var speedMultiplier = 0.5;


  $(document).ready(function () {
    var inProgress = false;
    var section = $('#despair');

    $.each(runners, function (index, runner) {
      runner.element = section.find('.' + runner.name + '-runner');
    });

    section.on('start', function () {
      startRunners();
      section.addClass('play');
    });

    section.find(lastElement)
      .on('transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd', function(e) {
        // if (e.originalEvent.propertyName !== 'opacity') {
          resetRunners();
          section.removeClass('play');
        // }
    });

    function resetRunners() {
      $.each(runners, function (index, runner) {
        runner.element.css('transition-duration', '0s');
      });
    }

    function startRunners() {
      $.each(runners, function (index, runner) {
        var distance = section.width() + runner.element.width();
        var time = distance / (runner.speed * speedMultiplier);
        runner.element.css('transition-duration', time + 'ms');
      });
    }
  });
})(jQuery);