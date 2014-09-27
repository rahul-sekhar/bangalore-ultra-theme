'use strict';

(function($) {
  var initialized = false;
  function init() {
    if (initialized) {
      return;
    }
    initialized = true;

    var body = $('body');

    // Hide the loading screen
    body.addClass('loaded');

    // The remaining tasks are only for the front page
    if (!body.hasClass('home') || body.hasClass('alt')) {
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

  function resizeFeeds() {
    var feeds = $('#feeds');
    var feedsBottom = feeds.offset().top + feeds.outerHeight();

    feeds.children().each(function () {
      $(this).find('li').show().each(function () {
        var li = $(this);
        if((li.offset().top + li.outerHeight()) > feedsBottom) {
          li.nextAll().andSelf().hide();
          return false;
        }
      });
    });
  }

  function loadFeeds() {
    $.get('/wp-admin/admin-ajax.php', { action: 'feeds' }, function(response) {
      $('#feeds').html(response);

      resizeFeeds();
      $(window).on('resize', resizeFeeds);
    });
  }

  $(window).load(init);
  // $(document).ready(function () {
  //   setTimeout(init, 15000);
  // });
})(jQuery);