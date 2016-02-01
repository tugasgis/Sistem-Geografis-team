<?php session_start();
$nama=$_SESSION['teksnama'];
$alamat=$_SESSION['teksalamat'];
$kec=$_SESSION['tekskec'];  
$jumlah=$_SESSION['teksjumlah']; 
$sudah=$_SESSION['tekssudah'];

<html>
<title>Firmansyah Wahyudiarto & Lida Pratiwi Puteri - GIS</title>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="../dss/jquery-1.4.3.min.js"></script>
<script type="text/javascript">
//inisialisasi variabel tampung
var peta;
var pertama = 0;
var jenis = "home";
var namaperumx = new Array();
var alamatx = new Array();
var kecx = new Array();
var daerahx = new Array();
var jumlahx = new Array();
var sudahx = new Array();
var i;
var url;
var gambar_tanda;
//load peta google maps
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
    });
    ambildatabase('awal');
}

$(document).ready(function(){
    $("#tombol_simpan").click(function(){
        var x = $("#x").val();
        var y = $("#y").val();
		var nama = $("#nama").val();
		var alamat = $("#alamat").val();
		var kec = $("#kec").val();
		var daerah = $("#daerah").val();
		var jumlah = $("#jumlah").val();
		var sudah = $("#sudah").val();
	
	$("#loading").show();
        $.ajax({
            url: "simpanperum.php",
            data: "x="+x+"&y="+y+"&nama="+nama+"&alamat="+alamat+"&kec="+kec+"&daerah="+daerah+"&jumlah="+jumlah+"&sudah="+sudah,
            cache: false,
            success: function(msg){
            	alert(msg);
                $("#loading").hide();
                $("#x").val("");
                $("#y").val("");
                $("#nama").val("");
		$("#alamat").val("");
		$("#kec").val("");
                $("#daerah").val("");
                $("#jumlah").val("");
                $("#sudah").val("");
                ambildatabase('akhir');
            }
        });
    });
    $("#tutup").click(function(){
        $("#jendelainfo").fadeOut();
    });
});
</script>
?>
