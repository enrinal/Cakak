<?php
?>
<!DOCTYPE html>
<html>
<title>Rute Angkot</title>
  <head>
    <link rel="icon" href="<?=base_url().'theme/images/s.png'?>" type="image/gif">
      <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
        width: 75%;
        float :right;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    
  </head>
  <body>
    <!--The div element for the map -->
    <div id="map"></div>
    <script>
// Initialize and add the map
// function initMap() {
//   var uluru = {lat: -5.357310, lng: 105.314392};
//   var map = new google.maps.Map(
//       document.getElementById('map'), {zoom: 15, center: uluru});
//   var marker = new google.maps.Marker({position: uluru, map: map});
// }

 function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: -5.357310, lng: 105.314392}
        });
        directionsDisplay.setMap(map);

        // var onChangeHandler = function() {
        //   calculateAndDisplayRoute(directionsService, directionsDisplay);
        // };
         calculateAndDisplayRoute(directionsService, directionsDisplay);
        // document.getElementById('Sekolah Alam Lampung').addEventListener('change', onChangeHandler);
        // document.getElementById('Masjid Baiturrahman').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var origin = "<?= $query->origin; ?>";
        var destination = "<?=  $query->destination; ?>";
        var location0 = "<?= $query->waypoint0; ?>";
        var location1 = "<?= $query->waypoint1; ?>";
        var location2 = "<?= $query->waypoint2; ?>";
        var location3 = "<?= $query->waypoint3; ?>";
        directionsService.route({
          origin: origin,
          destination: destination,
          travelMode: 'DRIVING',
          waypoints: [
          {
            location: location0,
            stopover: true

          },{
            location: location1,
            stopover: true

          },{
            location: location2,
            stopover: true

          },{
            location: location3,
            stopover: true

          }
          ],
          
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
            $("#error").empty();
            $("#error").removeClass();
          } else {
           $("#error").addClass("badge badge-danger");
            $("#error").text("Tidak dapat menemukan nama lokasi, status error: "+status);
          }
        });
      }
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSLG6GQ4GgWrBYM66skOvCsrTS0Ma9jHI&callback=initMap">
    </script>
  </body>
</html>