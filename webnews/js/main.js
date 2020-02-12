( function( $ ) { 
  
  // contact info && image published
  if($('.widget_media_image').parent().hasClass('headerRight') && $('.widget_contactinfo').parent().hasClass('topbarRight')){
    $('.topbarRight').css({
      'margin-left': '-105px'
    });
  }

  //social links & image published
  if($('.widget_sociallinks').parent().hasClass('topbarRight') && $('.widget_media_image').parent().hasClass('headerRight')) {
    $('.topbarRight').css({
      'margin-left': '-95px'
    });
  }

  //end of header customizer
  $('div.slim h5').addClass('meta');
  $( '.meta' ).css( {
      'left': '10%'
  });
  
  //adjust sidebar when in page content - search
  if ($('.no-results')) {
    $('.content-search').removeClass('col-xl-4');
    $('.content-search').removeClass('col-md-4');
    $('.content-search').removeClass('col-sm-12');
    $('.content-search').addClass('d-flex');
    $('.content-search').addClass('justify-content-end');
  }

})(jQuery);