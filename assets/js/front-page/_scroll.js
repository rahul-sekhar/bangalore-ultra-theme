(function($) {
  $(document).ready(function () {
    var s = skrollr.init({
      keyframe: function (element, name, direction) {
        var el = $(element);

        startMark = containsString(el.data('startMark'), name);
        enterMark = containsString(el.data('enterMark'), name);
        leaveMark = containsString(el.data('leaveMark'), name);

        // Trigger runner animation
        if (element.id === 'impossible') {
          if ( direction === 'down' && startMark ) {
            el.addClass('play');
          }
        }

        // Play and pause videos
        if  (( direction === 'down' && enterMark ) ||
             ( direction === 'up' && leaveMark )) {

          el.find('video').each(function () {
            console.log('playing', this);
            this.play();
          });

        } else if (( direction === 'down' && leaveMark ) ||
                   ( direction === 'up' && enterMark )) {

          el.find('video').each(function () {
            console.log('pausing', this);
            this.pause();
          });

        }
      }
    });

    // Clear the runner animation when finished
    $('#impossible .tears')
      .on('transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd', function(e) {
        if (e.originalEvent.propertyName !== 'opacity') {
          $('#impossible').removeClass('play');
        }
    });
  });

  function containsString(container, contained) {
    if (!container || !container) {
      return false;
    }
    return (container.split(',').indexOf(contained) !== -1);
  }
})(jQuery);