<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Consumer Service Mapping Solution Dashboard</title>
<head>
<title>Consumer Service Mapping Solution Dashboard</title>
<!-- by Firmansyah Wahyudiarto & Lida Pratiwi Puteri -->
<link rel="stylesheet" href="styles/reset.css" />
<link rel="stylesheet" href="styles/text.css" />
<link rel="stylesheet" href="styles/960_fluid.css" />
<link rel="stylesheet" href="styles/main.css" />
<link rel="stylesheet" href="styles/bar_nav.css" />
<link rel="stylesheet" href="styles/side_nav.css" />
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/base/jquery-ui.css" />

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js"></script>

<script type="text/javascript" src="scripts/sherpa_ui.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">

      function initialize() {
        var mapDiv = document.getElementById('map-canvas');
        var map = new google.maps.Map(mapDiv, {
          center: new google.maps.LatLng(-6.5878, 106.7928),
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    
<style type="text/css">
<!--
#bawah {
	position:absolute;
	left:168px;
	top:648px;
	width:939px;
	height:35px;
	z-index:1;
	background-color: #6FD601;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 11px;
	color: #000;
}
-->
 </body>
</html>
