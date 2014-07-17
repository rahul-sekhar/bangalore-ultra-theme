(function($) {
  $(document).ready(function () {
    $('video').appear().on('appear', function () {
      this.play();
    }).on('disappear', function () {
      this.pause();
    });
  });
})(jQuery);