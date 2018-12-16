
  $(document).scroll(function(){
    if ($(document).scrollTop() < 100) {
      $('.navbar').css("background-color", "transparent");
    }
    else {
      $('.navbar').css("background-color", "rgba(64, 64, 64, 1)");
  	}
	});

  $(function() {

      $('a').each(function() {
           if ( location.hostname === this.hostname || !this.hostname.length ) {

              var link = $(this).attr("href");

              if ( link.match("^#") ) {

                  $(this).click(function() {
                      var target = $(link);
                      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                      if (target.length) {
                          $('html,body').animate({
                              scrollTop: target.offset().top - 70
                          }, 1000); return false;
                      }
                  });

              } else if ( link.match("^mailto") ) {

              } else {

                  $(this).click(function(e) {
                      e.preventDefault();
                      $('html').addClass('fadeSiteOut');
                      setTimeout(function() {
                          window.location = link;
                      }, 500);
                  });

              }

          }
      });

  });
