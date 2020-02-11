(function($){

	var buttonScroll = window.document.querySelector('button#scrollUp');
	buttonScroll.addEventListener('click', topFunction);

	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
	    buttonScroll.style.display = "block";
	  } else {
	    buttonScroll.style.display = "none";
	  }
	}

	function topFunction() {
	  document.body.scrollTop = 0; // For Safari
	  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
	}

})(jQuery);