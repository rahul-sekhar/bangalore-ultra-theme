(function($) {
  $(document).ready(function () {
    if (!$('body').hasClass('page-template-gallery-template-php')) {
      return;
    }

    // Unveil images
    var imagesSection = $('#images');
    imagesSection.find('img').unveil(200, function () {
      var image = this;
      imagesLoaded(image, function (imgs) {
        $(image).parent('.thumb').addClass('loaded');
      });
    });


    /* Bib number search */
    var bibSearch = $('li.bib-number');
    bibSearchLink = bibSearch.find('a');
    bibSearchInput = bibSearch.find('input');
    bibSearchForm = bibSearch.find('form');

    function hideBibSearchIfEmpty() {
      if (!bibSearchInput.val()) {
        bibSearchForm.hide();
        bibSearchLink.show();
      }
    }

    // Hide search box initially unless a search has been made
    hideBibSearchIfEmpty();

    // Show search box when the show link is clicked
    bibSearchLink.click(function (e) {
      e.preventDefault();
      bibSearchForm.show();
      bibSearchLink.hide();
      bibSearchInput.focus();
    });

    // Hide search box when the input loses focus
    bibSearchInput.blur(hideBibSearchIfEmpty);

    /* Show full size images */

    var imageViewer = $('<div id="image-viewer"></div>').appendTo($('#gallery'));
    imageViewer.hide();

    var currentImage = null;

    function closeImageViewer() {
      imageViewer.fadeOut();
    }

    function nextImage() {
      var next = currentImage.next('.thumb');
      if (next.length) {
        loadImage(next);
      } else {
        var nextLink = $('#pagination .next');
        if (nextLink.length) {
          window.location.href = nextLink.attr('href') + '&view_first=1';
        }
      }
    }

    function prevImage() {
      var prev = currentImage.prev('.thumb');
      if (prev.length) {
        loadImage(prev);
      } else {
        var prevLink = $('#pagination .prev');
        if (prevLink.length) {
          window.location.href = prevLink.attr('href') + '&view_last=1';
        }
      }
    }

    // Keybindings
    $('body').on('keydown', function(e) {
      if (imageViewer.is(':visible')) {
        if (e.keyCode === 37) { // Left arrow
          prevImage();
        } else if (e.keyCode === 39) { // Right arrow
          nextImage();
        } else if (e.keyCode === 27) { // ESC
          closeImageViewer();
        }
      }
    });

    // Close link
    $('<a href="#" class="close"></a>').click(function (e) {
      e.preventDefault();
      closeImageViewer();
    }).appendTo(imageViewer);

    // Next link
    $('<a href="#" class="next"></a>').click(function (e) {
      e.preventDefault();
      nextImage();
    }).appendTo(imageViewer);

    // Previous link
    $('<a href="#" class="prev"></a>').click(function (e) {
      e.preventDefault();
      prevImage();
    }).appendTo(imageViewer);

    function loadImage(thumb) {
      var image, url, screenWidth, widths = [400, 800, 1024, 1280, 1600];

      currentImage = thumb;
      imageViewer.find('img').remove();

      screenWidth = Math.max( $(window).width(), window.innerWidth );
      $.each(widths, function (i, width) {
        if (width >= screenWidth) {
          url = currentImage.data('w' + width);
          return false;
        }
      });

      if (!url) {
        url = currentImage.attr('href');
      }
      image = $('<img src="' + url + '" />');
      image.data('width', currentImage.data('width'));
      image.data('height', currentImage.data('height'));
      imageViewer.append(image);

      resizeImageViewer();
      imageViewer.fadeIn();
    }

    function resizeImageViewer() {
      var img = imageViewer.find('img');
      var width = img.data('width');
      var height = img.data('height');
      var viewerWidth = imageViewer.width();
      var viewerHeight = imageViewer.height();

      console.log(width, height);
      console.log(viewerWidth, viewerHeight);

      if (width / height > viewerWidth / viewerHeight) {
        img.width(viewerWidth);
        img.height(viewerWidth * (height / width));
      } else {
        img.height(viewerHeight);
        img.width(viewerHeight * (width / height));
      }

      if (img.height() < imageViewer.height()) {
        img.css('margin-top', parseInt((imageViewer.height() - img.height()) / 2, 10) + 'px');
      } else {
        img.css('margin-top', '0');
      }
    }

    function resizeGallery() {
      var maxWidth = 300;
      var margin = 3;

      var galleryWidth = imagesSection.width();
      var numImages = Math.ceil(galleryWidth / (maxWidth + margin * 2));
      var imageWidth = Math.floor(galleryWidth / numImages) - (margin * 2);

      imagesSection.find('.thumb').width(imageWidth).height(imageWidth);
    }

    $(window).resize(function () {
      resizeGallery();
      resizeImageViewer();
    });
    resizeGallery();
    resizeImageViewer();

    $('#images').on('click', 'a.thumb', function (e) {
      e.preventDefault();
      loadImage($(this));
    });

    // Show image viewer if required
    if (location.search.indexOf('view_first=1') !== -1) {
      loadImage($('#images a.thumb:first'));
    } else if (location.search.indexOf('view_last=1') !== -1) {
      loadImage($('#images a.thumb:last'));
    }

  });
})(jQuery);
