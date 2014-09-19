'use strict';

(function($) {
  $(document).ready(function () {
    var body = $('body');
    if(body.hasClass('home') && !body.hasClass('alt')) {

      var pathArray = window.location.href.split( '/' );
      var protocol = pathArray[0];
      var host = pathArray[2];
      var url = protocol + '//' + host;

      window.location = url + '/alt';
    }
  });
})(jQuery);