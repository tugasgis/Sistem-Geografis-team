<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tugas besar GIS</title>
<script language="javascript">
function validasi(form){
  if (form.username.value == ""){
    alert("Anda belum mengisikan Username.");
    form.username.focus();
    return (false);
  }
     
  if (form.password.value == ""){
    alert("Anda belum mengisikan Password.");
    form.password.focus();
    return (false);
  }
  return (true);
}
</script>
<style type="text/css">

p, h1, form, button{border:0; margin:0; padding:0;}
body {
	background-image: url(images/bg_tile_01.jpg);
	background-repeat: repeat-x;
	background-color: #D6E8F4;
}
#wrapper button {
	position:absolute;
	left:403;
	top:388;
	margin-left:150px;
	width:125px;
	height:31px;
}
#aksi {
	position:absolute;
	left:699px;
	top:432px;
	width:132px;
	height:31px;
	z-index:1;
	text-align: center;
}#wrapper {
	position: absolute;
	height: 600px;
	width: 800px;
	left: 220px;
	top: 45px;
	bottom: 50px;
}
#inputnama {
	position:absolute;
	left:278px;
	top:273px;
	width:215px;
	height:23px;
	z-index:1;
}
#inputpass {
	position:absolute;
	left:278px;
	top:332px;
	width:215px;
	height:21px;
	z-index:2;
}
#aksi table {
	text-align: center;
}
</style>
</head>

<body OnLoad="document.login.username.focus();"> 
<form name="form" action="cekdulu.php" method="POST" onSubmit="return validasi(this)">
<div id="wrapper"><img src="images/login.png" width="800" height="600" />
<div id="inputnama">
</html>