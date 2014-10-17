'use strict';

(function($) {
  $(document).ready(function () {
    var elements = $('.fit');

    elements.each(function () {
      var element = $(this);
      element.data('ratio', element.innerWidth() / element.innerHeight());
    });

    $(window).on('resize', function () {
      elements.each(function () {
        var element = $(this);
        var container = element.parent();
        var containerRatio = container.innerWidth() / container.innerHeight();
        var elementRatio = element.data('ratio');

        if (containerRatio > elementRatio) {
          var height = container.innerHeight();
          element.height(height);
          element.width(height * elementRatio);
        } else {
          var width = container.innerWidth();
          element.width(width);
          element.height(width / elementRatio);
        }
      });
    });
  });
})(jQuery);