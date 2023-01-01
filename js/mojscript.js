var scrollToTopBtn = document.getElementById("scrollToTopBtn");

function scrollToTop() {
    // Scroll to top logic
    rootElement.scrollTo({
      top: 0,
      behavior: "smooth"
    })
  }

scrollToTopBtn.addEventListener("click", scrollToTop);

(function($) {
  var gallery = $('.galeriaFotky');
  var overlay = $('<div/>', { id: 'overlay' }); //vytvorime overlay
      overlay.appendTo('body').hide();

  gallery.find('a').on('click',function(event) {
      //overlay.show();

      var href = $(this).attr('href');
      var image = $('<img>', { src: href});

      overlay.html(image)
              .show();
      
      event.preventDefault();
  });

  overlay.on('click', function() {
      overlay.hide();
  })

  $(document).on('keyup', function(event){
     if (event.which == 27) overlay.hide();
  });
  
})(jQuery);