jQuery(document).ready( function($){

	$(window).scroll( function(){
		
		var scroll = $(window).scrollTop();
		
		if (scroll >= 240) {

			$('.scroll').css({
			    'display': 'block'
			});
			var area = window.document.querySelector('div#scrollUp');
			area.addEventListener('click', scrollTop_click);

			function scrollTop_click(){
				var divScroll = $('div#page').offset().top;
				$('html,body').animate({scrollTop:divScroll},500);
			}
		}else{
			$('.scroll').css({
			    'display': 'none'
			});
		}
	});

});