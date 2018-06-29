<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Georreferenciacion de arboles</title>
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

  <body>
	<!--<h3>Georreferenciacion de arboles dentro de la comuna de Viña del Mar</h3>-->
    <div id="map"></div>

    <script>
        /*var customLabel = {
        arbol: {
          label: 'A'
        },
        planta: {
          label: 'P'
        }
      };*/

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-33.013135, -71.541364),
          zoom: 14
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('phpsqlajax_genxml.php', function(data) {
            var xml = data.responseXML;
            var marcador = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(marcador, function(markerElem) {
              var Nombre = markerElem.getAttribute('Nombre');
              var Ubicacion = markerElem.getAttribute('Ubicacion');
              //var Tipo = markerElem.getAttribute('Tipo');
			  var Encargado = markerElem.getAttribute('Encargado');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('Latitud')),
                  parseFloat(markerElem.getAttribute('Longitud')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = Nombre
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));
			  
              var text = document.createElement('text');
              text.textContent = Ubicacion
              infowincontent.appendChild(text);
			  infowincontent.appendChild(document.createElement('br'));
			  
			  var text2 = document.createElement('text2');
              text2.textContent = "Encargado: "+Encargado
              infowincontent.appendChild(text2);
     
              //var icon = customLabel[Tipo] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point
                //label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQ6Bfs9a75QTB58jS_8gx9JleidfnbJes&callback=initMap">
    </script>
  </body>
</html>