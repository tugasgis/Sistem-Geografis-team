<?php
include "koneksi.php";
$act=$_GET[act];
$jenis=$_GET[jenis];

// =======================================================================================

//hapus Perum
if ($jenis=='perum' AND $act=='hapus'){
  mysql_query("DELETE FROM perumahan WHERE id_perumahan='$_GET[id]'");
  header('location:editperum.php');
}


}
?>