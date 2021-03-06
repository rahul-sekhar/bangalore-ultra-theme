'use strict';

(function($) {
  $(document).ready(function () {
    $('body.home section').on('enter-down start-down leave-up', function () {
      $(this).find('video').each(function () {
        this.play();
      });

    }).on('leave-down enter-up', function () {
      $(this).find('video').each(function () {
        this.pause();
      });
    });

    window.v1 = $('#victory video')[0];
    window.v2 = $('#bamboo video')[0];
    window.v3 = $('#start video')[0];
  });
})(jQuery);