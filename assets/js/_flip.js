(function($) {
  $(document).ready(function () {
    if (!$('body').hasClass('page-template-flip_page-php')) {
      return;
    }

    var sections = $('section');

    $(window).on('resize', function () {
      sections.each(function () {
        var section = $(this);
        section.height('auto');
        var inner = section.find('.inner');
        var oldPos = inner.css('position');
        inner.css('position', 'static');
        var windowHeight = $(window).height();
        section.height(Math.max(section.height(), windowHeight));
        inner.css('position', oldPos);
      });
    });

    $(window).resize();
  });
})(jQuery);