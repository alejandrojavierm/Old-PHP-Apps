<?
/*agregamos la funcion redireccion*/
function redireccion($url,$wait)
{
sleep($wait);
header("Location: $url");
}

/*abrimos el contador*/
 
$archivo = "contador.txt"; 
$contador = 0; 

$fp = fopen($archivo,"r"); 
$contador = fgets($fp, 26); 
fclose($fp);

$archivo = "contadorreal.txt"; 
$contadorreal = 0; 

$fp = fopen($archivo,"r"); 
$contadoreeal = fgets($fp, 26); 
fclose($fp);

/*usamos el bucle*/
while ($contador>=1)
{
/*mostramos datos personales*/
if (file_exists ('datos'.$contador.'.txt'))
{
echo 'Id: '.$contador.'<br>';
$archivo= fopen('datos'.$contador.'.txt' , "r");
if ($archivo) {
while (!feof($archivo)) {
echo fgets($archivo, 255);
}
}
fclose ($archivo);
echo '<br>';
}
/*mostramos el numero de pagofacil*/
if (file_exists ('pagofacil'.$contador.'.txt'))
{
$archivo= fopen('pagofacil'.$contador.'.txt' , "r");
if ($archivo) {
while (!feof($archivo)) {
echo fgets($archivo, 255);
}
}
fclose ($archivo);
echo '<br>';
}
/*mostramos el anuncio*/
if (file_exists ('publicar'.$contador.'.txt'))
{
$archivo= fopen('publicar'.$contador.'.txt' , "r");
if ($archivo) {
while (!feof($archivo)) {
echo fgets($archivo, 255);
}
}
fclose ($archivo);
echo '<br>------------------------------------------- </br>';
}
$contador = $contador-1; 
/*cerramos*/
}
/*damos por terminado*/
?>