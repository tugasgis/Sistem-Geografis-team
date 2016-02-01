<html>
<head>
<?php include("koneksi.php");
include("class_paging.php");
?>
<title>Telkom Consumer Service Division - Edit Distribution Point</title>
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
<p>Silakan Edit Data DP Berikut ini :</p><br>
    <div id="tengah">
    <?php
    $aksi="aksi_semua.php";
switch($_GET[act]){
  // Tampilkan DP pd tabel
  default:
    echo "<table border=1>
	<tr>
	<th>No</th>
	<th>Kode DP</th>
	<th>Alamat</th>
	<th>Kapasitas</th>
	<th>Jml Isi</th>
	<th>Jml Rusak</th>
	<th>Jml WSUCC</th>
	<th>Jml kosong</th>
	<th>Latitude</th>
	<th>Longitude</th>
	<th>Aksi</th>
	</tr>";
