<? 
$lang = file('../../inc/lang.txt');
$db = file('../../inc/db.txt'); //tomo el archivo db como array
include_once('../../inc/Secrypt.class.inc.php'); //incluimos librecia de seguridad
$Secrypt = new Secrypt(); // activamos la libreria
$PublicKey  = 'originale'; // Generamos las llaves
$PrivateKey= 'udh7yv4a5pwncektgr57dpolk4wesd5ipo82opfdswaefdo56pnr77efxcfdsioip'; // llave privada
$key = $db[5]; //quito espacios del color
$llave = $Secrypt->Decrypt($key, $PrivateKey); // Desencriptamos

if($_SERVER['HTTP_HOST'] != $llave){
	@header("Location: http://key.originale.com.ar/fallo.php");
	echo "&copy; Originale Systems ::.!";
	exit();
}
$color = $db[2];
$skin = $db[4];
?>
<?
if ($skin == 1)
{ ?>
<link rel="stylesheet" href="../../templates/estilo.css" type="text/css" />
<? } else { ?>
<style type="text/css">
<!--
body {
	background-color: <? echo $color; ?>;
}
-->
</style>
<? } ?>
<title><? echo $db[3]; ?></title>

<?
//vemos el contador
if (isset($_GET['contador'])) 
{
$contador = $_GET['contador'];
}
else
{ 
$archivo = "contador.txt"; 
$contador = 0; 

$fp = fopen($archivo,"r"); 
$contador = fgets($fp, 26); 
fclose($fp);
}

$archivo = "contadorreal.txt"; 
$contadorreal = 0; 

$fp = fopen($archivo,"r"); 
$contadoreeal = fgets($fp, 26); 
fclose($fp);

$bueltas=0;

/*usamos el bucle*/
while ($contador>=1)
{
/*mostramos el anuncio*/
if (file_exists ('publicar'.$contador.'.txt'))
{
$bueltas= $bueltas+1;
$archivo= fopen('publicar'.$contador.'.txt' , "r");
if ($archivo) {
while (!feof($archivo)) {
echo fgets($archivo, 255);
}
}
fclose ($archivo);
echo '<table width="463" border="0" cellspacing="0" cellpadding="0">';
echo '<tr>';
echo '<td><hr /></td>';
echo '</tr>';
echo '</table>';
/*leemos impreciones y eliminamos de ser necesario*/
$archivos = "impreciones$contador.txt"; 
$contadors = 0; 

$fps = fopen($archivos,"r"); 
$contadors = fgets($fps, 26); 
fclose($fps); 

$contadors = $contadors-1; 

$fps = fopen($archivos,"w+"); 
fwrite($fps, $contadors, 26); 
fclose($fps);
if ($contadors<=0)
{
$archivoreal = "contadorreal.txt"; 
$contadorreal = 0; 

$fpreal = fopen($archivoreal,"r"); 
$contadorreal = fgets($fpreal, 26); 
fclose($fpreal); 

$contadorreal = $contadorreal-1; 

$fpreal = fopen($archivoreal,"w+"); 
fwrite($fpreal, $contadorreal, 26); 
fclose($fpreal);
unlink("publicar$contador.txt");
unlink("impreciones$contador.txt");
}
}
$contador = $contador-1;
$cont= $contador; 
/*cerramos*/
$buel = file('../db.txt');
if ($bueltas >= $buel[0])
{
$cont2 = $cont + $bueltas;
echo '<table width="463" border="0" cellspacing="0" cellpadding="0">';
echo '<tr>';
echo '<td><a href="'.$PHP_SELF.'?contador='.$cont2.'">&lt;&lt;&lt; '.$lang[58].'</a></td>';
echo '<form name="form1" method="post" action="'.$PHP_SELF.'">';
echo '<td><div align="right"><a href="'.$PHP_SELF.'?contador='.$cont.'">'.$lang[59].' &gt;&gt;&gt; </a></td>';
$contador=0;
}
}

if ($bueltas < $buel[0])
{
echo '<table width="463" border="0" cellspacing="0" cellpadding="0">';
echo '<tr>';
echo '<td></td>';
echo '<td><div align="center">'.$lang[60].'</td>';
echo '</tr>';
echo '</table>';
}
?>
