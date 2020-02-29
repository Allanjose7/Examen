<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Mapa Cliente</title>
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
    </style>
  </head>

<html>
  <body>
    <div id="map"></div>

    <script>
     

        function initMap() {
            var center = {lat: 13.705243, lng: -89.24231};
        var lugares = [
        
        {lat: 13.696674, lng: - 89.197927},
        {lat: 14.692511, lng: - 87.86136},
        {lat: 12.022747, lng: - 86.252007},
        {lat: 8.103289, lng: - 80.596013},
        {lat: 13.705243, lng: -89.24231}
            ];

        var map= new google.maps.Map(document.getElementById('map'), {
            zoom: 7,
            center: center
        });
        
        for ( i = 0; i < lugares.length ; i++) {
            var marker = new google.maps.Marker({
                position: lugares[i],
                map: map
            });
        }
        
        }



      

      
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk1axM9HMjxy8Fd5z2TltPvADvAa1RUVw&callback=initMap">
    </script>
  </body>
</html>