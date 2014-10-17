'use strict';

(function($) {
  $(document).ready(function () {

    // Check for a map
    if ($('.small-map').length === 0) {
      return;
    }

    $('.small-map').click(function() {
      $(this).next('.full-map').fadeIn();
      $(window).resize();
    });

    var maps = $('.full-map');

    maps.find('.close').click(function(e) {
      e.preventDefault();
      $(this).closest('.full-map').fadeOut();
    });

    maps.find('.route').first().show();
    maps.find('.options li').first().addClass('current');

    maps.find('.options').on('click', 'a', function(e) {
      e.preventDefault();
      var option = $(this);
      var routeClass = option.data('route-class');
      var map = option.closest('.full-map');

      map.find('.route:visible:not(.' + routeClass + ')').fadeOut();
      map.find('.route.' + routeClass).fadeIn();
      map.find('.options li').removeClass('current');

      option.closest('li').addClass('current');
    });

    $(window).on('resize', function () {
      maps.each(function () {
        var width, height;
        var map = $(this);
        var wrapper = map.find('.wrapper');
        var containerRatio = map.innerWidth() / map.innerHeight();
        var elementRatio = map.data('ratio');

        if (containerRatio > elementRatio) {
          height = map.innerHeight();
          width = height * elementRatio;
          wrapper.height(height);
          wrapper.width(width);
          wrapper.css('top', '0');
          wrapper.css('left', (map.innerWidth() / 2) - (width / 2));
        } else {
          width = map.innerWidth();
          height = width / elementRatio;
          wrapper.width(width);
          wrapper.height(height);
          wrapper.css('left', '0');
          wrapper.css('top', (map.innerHeight() / 2) - (height / 2));
        }
      });
    });
  });
})(jQuery);