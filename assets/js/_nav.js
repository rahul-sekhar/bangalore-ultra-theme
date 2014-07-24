(function($) {
  $(document).ready(function () {
    $('#pull-nav').on('click', function (e) {
      e.preventDefault();
      $('body').toggleClass('nav-shown');
    });

    $('nav.page a').smoothScroll();
  });
})(jQuery);