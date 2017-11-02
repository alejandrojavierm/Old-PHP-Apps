<?php
@session_start();
if($_SESSION['isloged'] != 'E+2ks3Q-1oER5p7Ytt8UnS5t8'){
	@header("Location: blank.php");
	echo "&copy; Originale Systems ::.!";
	exit();
}

$lang = file('inc/lang.txt'); //tomo el archivo db como array
if (isset($_POST['file']))
{
rmdir('/templates');
mkdir('/templates',0755);
  include('inc/pclzip.lib.php');
  $archive = new PclZip($_POST['file']);
  if ($archive->extract(PCLZIP_OPT_PATH, 'templates',
                        PCLZIP_OPT_REMOVE_PATH, 'tmp') == 0) {
    die("Error : ".$archive->errorInfo(true));
  }
  header("Location: inc/mensajes.php?id=6");
}
?>
<html>
<p>&nbsp;</p>
<form action="<? echo $_SERVER['PHP_SELF'];?>" method="post">
<table width="343" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  
  <tr>
    <td width="104"><? echo $lang[21];?></td>
    <td width="239"><input name="file" type="file" id="file"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" name="Submit" value="<? echo $lang[22];?>">
    </label></td>
  </tr>
</table>
</form>
</html>