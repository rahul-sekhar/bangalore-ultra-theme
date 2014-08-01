jQuery(document).ready(function ($) {
  var galleryYear, photoNo, imageSize, container, tags, loading;

  container = $('#bib-tagging-container');
  tags = $('#bib-tags');
  loading = container.find('.loading');

  $('#tag-button').click(function () {
    galleryYear = $('#gallery-year').val();
    photoNo = parseInt($('#photo-no').val(), 10);
    imageSize = $('#image-size').val();
    $('#bib-tagging-start').hide();
    container.show();
    getPhoto();
  });

  container.find('.back').click(function (e) {
    e.preventDefault();
    closePhotos();
  });

  container.find('.save').click(function (e) {
    e.preventDefault();
    saveTags();
    nextPhoto();
  });

  container.find('.next').click(function (e) {
    e.preventDefault();
    nextPhoto();
  });

  container.find('.prev').click(function (e) {
    e.preventDefault();
    prevPhoto();
  });

  // Keypresses
  $(document).keyup(function (e) {
    if (!container.is(':visible')) {
      return;
    }

    if (e.keyCode === 27) {
      // Esc
      closePhotos();
    } else if (e.keyCode === 65) {
      // 'A'
      prevPhoto();
    } else if (e.keyCode === 83) {
      // 'S'
      nextPhoto();
    } else if (e.keyCode === 13) {
      // Enter
      saveTags();
      nextPhoto();
    }
  });

  // Restrict input keys
  tags.keypress(function (e) {
    if(!/[0-9,+]/.test(String.fromCharCode(e.keyCode))) {
      return false;
    }
  });

  function closePhotos(message) {
    if (message) {
      $('.message').text(message);
    } else {
      $('.message').text('');
    }

    container.hide();
    $('#photo-no').val(photoNo);
    $('#bib-tagging-start').show();
  }

  function nextPhoto() {
    photoNo++;
    getPhoto();
  }

  function prevPhoto() {
    photoNo--;
    if (photoNo < 1) {
      photoNo = 1;
    }
    getPhoto();
  }

  function saveTags() {
    var tagString = tags.val();
    // Replace pluses with commas
    tagString = tagString.replace(/\+/g, ',');

    var params = {
      action: 'save_bib_tags',
      year: galleryYear,
      n: photoNo,
      tags: tagString
    };

    $.post(ajaxurl, params, function (data) {
      if (data !== '1') {
        photoNo = params.n;
        closePhotos('Tags could not be saved');
      }
    });
  }

  function getPhoto() {
    var params = {
      action: 'get_gallery_image',
      year: galleryYear,
      n: photoNo,
      size: imageSize
    };

    loading.fadeIn();
    $.get(ajaxurl, params, function (data) {
      if (data === '0') {
        photoNo = 1;
        closePhotos('No more photos found');
      } else {
        data = $.parseJSON(data);
        container.find('.image.current').remove();
        container.find('.photo-no').text(data.n + ' of ' + data.total);

        var image = findPreloadedImage(data.src);
        if (!image) {
          image = $('<img src="' + data.src + '" alt="" />');
        }
        $('<a class="image current" href="' + data.full_src + '" target="_blank"></a>').append(image).appendTo(container.find('.image-area'));

        $.each(data.preload, function (number, preload) {
          if (!findPreloadedImage(preload)) {
            $('<img src="' + preload + '" alt="" />').appendTo(container.find('.preload-area'));
          }
        });
        tags.val(data.tags);
        tags.focus();
        tags[0].select();

        imagesLoaded(image, function() {
          loading.fadeOut();
        });
      }
    });
  }

  function findPreloadedImage(src) {
    var image = container.find(".preload-area img[src='" + src + "']");

    if (image.length) {
      return image;
    } else {
      return false;
    }
  }
});