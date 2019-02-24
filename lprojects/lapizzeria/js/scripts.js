// Required otherwhise '$' will present an error
$ = jQuery.noConflict();

// Function to display Menus when Mobile
$(document).ready(function() {
  $('.mobile-menu a').on('click', function() {
    $('nav.site-nav').toggle('slow')
  });

// Function to check screen size and display or hide menus depending on screen size;
// Improves function above incase menu is hidden and screen is expanded from less than 768
  var breakpoint = 768;
  $(window).resize(function(){
    if($(document).width() >= breakpoint){
      $('nav.site-nav').show();
    } else {
      $('nav.site-nav').hide();
    }
  });

});


