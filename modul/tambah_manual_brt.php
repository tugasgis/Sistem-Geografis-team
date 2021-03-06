<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Lokasi Perumahan</title>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<style type="text/css">
    v\:* {behavior:url(#default#VML);}
    html, body {width: 100%; height: 100%}
    body {margin-top: 0px; margin-right: 0px; margin-left: 0px; margin-bottom: 0px}
	</style>
    <script type="text/javascript">
    var marker;
    var infowindow;

    function initialize() {
      var latlng = new google.maps.LatLng(-6.564,106.763);
      var options = {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.TERRAIN
      }
      var map = new google.maps.Map(document.getElementById("map_canvas"), options);
      var html = "<table>" +
                 "<tr><td>Nama Perumahan:</td> <td><input type='text' id='nama_perum'/> </td> </tr>" +
                 "<tr><td>Jumlah Dibangun:</td> <td><input type='text' id='jumlah_dibangun'/></td> </tr>" +
				 "<tr><td>Sudah Dibangun:</td> <td><input type='text' id='sudah_dibangun'/></td> </tr>" +
                 "<tr><td>Kecamatan:</td> <td><select id='id'>" +
                 "<option value='1' SELECTED>SMS Bulk</option>" +
                 "<option value='Mobile Media'>Mobile Media</option>" +
				 "<option value='Interactive Service' SELECTED>Interactive Service</option>" +
				 "<option value='PopScreen' SELECTED>PopScreen</option>" +
				 "<option value='Mobile Newspaper' SELECTED>Mobile Newspaper</option>" +
				 "<option value='Mobile Media' SELECTED>Mobile Media</option>" +
				 "<option value='MCoupon' SELECTED>MCoupon</option>" +
				 "<option value='SMS 2.0' SELECTED>SMS 2.0</option>" +
				 "<option value='Location Based Advertising' SELECTED>Location Based Advertising</option>" +
                 "</select> </td></tr>" +
                 "<tr><td></td><td><input type='button' value='Save & Close' onclick='saveData()'/></td></tr>";
    infowindow = new google.maps.InfoWindow({
     content: html
    });
 
    google.maps.event.addListener(map, "click", function(event) {
        marker = new google.maps.Marker({
          position: event.latLng,
          map: map
        });
        google.maps.event.addListener(marker, "click", function() {
          infowindow.open(map, marker);
        });
    });
    }

    function saveData() {
      var nama_perum = escape(document.getElementById("nama_perum").value);
      var jumlah_dibangun = escape(document.getElementById("jumlah_dibangun").value);
	  var sudah_dibangun = escape(document.getElementById("sudah_dibangun").value);
      var kecamatan = document.getElementById("kecamatan").value;
      var latlng = marker.getPosition();
 
      var url = "phpsqlinfo_addrow.php?nama_perum=" + nama_perum + "&jumlah_dibangun=" + jumlah_dibangun +
                "&sudah_dibangun=" + sudah_dibangun +"&kecamatan=" + kecamatan + "&lat=" + latlng.lat() + "&lng=" + latlng.lng();
      downloadUrl(url, function(data, responseCode) {
        if (responseCode == 200 && data.length <= 1) {
          infowindow.close();
          document.getElementById("message").innerHTML = "Lokasi Telah Ditambahkan.";
        }
      });
    }
	

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request.responseText, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}
    </script>
  </head>

  <body style="margin:0px; padding:0px;" onLoad="initialize()">
    <div id="map_canvas" style="width: 100%; height: 100%;"></div>
    <div id="message"></div>
  </body>

</html>