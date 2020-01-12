$(document).ready(function() {

  //header customizer
  
  if($('.social_links').parent().hasClass('topbarRight')){
    $('.topbarRight').addClass('ml-2rem');
  }

  if($('.social_links').parent().hasClass('topbarLeft')){
    $('.topbarLeft').addClass('ml-n6rem');
  }

  if($('.widget_contact_info').parent().hasClass('topbarLeft')){
    $('.topbarLeft').addClass('list-unstyled').addClass('ml-2rem');
  }

  if ($('.social_links').parent().hasClass('headerRight')) {
  	$('.headerRight').addClass('pt-25rem');
  }	

  if ($('.widget_contact_info').parent().hasClass('topbarRight')) {
  	$('.topbarRight').addClass('list-unstyled').addClass('ml-6rem');
  }

  if ($('.widget_media_image').parent().hasClass('headerRight')) {
    $('.headerRight').addClass('ml-n10rem').addClass('ml-1rem'); 
  }

  if($('.widget_media_image').parent().hasClass('headerRight') && $('.widget_contact_info').parent().hasClass('topbarRight')){
    $('.topbarRight').addClass('list-unstyled').addClass('ml-15rem');
  }

  //end of header customizer
  
  //featured story 

  //adjust position of row
  var rowsadjust =  $('.row-adjust');
  rowsadjust[1].style.marginTop= '3rem';
  
  $('div.slim h5').addClass('meta');
  $( '.meta' ).css( {
      'left': '10%'
  });
  
  //adjust position of widget items
    $('section.widget').addClass('widget-adjust');

 /*/add bar in widget title
  var widgets= document.querySelectorAll('h2.widget-title');
  for(var i = 0; i < widgets.length; i++){
    var div = document.createElement('div');
    var span = document.createElement('span');
    div.className = 'fita';
    div.appendChild(span);
    widgets[i].appendChild(div);
    $('.fita span').css({
      'display': 'inline-block',
      'width': '60px',
      'height': '2.2px',
      'background-color': '#1b4871e6'
    }); 
  }*/
});