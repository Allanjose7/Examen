<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mapa Calor</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
      #floating-panel {
        background-color: #fff;
        border: 1px solid #999;
        left: 25%;
        padding: 5px;
        position: absolute;
        top: 10px;
        z-index: 5;
      }
    </style>
  </head>

  <body>
    
    <div id="map"></div>
    <script>

   

      var map, heatmap;

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: {lat: 13.705243, lng: -89.24231},
          mapTypeId: 'satellite'
        });

        heatmap = new google.maps.visualization.HeatmapLayer({
          data: getPoints(),
          map: map
        });
      }

      

     

    
      function getPoints() {
        return [
          
          new google.maps.LatLng(13.705243, -89.24231),
          new google.maps.LatLng(13.696674, -89.197927),
          new google.maps.LatLng(14.692511, -87.86136),
          new google.maps.LatLng(12.022747, -86.252007),
          new google.maps.LatLng(8.103289, -80.596013),
          
        ];
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk1axM9HMjxy8Fd5z2TltPvADvAa1RUVw&libraries=visualization&callback=initMap">
    </script>
  </body>
</html>