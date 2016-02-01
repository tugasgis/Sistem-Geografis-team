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
  	<tr>
	<th>No</th>
	<th>Nama RK</th>
	<th>Alamat</th>
	<th>ID STO</th>
	<th>Latitude</th>
	<th>Longitude</th>
	<th>Aksi</th>
	</tr>";

$p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

    $tampil=mysql_query("SELECT * FROM rk ORDER BY id_rk DESC LIMIT $posisi,$batas");
    
    $no = $posisi+1;
    while ($r=mysql_fetch_array($tampil)){
      echo "
	  	<tr align=center>
		<td>$no</td>
                <td width=70>$r[nama_rk]</td>
                <td width=90>$r[alamat]</td>
                <td width=40>$r[id_sto]</td>
		<td>$r[lat]</td>
		<td>$r[lng]</td>
                <td><a href=?jenis=rk&act=edit_rk&id=$r[id_rk]>Edit</a> | 
	                  <a href=$aksi?jenis=rk&act=hapus&id=$r[id_rk]>Hapus</a>
		        </tr>";
      $no++;
    }
    echo "</table>";
    $jmldata=mysql_num_rows(mysql_query("SELECT * FROM rk"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);
	echo "<br /> <br />";
    echo "<div id=paging>Hal: $linkHalaman</div><br>";
    break;
    
case "edit_rk":
    $edit = mysql_query("SELECT * FROM rk WHERE id_rk='$_GET[id]'");
    $r    = mysql_fetch_array($edit);
