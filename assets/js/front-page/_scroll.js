(function($) {
  $(document).ready(function () {
    var s = skrollr.init({
      keyframe: function (element, name, direction) {
        if (element.id === 'impossible') {
          // Trigger the runner animation
          var el = $(element);
          var startMark = 'data' + el.data('startMark');
          var endMark = 'data' + el.data('endMark');
          if ((direction === 'down' && name === startMark)) {
            el.addClass('play');
          }
        }
      }
    });

    // Clear the runner animation when finished
    $('#impossible .foreground-runners')
      .on('transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd', function() {
        $('#impossible').removeClass('play');
    });
  });
})(jQuery);