<?php
$host = 'localhost';
$user = 'root';
$pass ='';
$dbname = 'drasticdata';
$connect = mysql_connect($host, $user, $pass) or die (mysql_error());
$dbselect = mysql_select_db($dbname) or die (mysql_error());
if ($connect){
echo "";
}else{
echo "maaf, koneksi gagal";
}
?>