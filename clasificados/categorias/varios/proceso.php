<?
@session_start();
if($_SESSION['isloged'] != 'E+2ks3Q-1oER5p7Ytt8UnS5t8'){
	@header("Location: ../../blank.php");
	echo "&copy; Originale Systems ::.!";
	exit();
}

/*agregamos la funcion redireccion*/
function redireccion($url,$wait)
{
sleep($wait);
header("Location: $url");
}
 
$archivo = "contador.txt"; 
$contador = 0; 

$fp = fopen($archivo,"r"); 
$contador = fgets($fp, 26); 
fclose($fp); 

$contador = $contador+1; 

$fp = fopen($archivo,"w+"); 
fwrite($fp, $contador, 26); 
fclose($fp);

/*Aqui incremento*/
$archivoreal = "contadorreal.txt"; 
$contadorreal = 0; 

$fpreal = fopen($archivoreal,"r"); 
$contadorreal = fgets($fpreal, 26); 
fclose($fpreal); 

$contadorreal = $contadorreal+1; 

$fpreal = fopen($archivoreal,"w+"); 
fwrite($fpreal, $contadorreal, 26); 
fclose($fpreal);

?>
<?php
if (file_exists ('publicar$contador.txt')) {unlink('publicar$contador.txt');}
if (file_exists ('impreciones$contador.txt')) {unlink('impreciones$contador.txt');}

if(isset($_POST['anuncio'])) 
{ 
    if (@$fp = fopen("publicar$contador.txt","a")) 
    { 
        fwrite($fp,$_POST['anuncio']."\r\n"); 
        fclose($fp); 
    } 
} 
if(isset($_POST['impreciones'])) 
{ 
    if (@$fp = fopen("impreciones$contador.txt","a")) 
    { 
        fwrite($fp,$_POST['impreciones']."\r\n"); 
        fclose($fp); 
    } 
}
 
redireccion("../../inc/mensajes.php?id=8" , 0);

?>