'use strict';

(function($) {
  $(document).ready(function () {

    // Check for a map
    if ($('.small-map').length === 0) {
      return;
    }

    $('.small-map').click(function() {
      $(this).next('.full-map').fadeIn();
      resizeMap();
    });

    $('.full-map .close').click(function(e) {
      e.preventDefault();
      $(this).closest('.full-map').fadeOut();
    });

    $('.full-map .options').on('click', 'a', function(e) {
      e.preventDefault();
      var option = $(this);
      var routeClass = option.data('route-class');
      var map = option.closest('.full-map');

      map.find('.route:visible:not(.' + routeClass + ')').fadeOut();
      map.find('.route.' + routeClass).fadeIn();
      map.find('.options li').removeClass('current');

      option.closest('li').addClass('current');
    });

    function resizeMap() {
      var mapInner = $('.full-map .inner');

      var currWidth = mapInner.data('imgWidth');
      var newWidth = 'full';
      var widths = [400, 800, 1024, 1280, 1600];

      var screenWidth = Math.max( $(window).width(), window.innerWidth );
      $.each(widths, function (i, width) {
        if (width >= screenWidth) {
          newWidth = width;
          return false;
        }
      });

      if (newWidth !== currWidth) {
        mapInner.data('imgWidth', newWidth);

        mapInner.find('.picture').each(function () {
          var picture = $(this);
          picture.find('img').remove();
          picture.append('<img src="' + picture.data('w' + newWidth) + '" alt="" />');
        });
      }

      var screenHeight = $(window).height();
      var mapHeight = mapInner.width() / mapInner.data('ratio');

      if (mapHeight > 0) {
        mapInner.css('margin-top', parseInt((screenHeight - mapHeight) / 2, 10) + 'px');
      }
    }

    $(window).on('resize', resizeMap);
  });
})(jQuery);