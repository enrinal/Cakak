<!DOCTYPE html>
<html>
  <head>
    <title>Cakka - Info Angkot Bandar Lampung </title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'theme/images/s.png'?>">

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
        <link rel="icon" href="<?=base_url().'assets/images/LOGO.png'?>" type="image/gif">

  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -5.357310, lng: 105.314392},
          zoom: 14
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSLG6GQ4GgWrBYM66skOvCsrTS0Ma9jHI&callback=initMap"
    async defer></script>
  </body>
</html>