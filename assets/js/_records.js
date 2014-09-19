'use strict';

(function($) {
  $(document).ready(function () {

    var records = $('#records');
    if (records.length === 0) {
      return;
    }

    var tableContainer = records.find('.table-container');

    function switchRecord(target) {
      var source = records.find('table:visible');
      if (target[0] === source[0]) {
        return;
      }

      source.addClass('exiting').fadeOut(function () {
        source.removeClass('exiting');
      });
      target.fadeIn();
    }

    var courseLi = records.find('.course');
    var yearLi = records.find('.year');
    var yearList = yearLi.find('ul');
    var yearLink = records.find('.year > span');

    courseLi.find('span').click(function () {
      yearList.hide();
      yearLink.text('Winners of');
      yearLi.removeClass('current');
      courseLi.addClass('current');
      switchRecord(records.find('table.course'));
    });

    yearLink.click(function (e) {
      e.preventDefault();
      yearList.slideToggle('fast');
    });

    yearList.on('click', 'span', function () {
      yearList.hide();
      yearLink.text('Winners of ' + $(this).text());
      courseLi.removeClass('current');
      yearLi.addClass('current');
      switchRecord(records.find('table.year' + $.trim($(this).text())));
    });
  });
})(jQuery);