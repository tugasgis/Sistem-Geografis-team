<?php
include "koneksi.php";
$act=$_GET[act];
$jenis=$_GET[jenis];


// Hapus DP
if ($jenis=='dp' AND $act=='hapus'){
  mysql_query("DELETE FROM dp WHERE id_dp='$_GET[id]'");
  header('location:edit_dp.php');
}

// Update DP

}
?>