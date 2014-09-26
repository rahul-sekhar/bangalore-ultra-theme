'use strict';

(function($) {
  $(document).ready(function () {

    // Check for a map
    if ($('.small-map').length === 0) {
      return;
    }

    $('.small-map').click(function() {
      $(this).next('.full-map').fadeIn();
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
  });
})(jQuery);