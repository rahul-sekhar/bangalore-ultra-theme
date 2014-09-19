'use strict';

(function($) {
  $(document).ready(function () {

    // Main nav
    $('#pull-nav').on('click', function (e) {
      e.preventDefault();
      $('body').toggleClass('nav-shown');
    });

    // Page side nav
    $('nav.page a').smoothScroll();

    $('.side-nav-pull').on('click', function (e) {
      e.preventDefault();
      $('body').toggleClass('side-nav-shown');
    });

    $('nav.page').on('click', 'a', function (e) {
      if ($('body').hasClass('side-nav-shown')) {
        $('body').removeClass('side-nav-shown');
        e.preventDefault();
        var link = this;

        setTimeout(function () {
          $(link).click();
        });
      }
    });
  });
})(jQuery);