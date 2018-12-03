
  $(document).scroll(function(){
    if ($(document).scrollTop() <= 100) {
      $('.navbar').css("background-color", "transparent");
    }
    else {
      $('.navbar').css("background-color", "rgba(64, 64, 64, 0.5)");
  	}
	});
