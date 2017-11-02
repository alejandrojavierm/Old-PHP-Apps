<?php
include_once('inc/Secrypt.class.inc.php'); //incluimos librecia de seguridad
$Secrypt = new Secrypt(); // activamos la libreria
$PublicKey  = 'cordobacomercial'; // Generamos las llaves
$PrivateKey= 'publica'; // llave privada
$usuario = $Secrypt->Encrypt($_POST['usuario'], $PrivateKey); //encriptamos
$pass = $Secrypt->Encrypt($_POST['pass'], $PrivateKey); //encriptamos
$lang = file('inc/lang.txt'); //tomo el archivo db como array

$mensaje = $lang[28];// damos el mensaje al debug

//verificamos que esista, si existe eliminamos y guardamos, sino creamos y guardamos
if (file_exists ('inc/db.txt')) 
{
unlink("inc/db.txt");
fopen("inc/db.txt","w");
}

if(isset($_POST['pass'])) 
{ 
    if (@$fp = fopen("inc/db.txt","a")) 
    { 
        fwrite($fp,$usuario."\r\n");
		fwrite($fp,$pass."\r\n");
		fwrite($fp,$_POST['hex']."\r\n");
		fwrite($fp,$_POST['titulo']."\r\n");
		fwrite($fp,$_POST['borde']."\r\n");    
        fclose($fp); 
		$mensaje = $lang[29]; 
    } 
}

?>

<html>
<head>
<title>Contacto TXT v1.0a - &copy; Originale Systems ::.</title>
</head>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="683" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="662"><img src="imagenes/arriva.GIF" width="758" height="20"></td>
  </tr>
  <tr>
    <td background="imagenes/bg04.GIF"><div align="center"><?php echo $mensaje; ?></div></td>
  </tr>
  <tr>
    <td><img src="imagenes/abajo.GIF" width="758" height="20"></td>
  </tr>
</table>

