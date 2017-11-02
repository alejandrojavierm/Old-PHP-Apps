<?
@session_start();
if($_SESSION['isloged'] != 'E+2ks3Q-1oER5p7Ytt8UnS5t8'){
	@header("Location: ../../blank.php");
	echo "&copy; Originale Systems ::.!";
	exit();
}

$lang = file('../../inc/lang.txt'); //tomo el archivo db como array
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <style type="text/css">
<!--
.Estilo3 {color: #FF0000}
-->
    </style>
<script language="JavaScript" type="text/javascript" src="wysiwyg.js"></script>
</head>

<body>
<form action='proceso.php' method='post'>
<table width="497" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="497"><? echo $lang[53];?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><? echo $lang[54];?>
      <label>
      <input name="impreciones" type="text" id="impreciones" size="30" maxlength="85" />
      </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><? echo $lang[55];?>
      <label>
<textarea id="anuncio" name="anuncio" style="height: 200px; width: 350px;">
<b>Mini descripccion</b><br> Detalle<br>
</textarea>
<script language="javascript1.2">
  generate_wysiwyg('anuncio');
</script>      
</label></td>
  </tr>
  
  <tr>
    <td>
      <div align="left">
        <input type="submit" name="Submit" value="<? echo $lang[56];?>" />
      </div>
      <div align="center"></div></td></tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
