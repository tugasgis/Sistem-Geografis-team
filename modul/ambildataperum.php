<?php
include "koneksi.php";
$akhir = $_GET['akhir'];
if($akhir==1){
<<<<<<< HEAD
    $query = "SELECT * FROM perumahan ORDER BY id_perumahan DESC LIMIT 4";
}else{
    $query = "SELECT * FROM perumahan";
=======
   $query = "SELECT * FROM rk ORDER BY id_rk DESC LIMIT 1";
}else{
    $query = "SELECT * FROM rk";
>>>>>>> 0e02d285bdeb931535aeaa08d4b7bafe7c2b17bc
}
$data = mysql_query($query);

$json = '{"wilayah": {';
$json .= '"petak":[ ';
while($x = mysql_fetch_array($data)){
    $json .= '{';
<<<<<<< HEAD
    $json .= '"id_perumahan":"'.$x['id_perumahan'].'",
		"nama":"'.htmlspecialchars($x['nama_perum']).'",
        "alamat":"'.htmlspecialchars($x['alamat']).'",
		"kec":"'.$x['country_map.nama_kec'].'",
		"daerah":"'.$x['daerah'].'",
		"jumlah":"'.$x['jumlah_dibangun'].'",
		"sudah":"'.$x['sudah_dibangun'].'",
		"x":"'.$x['lat'].'",
        "y":"'.$x['lng'].'"
=======
    $json .= '"id_sto":"'.$x['id_sto'].'",
    "nama":"'.htmlspecialchars($x['nama_rk']).'",
    "alamat":"'.htmlspecialchars($x['alamat']).'",
    "idsto":"'.$x['id_sto'].'",
		"x":"'.$x['lat'].'",
		 "y":"'.$x['lng'].'"
>>>>>>> 0e02d285bdeb931535aeaa08d4b7bafe7c2b17bc
    },';
}
$json = substr($json,0,strlen($json)-1);
$json .= ']';
<<<<<<< HEAD

$json .= '}}';
echo $json;

=======
$json .= '}}';
echo $json;
>>>>>>> 0e02d285bdeb931535aeaa08d4b7bafe7c2b17bc
?>
