'use strict';

(function($) {
  window.ultraInitScroll = function () {
    window.skrollrObj = window.skrollr.init({
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

    var currentPos = window.skrollrObj.getScrollTop();
    var windowHeight = $(window).height() / 100;

    var pointFound = false;
    scrollPoints.each(function () {
      var point = Math.floor($(this).data('marker') * windowHeight);
      if (point > currentPos + 5) {
        window.skrollrObj.setScrollTop(point);
        pointFound = true;
        return false;
      }
    });

    // Handle the last point
    if (!pointFound) {
      window.skrollrObj.setScrollTop(0);
    }
  });

  function containsString(container, contained) {
    if (!container || !contained) {
      return false;
    }
    return (container.split(',').indexOf(contained) !== -1);
  }
})(jQuery);