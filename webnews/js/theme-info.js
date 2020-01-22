( function( $ ) {

	$('.webnews-nav-tab a').on('click',function (e) {
		e.preventDefault();
		$(this).addClass('active').siblings().removeClass('active');
	});

	$('.webnews-nav-tab .started').on('click',function (e) {		
		$('.webnews-tab-wrapper .started').addClass('show').siblings().removeClass('show');
	});	
	
	$('.webnews-nav-tab .support, .webnews-tab .support').on('click',function (e) {		
	
		e.preventDefault();
		$('.webnews-tab-wrapper .support').addClass('show').siblings().removeClass('show');

		$('.webnews-nav-tab a.support').addClass('active').siblings().removeClass('active');

	});	

	$('.webnews-nav-tab .demo, .webnews-tab .demo, a.go-demo').on('click',function (e) {		
	
		e.preventDefault();
		$('.webnews-tab-wrapper .demo').addClass('show').siblings().removeClass('show');

		$('.webnews-nav-tab a.demo').addClass('active').siblings().removeClass('active');

	});	

})(jQuery);