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


});