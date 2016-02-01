<html>
<head>
<?php include("koneksi.php");
include("class_paging.php");
?>
<title>Telkom Consumer Service Division - Edit STO</title>
<link rel="stylesheet" type="text/css" href="style_edit2.css" />
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="jquery-1.4.3.min.js"></script>

div id="main_content">
		<div id="top_banner"></div>
        
  <div id="page_content">
                <div>
                    <ul class="menu">
                    </ul>
                </div>
	<div class="clear">
          	<br>
          	</div>
    	<p>Silakan Edit Data STO Berikut ini :</p><br>
    	<div id="tengah4">
    		<?php
    $aksi="aksi_sto.php";
switch($_GET[act]){
  // Tampilkan sto pd tabel
  default:
    echo "<table border=1>
        <tr>
	<th>No</th>
	<th>Kode STO</th>
	<th>Nama STO</th>
	<th>Alamat</th>
	<th>ID</th>
	<th>Daerah</th>
	<th>Latitude</th>
	<th>Longitude</th>
	<th>Aksi</th>
	</tr>";

$p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

$tampil=mysql_query("SELECT * FROM sto ORDER BY id_sto DESC LIMIT $posisi,$batas");
