<?php
session_start();

include_once('inc/Secrypt.class.inc.php'); //incluimos librecia de seguridad
$Secrypt = new Secrypt(); // activamos la libreria
$PublicKey  = 'cordobacomercial'; // Generamos las llaves
$PrivateKey= "etfdgotsvwhpgstyjyogsrhnhlgwseunmsbokds"; // llave privada
$ps = file('inc/db.txt'); //tomo el archivo db como array
$lang = file('inc/lang.txt'); //tomo el archivo lang como array
$usuario = $ps[0];
$pass = $ps[1];
$LOGIN_USERNAME = $Secrypt->Decrypt($usuario, $PrivateKey); // Desencriptamos
$LOGIN_PASSWORD = $Secrypt->Decrypt($pass, $PrivateKey); // Desencriptamos


// si el formulario se envio chequeamos los datos
if($_POST['submitid'] == 1){

	if($_POST['username'] == $LOGIN_USERNAME  && $_POST['password'] == $LOGIN_PASSWORD ){
		//creamos secion
		$_SESSION['isloged'] = 'E+2ks3Q-1oER5p7Ytt8UnS5t8';
		$_SESSION['username'] = $LOGIN_USERNAME;
		
		// redireccionamos al sitio
		header("Location: admin.php");
		exit();
	} else {
		$message = $lang[30];
	}
}

?>
<title>Clasificados IMP v1.0a - &copy; Originale Systems ::.</title>

<style type="text/css">
<!--
.Estilo1 {
	color: #CCCCCC;
	font-weight: bold;
	font-size: 12px;
}
.Estilo4 {color: #66CCFF}
.Estilo25 {font-size: 10}
.Estilo27 {color: #CCCCCC; font-size: 12px; }
.Estilo28 {
	font-size: 12px;
	color: #006699;
}
.Estilo29 {color: #006699; }
-->
</style>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="232" border="0">
    <tr>
      <td width="220"><img src="imagenes/logo.jpg" width="360" height="59" /></td>
    </tr>
  </table>
<?php

//Check if we are displaying a message to the user:
if($message != NULL){?>
  <table width="233" border="0">
    <tr>
      <td width="227"><div align="center"><?=$message;?></div></td>
    </tr>
  </table>
<?php } ?>  
<form action="<? echo $_SERVER['PHP_SELF'];?>" method="post" name="adminlogin" id="adminlogin" style="display:inline;">
  <table width="233" border="0" align="center">
    <tr>
      <td width="167"><? echo $lang[9];?></td>
      <td width="56"><label></label></td>
    </tr>
    <tr>
      <td><label>
        <input name="username" type="text" id="username" value="<?=$_POST['username'];?>" />
      </label></td>
      <td width="56" rowspan="3"><input type="submit" name="Submit" value="<? echo $lang[22];?>" /></td>
    </tr>
    <tr>
      <td><? echo $lang[10];?></td>
      </tr>
    <tr>
      <td><label>
        <input name="password" type="password" id="password" />
		<input name="submitid" type="hidden" id="submitid" value="1">
      </label></td>
      </tr>
    <tr>
      <td colspan="2"><div align="center"><a href="http://www.nova-networks.com.ar" class="Estilo29">www.originale.com.ar</a></div></td>
    </tr>
  </table>
</form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<table width="672" border="0" align="center">
  <tr>
    <td width="666"><hr class="Estilo27"></td>
  </tr>
  <tr>
    <td><span class="Estilo1">Clasificados IMP   - Panel de control</span></td>
  </tr>
  <tr>
    <td><span class="Estilo27"> &copy; Originale Systems </span></td>
  </tr>
  <tr>
    <td><span class="Estilo25"></span></td>
  </tr>
</table>
<p>&nbsp;</p>
