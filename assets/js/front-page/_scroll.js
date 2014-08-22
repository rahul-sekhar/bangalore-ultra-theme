'use strict';

(function($) {
  window.ultraInitScroll = function () {
    var s = window.skrollr.init({
      keyframe: function (element, name, direction) {
        var el = $(element);

        // Triggers events, for example "start-down" when the start point of a section is scrolled to
        // This requires that the section has a data element called dataStart, with a value data-[number],
        // where number is the scroll value of that point

        $.each(['enter', 'start', 'end', 'leave'], function () {
          if (containsString(el.data(this + 'Mark'), name)) {
            el.trigger(this + '-' + direction);
          }
        });
      }
    });
  };

  var scrollPoints = $('[data-marker]');
  $(document).on('click', '#scroll-button', function (e) {
    e.preventDefault();

    var currentPos = $(window).scrollTop();
    var windowHeight = $(window).height() / 100;

    console.log(currentPos);
    scrollPoints.each(function () {
      var point = Math.floor($(this).data('marker') * windowHeight);
      if (point > currentPos + 5) {
        console.log(point);
        $(window).scrollTop(point);
        return false;
      }
    });
  });

  function containsString(container, contained) {
    if (!container || !contained) {
      return false;
    }
    return (container.split(',').indexOf(contained) !== -1);
  }
})(jQuery);