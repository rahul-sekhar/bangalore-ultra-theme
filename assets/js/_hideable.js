(function($) {
  $(document).ready(function () {
    $('.hideable .contents').hide();

    $('.hideable .title')
      .wrapInner('<a href=""></a>')
      .on('click', 'a', function (e) {
        e.preventDefault();
        $(this).closest('.hideable')
          .toggleClass('expanded')
          .find('.contents').slideToggle();
        });
  });
})(jQuery);