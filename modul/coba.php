<?php session_start();
include("koneksi.php");?>

<head>
<title>Firmansyah Wahyudiarto & Lida Pratiwi Puteri - GIS</title>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="../dss/jquery-1.4.3.min.js"></script>
<script type="text/javascript">
var peta;
var pertama = 0;
var jenis = "rk";
var namarkx = new Array();
var alamatx = new Array();
var kecx = new Array();
var daerahx = new Array();
var jumlahx = new Array();
var sudahx = new Array();
var i;
var url;
var gambar_tanda;

function peta_awal(){
    var bogor = new google.maps.LatLng(-6.589155,106.793032);
    var petaoption = {
        zoom: 14,
        center: bogor,
        mapTypeId: google.maps.MapTypeId.SATELLITE
        };
    peta = new google.maps.Map(document.getElementById("petaku"),petaoption);
    google.maps.event.addListener(peta,'click',function(event){
        kasihtanda(event.latLng);
    };
    ambildatabase('awal');
}
</script>

</head>

<body>
<center><h1>Lokasi Rumah Kabel di Kota Bogor</h1></center>

<table id="jendelainfo" border="1" cellpadding="4" cellspacing="0" style="border-collapse: collapse" bordercolor="#FFCC00" width="300" height="136">
  <tr>
    <td width="248" bgcolor="#000000" height="19"><font color=white><span id="teksnama"></span></font></td>
    <td width="30" bgcolor="#000000" height="19">
    <p align="center"><font color="#FFFFFF"><a style="cursor:pointer" id="tutup"><b>X</b></a></font></td>
  </tr>
  <tr>
    <td width="290" bgcolor="#FFCC00" height="100" valign="top" colspan="2">
    <p align="center"><span id="teksalamat"></span></td>
    
  </tr>
</table>
