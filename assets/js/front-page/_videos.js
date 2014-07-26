'use strict';

(function($) {
  $(document).ready(function () {
    $('body.home section').on('enter-down leave-up', function () {
      $(this).find('video').each(function () {
        this.play();
      });

    }).on('leave-down enter-up', function () {
      $(this).find('video').each(function () {
        this.pause();
      });
    });
  });
})(jQuery);