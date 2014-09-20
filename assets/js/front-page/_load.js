'use strict';

(function($) {
  var initialized = false;
  function init() {
    if (initialized) {
      return;
    }
    initialized = true;

    // Hide the loading screen
    $('body').addClass('loaded');

    // The remaining tasks are only for the front page
    if (!$('body').hasClass('home')) {
      return;
    }

    // Initialise skrollr
    window.ultraInitScroll();

    // Trigger a resize to size elements properly when they're shown
    $(window).trigger('resize');

    // Load videos that haven't yet been loaded
    loadVideos();

    // Load feeds
    loadFeeds();

    // Hide loading screen
    $('#loading').fadeOut(500);
  }

  function loadVideos() {
    $('.video-placeholder').wrapInner('<video loop></video>');
  }

  function loadFeeds() {
    $.get('/wp-admin/admin-ajax.php', { action: 'feeds' }, function(response) {
      $('#feeds').html(response);
    });
  }

  $(window).load(init);
  // $(document).ready(function () {
  //   setTimeout(init, 15000);
  // });
})(jQuery);