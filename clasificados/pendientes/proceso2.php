<?
function redireccion($url,$wait)
{
sleep($wait);
header("Location: $url");
}
if(isset($_POST['eliminar'])) 
{ 
    if (file_exists ('datos'.$_POST['eliminar'].'.txt'))
	{
		unlink('datos'.$_POST['eliminar'].'.txt');
		unlink('pagofacil'.$_POST['eliminar'].'.txt');
		unlink('publicar'.$_POST['eliminar'].'.txt');
	}
} 

$archivo = "contadorreal.txt"; 
$contador = 0; 

$fp = fopen($archivo,"r"); 
$contador = fgets($fp, 26); 
fclose($fp); 

$contador = $contador-1; 

$fp = fopen($archivo,"w+"); 
fwrite($fp, $contador, 26); 
fclose($fp);

echo '<h3>Eliminado exitosamente!!!</h3>';
?>
