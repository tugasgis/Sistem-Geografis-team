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
</style>
</head>
<body>
	<div id="bawah">Copyright &copy; 2011 by &laquo;<span class="lida"> Firmansyah Wahyudiarto & Lida Pratiwi Puteri</span> &raquo; <br>
 <span class="telkom">PT. Telkom Indonesia</span> Divisi Consumer Service</div>
	<div id="wrapper" class="container_16">
		<div id="top_nav" class="nav_down bar_nav grid_16 round_all">
<a href="#" class="minimize round_bottom"><span>minimize</span></a><img src="images/header-jadi.jpg" width="936" height="256"></div>
			
		<div id="side_nav" class="side_nav grid_3 push_down">
		  <ul class="clearfix">
				<li><a class="round_left" href="./halaman_utama.php">
					<img src="images/icons/grey/admin_user.png">
					<span>Dashboard</span></a>
				</li> 
				<li><a class="round_left" href="#">
					<img src="images/icons/grey/settings_2.png"><span>Utilities</span>
					<span class="icon">&nbsp;</span>
					</a>
					<ul>
						<li><a href="#"><img src="images/icons/grey/sign_post.png">Import Data</a>
                        <span class="icon">&nbsp;</span>
                        	<ul>
                        		<li><a href="./modul/form_import_perum.php" target="_blank"><img src="images/icons/grey/sport_shirt.png">Import Perumahan</a></li>
								<li><a href="./modul/form_import_rk.php" target="_blank"><img src="images/icons/grey/trashcan_2.png">Import RK</a></li>
                        		<li><a href="./modul/form_import_dp.php" target="_blank"><img src="images/icons/grey/winner_podium.png">Import DP</a></li>
                        	</ul>
                        </li>
                        <li><a href="#"><img src="images/icons/grey/refresh_2.png">Excel Report</a>
                        <span class="icon">&nbsp;</span>
						<ul>
                        		<li><a href="./modul/report_perum.php"><img src="images/icons/grey/sport_shirt.png">Report Perumahan</a></li>
								<li><a href="./modul/report_rk.php"><img src="images/icons/grey/trashcan_2.png">Report RK</a></li>
                        		<li><a href="./modul/report_dp.php"><img src="images/icons/grey/winner_podium.png">Report DP</a></li>
                                <li><a href="./modul/report_sto.php"><img src="images/icons/grey/winner_podium.png">Report STO</a></li>
                        	</ul>