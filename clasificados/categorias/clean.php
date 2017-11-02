<?
@session_start();
if($_SESSION['isloged'] != 'E+2ks3Q-1oER5p7Ytt8UnS5t8'){
	@header("Location: ../blank.php");
	echo "&copy; Originale Systems ::.!";
	exit();
}


$cero = '1';
if(isset($_POST['opcion'])) 
{
	if ($_POST['opcion'] == 1)
	{
	unlink('computacion/contador.txt');
	unlink('computacion/contadorreal.txt');
	$fp=fopen('computacion/contador.txt',"w"); 
	fwrite($fp, $cero, 26);   
	fclose ($fp);
	$fp=fopen('computacion/contadorreal.txt',"w"); 
	fwrite($fp, $cero, 26);   
	fclose ($fp);
	
	unlink('servicios/contador.txt');
	unlink('servicios/contadorreal.txt');
	$fp=fopen('servicios/contador.txt',"w"); 
	fwrite($fp, $cero, 26);   
	fclose ($fp);
	$fp=fopen('servicios/contadorreal.txt',"w"); 
	fwrite($fp, $cero, 26);   
	fclose ($fp);
	
	unlink('empleo/contador.txt');
	unlink('empleo/contadorreal.txt');
	$fp=fopen('empleo/contador.txt',"w"); 
	fwrite($fp, $cero, 26);   
	fclose ($fp);
	$fp=fopen('empleo/contadorreal.txt',"w"); 
	fwrite($fp, $cero, 26);   
	fclose ($fp);
	
	unlink('varios/contador.txt');
	unlink('varios/contadorreal.txt');
	$fp=fopen('varios/contador.txt',"w"); 
	fwrite($fp, $cero, 26);   
	fclose ($fp);
	$fp=fopen('varios/contadorreal.txt',"w"); 
	fwrite($fp, $cero, 26);   
	fclose ($fp);
	
	unlink('propiedades/contador.txt');
	unlink('propiedades/contadorreal.txt');
	$fp=fopen('propiedades/contador.txt',"w"); 
	fwrite($fp, $cero, 26);   
	fclose ($fp);
	$fp=fopen('propiedades/contadorreal.txt',"w"); 
	fwrite($fp, $cero, 26);   
	fclose ($fp);

	unlink('veiculos/contador.txt');
	unlink('veiculos/contadorreal.txt');
	$fp=fopen('veiculos/contador.txt',"w"); 
	fwrite($fp, $cero, 26);   
	fclose ($fp);
	$fp=fopen('veiculos/contadorreal.txt',"w"); 
	fwrite($fp, $cero, 26);   
	fclose ($fp);


	header("Location: ../inc/mensajes.php?id=1");
	}
	if ($_POST['opcion'] == 2)
	{
	header("Location: index.php");
	}
}
$lang = file('../inc/lang.txt'); //tomo el archivo db como array
?>

<p>&nbsp;</p>
<table width="293" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><? echo $lang[11];?></td>
  </tr>
  <tr>
    <td><div align="center">
	<form action="<? echo $_SERVER['PHP_SELF'];?>" method="post">
	  <label>
	  <input name="opcion" type="radio" value="1" />
	  <? echo $lang[12];?>
	  <input name="opcion" type="radio" value="2" /> 
	  <? echo $lang[13];?>
	  </label>
	  <input type="submit" name="Submit2" value="<? echo $lang[22];?>" />
        </form>
    </div></td>
  </tr>
</table>

