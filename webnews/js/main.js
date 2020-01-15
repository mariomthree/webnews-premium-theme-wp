$(document).ready(function() {

  //*header customizer
  
  if($('.social_links').parent().hasClass('topbarRight')){
    $('.topbarRight').css({'margin-left': '-2.5rem'});
  }

  if($('.social_links').parent().hasClass('topbarLeft')){
    $('.topbarLeft').css({ 'margin-left': '-2rem'});
  }

  if($('.widget_contact_info').parent().hasClass('topbarLeft')){
    $('.topbarLeft').addClass('list-unstyled');
    $('.topbarLeft').css({
          'margin-left': '2rem',
          'padding':'0'
    });
  }

  if ($('.social_links').parent().hasClass('headerRight')) {
    $('.headerRight').css({'padding-top': '2.5rem'})
  } 

  if ($('.widget_contact_info').parent().hasClass('topbarRight')) {
    $('.topbarRight').addClass('list-unstyled');
    $('.topbarRight').css({'padding-top':'0','margin-left': '2rem'});
  }

  if ($('.widget_media_image').parent().hasClass('headerRight')) {
    $('.headerRight').css({
      'margin-left': '-10.5rem',
      'margin-top': '1rem'});
  }

  if($('.widget_media_image').parent().hasClass('headerRight') && $('.widget_contact_info').parent().hasClass('topbarRight')){
    $('.topbarRight').addClass('list-unstyled');
    $('.topbarRight').css({
      'margin-left': '15.5rem'
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

});