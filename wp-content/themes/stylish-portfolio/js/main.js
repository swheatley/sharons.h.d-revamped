
// Main Page -  Google Map

  var mapOptions = {
      center: new google.maps.LatLng(40.699566, -111.8324014),
      zoom: 18,
      mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  var map = new google.maps.Map(document.getElementById('map'), mapOptions);

  var markerOptions = {
      position: new google.maps.LatLng(40.699566, -111.8324014)

  };

  var marker = new google.maps.Marker(markerOptions);
  marker.setMap(map);



  var infoWindowOptions = {
      content: "Greg's Hair Design"

  };

  var infoWindow = new google.maps.InfoWindow(infoWindowOptions);
  google.maps.event.addListener(marker, 'click', function(e){
      infoWindow.open(map, marker);

  });

  $(window).on('resize', function() {
    var currCenter = map.getCenter();
    google.maps.event.trigger(map, 'resize');
    map.setCenter(currCenter);
});

/*
// Sidebar Menu
  $("#menu-close").click(function(e) {
      e.preventDefault();
      $("#sidebar-wrapper").toggleClass("active");
  });
  // Opens the sidebar menu
  $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#sidebar-wrapper").toggleClass("active");
  });
  // Scrolls to the selected menu item on the page
  $(function() {
      $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
          if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
              if (target.length) {
                  $('html,body').animate({
                      scrollTop: target.offset().top
                  }, 1000);
                  return false;
              }
          }
      });
  });
  //#to-top button appears after scrolling
  var fixed = false;
  $(document).scroll(function() {
      if ($(this).scrollTop() > 250) {
          if (!fixed) {
              fixed = true;
              // $('#to-top').css({position:'fixed', display:'block'});
              $('#to-top').show("slow", function() {
                  $('#to-top').css({
                      position: 'fixed',
                      display: 'block'
                  });
              });
          }
      } else {
          if (fixed) {
              fixed = false;
              $('#to-top').hide("slow", function() {
                  $('#to-top').css({
                      display: 'none'
                  });
              });
          }
      }
  });
*/
