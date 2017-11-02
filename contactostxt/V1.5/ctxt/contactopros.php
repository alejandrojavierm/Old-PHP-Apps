<?php 
include "inc/functions.php";
include_once('inc/Secrypt.class.inc.php'); //incluimos librecia de seguridad
$Secrypt = new Secrypt(); // activamos la libreria
$PublicKey  = 'cordobacomercial'; // Generamos las llaves
$PrivateKey= 'publica'; // llave privada
$lang = file('inc/lang.txt'); //tomo el archivo lang como array 

// Obtenemos el número del día
$dia=date("d");

// Obtenemos y traducimos el nombre del mes
$mes=date("F");
if ($mes=="January") $mes="01";
if ($mes=="February") $mes="02";
if ($mes=="March") $mes="03";
if ($mes=="April") $mes="04";
if ($mes=="May") $mes="05";
if ($mes=="June") $mes="06";
if ($mes=="July") $mes="07";
if ($mes=="August") $mes="08";
if ($mes=="September") $mes="09";
if ($mes=="October") $mes="10";
if ($mes=="November") $mes="11";
if ($mes=="December") $mes="12";

// Obtenemos el año
$ano=date("Y");

// Imprimimos la fecha completa
$diadeentrada = "[$dia/$mes/$ano] ".$_POST['sugerencia'];


$sugerencia = $Secrypt->Encrypt($diadeentrada, $PrivateKey); //encriptamos
  if (chk_crypt($_POST['code'])) 
  {
  	if(isset($_POST['sugerencia'])) 
{ 
    if (@$fp = fopen("inc/contacto.txt","a")) 
    { 
        fwrite($fp,$sugerencia."\r\n"); 
        fclose($fp); 
    } 
} 
echo '<html><center><p><h1></h1></p><p><h1></h1></p><p><h1></h1></p><p><h1>'.$lang[36].'</h1></p><p><h1>'.$lang[37].'</h1></p></center></html>';
  }
     else echo '<center><p><h1></h1></p><p><h1></h1></p><p><h1></h1></p><p><h1>'.$lang[38].'</h1></p></center>';
?>
</html>

