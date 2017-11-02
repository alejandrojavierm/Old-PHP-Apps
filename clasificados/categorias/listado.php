<?
@session_start();
if($_SESSION['isloged'] != 'E+2ks3Q-1oER5p7Ytt8UnS5t8'){
	@header("Location: ../blank.php");
	echo "&copy; Originale Systems ::.!";
	exit();
}

if (isset($_POST['listado']))
{
unlink('db.txt');
$fp = fopen("db.txt" , "w");
fputs ($fp, $_POST['listado']);
fclose ($fp);
header("Location: ../inc/mensajes.php?id=9");
}
$lang = file('../inc/lang.txt'); //tomo el archivo db como array
?>
<div align="center">
<form action="listado.php" method="post">
  <table width="320" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="320"><div align="left"><? echo $lang[62];?></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">
        <label>
        <input name="listado" type="text" id="listado" />
        </label>
        <input type="submit" name="Submit" value="<? echo $lang[22]; ?>" />
      </div></td>
    </tr>
    <tr>
      <td><label>
        <div align="center"></div>
      </label></td>
    </tr>
  </table>
  </form>
</div>

