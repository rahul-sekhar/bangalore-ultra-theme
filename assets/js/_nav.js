(function($) {
  $(document).ready(function () {
    $('#pull-nav').on('click', function () {
      $('body').toggleClass('nav-shown');
    });

    $('nav.page a').smoothScroll();
  });
})(jQuery);