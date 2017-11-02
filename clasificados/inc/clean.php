<?
if(isset($_POST['opcion'])) 
{
	if ($_POST['opcion'] == 1)
	{
	unlink('contacto.txt');
	$desc=fopen('contacto.txt',"w");    
	fclose ($desc);
	header("Location: mensajes.php?id=1");
	}
	if ($_POST['opcion'] == 2)
	{
	header("Location: contacto.txt");
	}
}
$lang = file('lang.txt'); //tomo el archivo db como array
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

