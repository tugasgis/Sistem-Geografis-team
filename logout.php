<?php
//ini untuk fungsi logout
session_start();
session_destroy();
header('location:index.php');
?>
