(function( $ ){

  $.scrollUp({
    scrollName: 'scrollUp', // Element ID
    topDistance: '300', // Distance from top before showing element (px)
    topSpeed: 600, // Speed back to top (ms)
    animation: 'fade', // Fade, slide, none
    animationInSpeed: 300, // Animation in speed (ms)
    animationOutSpeed: 200, // Animation out speed (ms)
    scrollText: '', // Text for element
    activeOverlay: true, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
  });
 var i = document.createElement('i'); 
 var scroll_up = document.querySelector('a#scrollUp');
 scroll_up.appendChild(i);
 $('a#scrollUp i').addClass('fa fa-angle-up');

                          
})(jQuery);