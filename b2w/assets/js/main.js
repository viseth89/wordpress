$(function(){
  //Cache the window object
  var $window = $(window);
  // Parallax background effect
  $('section[data-type="background"]').each(function() {

    var $backgroundobject = $(this); // assigning the object 
    $(window).scroll(function(){
      // scroll the background at var speed
      // the yPos is a negative value because we're scrolling it UP!!
      var yPos = -($window.scrollTop() / $backgroundobject.data('speed'));

      // put together our final background position
      var coordinates = '50% '+ yPos + 'px';

      // Move the background
      $backgroundobject.css({ backgroundPosition: coordinates});

    }) // end window scroll

  })
})