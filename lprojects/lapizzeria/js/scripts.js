var map;
function initMap() {

  var latLng = {
    lat: 41.6839731,
    lng: -87.5361696
  }

  map = new google.maps.Map(document.getElementById('map'), {
    center: latLng,
    zoom: 16
  });

  var marker = new google.maps.Marker({
    position: latLng,
    map: map,
    title: 'La Pizzeria'
  });
}
/* 
https://developers.google.com/maps/documentation/javascript/examples/map-simple
Using Sample Map from Google API,

*/

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

  // Adapt Map to Height
  var map = $('#map');
  if(map.length >0) {
    if($(document).width() >= breakpoint) {
      displayMap(0)
    } else {
      displayMap(300);
    }
  }

  $(window).resize(function() {
    if($(document).width() >= breakpoint) {
      displayMap(0)
    } else {
      displayMap(300);
    }
  })

  function displayMap(value) {
    if(value==0) {
      var locationSection = $('.location-reservation');
      var locationHeight = locationSection.height();
      $('#map').css({'height': locationHeight });
    } else {
      $('#map').css({'height': value });
    }
  }

});

