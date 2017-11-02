<?

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
<?
$nom_pag1= "pagofacil$contador.txt";
$descb=fopen($nom_pag1,"w");    
?>
<?
$nom_pag2= "publicar$contador.txt";
$descb=fopen($nom_pag2,"w");    
?>
<?
$nom_pag3= "datos$contador.txt";
$descb=fopen($nom_pag3,"w");    
?>
<?php
if(isset($_POST['anuncio'])) 
{ 
    if (@$fp = fopen("publicar$contador.txt","a")) 
    { 
        fwrite($fp,$_POST['anuncio']."\r\n"); 
        fclose($fp); 
    } 
} 
if(isset($_POST['nombre'])) 
{ 
    if (@$fp = fopen($nom_pag3,"a")) 
    { 
        fwrite($fp,$_POST['nombre']."\r\n"); 
        fwrite($fp,$_POST['email']."\r\n");
        	if(isset($_POST['cyber'])) 
			{ 
	       		fwrite($fp,$_POST['cyber']."\r\n");  
			}
		fclose($fp);  
    } 
} 
if(isset($_POST['pagofacil'])) 
{ 
    if (@$fp = fopen($nom_pag1,"a")) 
    { 
        fwrite($fp,$_POST['pagofacil']."\r\n");
		fwrite($fp,$_POST['pagofacil2']."\r\n");
		fwrite($fp,$_POST['hora']."\r\n");
		fwrite($fp,$_POST['monto']."\r\n");
        fclose($fp); 
    } 
} 

 
redireccion("enviado.php" , 0);

?>