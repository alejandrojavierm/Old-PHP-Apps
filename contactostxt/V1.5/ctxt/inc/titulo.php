<?php

@session_start();
if($_SESSION['isloged'] != 'E+2ks3Q-1oER5p7Ytt8UnS5t8'){
	@header("Location: ../blank.php");
	echo "&copy; Originale Systems ::.!";
	exit();
}
$lang = file('lang.txt'); //tomo el archivo db como array


$db = file('db.txt'); //tomo el archivo db como array
$usuario = $db[0]; // tomo valor de usuario
$usuario=str_replace("\n",' ',$usuario);
$usuario=ereg_replace('[[:space:]]+',' ',$usuario);
$pass = $db[1]; // tomo pass y quito espacios
$pass=str_replace("\n",' ',$pass);
$pass=ereg_replace('[[:space:]]+',' ',$pass);
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

if(isset($_POST['titulo'])) 
{
$titulo = $_POST['titulo'];
unlink("db.txt"); //elimino la db
}

//si se postea el pass elimino y cambio el archivo
if(isset($_POST['titulo'])) 
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
	}
header("Location: mensajes.php?id=2");	
}

?>
<html>
<form action="<? echo $_SERVER['PHP_SELF'];?>" method="post">
<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><? echo $lang[14];?></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="76" height="22"><? echo $lang[15];?></td>
    <td width="274"><label>
      <input name="titulo" type="text" id="titulo" size="40">
    </label></td>
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

