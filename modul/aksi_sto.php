<?php
include "koneksi.php";
$act=$_GET[act];
$jenis=$_GET[jenis];


// Hapus sto
if ($jenis=='sto' AND $act=='hapus'){
  mysql_query("DELETE FROM sto WHERE id_sto='$_GET[id]'");
  header('location:editsto.php');
}


?>