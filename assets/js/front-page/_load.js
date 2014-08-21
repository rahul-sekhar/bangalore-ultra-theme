(function($) {
  $(window).load(function () {

    // Hide the loading screen
    $('body').addClass('loaded');

    // Initialise skrollr
    window.ultraInitScroll();

    // Trigger a resize to size elements properly when they're shown
    $(window).trigger('resize');

    // Load videos that haven't yet been loaded
    loadVideos();

    // Hide loading screen
    $('#loading').fadeOut(500);
  });

  function loadVideos() {
    $('.video-placeholder').wrapInner('<video loop></video>');
  }
})(jQuery);