<?php
include "koneksi.php";
$akhir = $_GET['akhir'];
if($akhir==1){
   $query = "SELECT * FROM rk ORDER BY id_rk DESC LIMIT 1";
}else{
    $query = "SELECT * FROM rk";
}
$data = mysql_query($query);

$json = '{"wilayah": {';
$json .= '"petak":[ ';
?>
