<?php
include "koneksi.php";
$akhir = $_GET['akhir'];
if($akhir==1){
    $query = "SELECT * FROM sto ORDER BY id_sto DESC LIMIT 1";
}else{
    $query = "SELECT * FROM sto";
}
$data = mysql_query($query);

$json = '{"wilayah": {';
$json .= '"petak":[ ';
?>
