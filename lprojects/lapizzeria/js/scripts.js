// MUst load using no-conflit mode otherwise will get 'TypeError $ is not a function'
$ = jQuery.noConflict();

$(document).ready(function() {

  // Toggle mobile menu
  $('.mobile-menu a').on('click', function() {
    $('nav.site-nav').toggle('slow');
  });


  // Usage of breakpoint to hide mobile-menu
  var breakpoint = 768;
  $(window).resize(function() {
    if($(document).width() >= breakpoint) {
      $('nav.site-nav').show();
    } else {
      $('nav.site-nav').hide();
    }
  })

  // Fluidbox alternative implementation

  $('.gallery a').fluidbox(); 
  

  // boxAdjustment();

  // // Fluidbox Plugin

  // jQuery('.gallery-icon a').each(function() {
  //   console.log('test');
  //   jQuery(this).attr({'data-fluidbox': ''});
  // });

  // if(jQuery('[data-fluidbox]').length > 0 ) {
  //   jQuery('[data-fluidbox]').fluidbox();
  // }


});