<?php
include "koneksi.php";
$akhir = $_GET['akhir'];
if($akhir==1){
    $query = "SELECT * FROM dp ORDER BY id_dp DESC LIMIT 1";
}else{
    $query = "SELECT * FROM dp";
}
$data = mysql_query($query);

$json = '{"wilayah": {';
$json .= '"petak":[ ';
?>
