<html>
<head>
<?php include("koneksi.php");
include("class_paging.php");
?>
<title>Telkom Consumer Service Division - Edit Rumah Kabel</title>
<link rel="stylesheet" type="text/css" href="style_edit2.css" />
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="jquery-1.4.3.min.js"></script>
<div id="main_content">
		<div id="top_banner"></div>
        
  <div id="page_content">
                <div>
                    <ul class="menu">
                    </ul>
                </div>
          <div class="clear">
          	<br>
          </div>
<p>Silakan Edit Data Rumah Kabel Berikut ini :</p><br>
    <div id="tengah4">
    <?php
    $aksi="aksi_rk.php";
switch($_GET[act]){
  // Tampilkan RK pd tabel
  default:
    echo "<table border=1>
