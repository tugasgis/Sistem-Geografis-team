<?php
include "koneksi.php";
$act=$_GET[act];
$jenis=$_GET[jenis];

// =======================================================================================

//hapus rk
if ($jenis=='rk' AND $act=='hapus'){
  mysql_query("DELETE FROM rk WHERE id_rk='$_GET[id]'");
  header('location:editrk.php');
}

}
?>