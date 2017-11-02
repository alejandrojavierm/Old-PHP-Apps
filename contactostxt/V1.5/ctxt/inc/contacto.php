<?
@session_start();
if($_SESSION['isloged'] != 'E+2ks3Q-1oER5p7Ytt8UnS5t8'){
	@header("Location: ../blank.php");
	echo "&copy; Originale Systems ::.!";
	exit();
}
include_once('Secrypt.class.inc.php'); //incluimos librecia de seguridad
$Secrypt = new Secrypt(); // activamos la libreria
$PublicKey  = 'cordobacomercial'; // Generamos las llaves
$PrivateKey= 'publica'; // llave privada
$info = 'Ingrese nuevo usuario y contrase&ntilde;a ';
$linea = file('contacto.txt');
$contador = 0;
while ($contador <= 50) 
{
$archivo = $linea[$contador];
$datos = $Secrypt->Decrypt($archivo, $PrivateKey); // Desencriptamos
echo $datos;
echo '<br>';
$contador = $contador+1;
}
?>