<?php

@session_start();
if($_SESSION['isloged'] != 'E+2ks3Q-1oER5p7Ytt8UnS5t8'){
	@header("Location: ../blank.php");
	echo "&copy; Originale Systems ::.!";
	exit();
}
$lang = file('lang.txt'); //tomo el archivo db como array
include_once('Secrypt.class.inc.php'); //incluimos librecia de seguridad
$Secrypt = new Secrypt(); // activamos la libreria
$PublicKey  = 'cordobacomercial'; // Generamos las llaves
$PrivateKey= 'publica'; // llave privada
$info = $lang[8];


$db = file('db.txt'); //tomo el archivo db como array
$usuario = $db[0]; // tomo valor de usuario
$pass = $db[1];
$hex = $db[2]; //quito espacios del color
$hex=str_replace("\n",' ',$hex);
$hex=ereg_replace('[[:space:]]+',' ',$hex);
$titulo = $db[3]; //quito espacios del titulo
$titulo=str_replace("\n",' ',$titulo);
$titulo=ereg_replace('[[:space:]]+',' ',$titulo);
$borde = $db[4]; //quito espacios del borde
$borde=str_replace("\n",' ',$borde);
$borde=ereg_replace('[[:space:]]+',' ',$borde);
$key = $db[5]; //quito espacios del borde
$key=str_replace("\n",' ',$key);
$key=ereg_replace('[[:space:]]+',' ',$key);

if(isset($_POST['pass'])) 
{
$usuario = $Secrypt->Encrypt($_POST['usuario'], $PrivateKey); //encriptamos
$pass = $Secrypt->Encrypt($_POST['pass'], $PrivateKey); //encriptamos
unlink("db.txt"); //elimino la db
}

//si se postea el pass elimino y cambio el archivo
if(isset($_POST['pass'])) 
{ 
if (@$fp = fopen("db.txt","a")) 
    { 
fwrite($fp,$usuario."\r\n"); // bolcado de usuario
fwrite($fp,$pass."\r\n"); //volcado de contraseña
fwrite($fp,$hex."\r\n");
fwrite($fp,$titulo."\r\n");
fwrite($fp,$borde."\r\n");
fwrite($fp,$key."\r\n");
fclose($fp);
$s = 1;
	}
	if ($s == 1 ) {header("Location: mensajes.php?id=7");}
}

?>
<html>
<form action="<? echo $_SERVER['PHP_SELF'];?>" method="post">
<table width="310" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><b><? echo $info; ?></b></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="93"><? echo $lang[9];?></td>
    <td width="217"><label>
      <input name="usuario" type="text" id="usuario">
    </label></td>
  </tr>
  <tr>
    <td><? echo $lang[10];?></td>
    <td><input name="pass" type="password" id="pass"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" name="Submit" value="<? echo $lang[22];?>">
    </label></td>
  </tr>
</table>
</form>
</html>

