<?php

@session_start();
if($_SESSION['isloged'] != 'E+2ks3Q-1oER5p7Ytt8UnS5t8'){
	@header("Location: login.php");
	echo "&copy; Originale Systems ::.!";
	exit();
}

?>
<html>
<head>
<title>Clasificados IMP v1.0a - &copy; Originale Systems ::.</title>
<style type="text/css">
<!--
.Estilo1 {
	color: #FFFFFF;
	font-weight: bold;
}
.Estilo2 {color: #019A04}
.Estilo6 {color: #0F41C4; font-weight: bold; }
-->
</style></head>

<div align="center">
  <table width="719" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="719"><img src="imagenes/arriva.GIF" width="758" height="20" /></td>
    </tr>
    <tr>
      <td background="imagenes/bg04.GIF"><div align="center">
          <table width="657" border="0">
            <tr>
              <td colspan="3"><img src="imagenes/logo.jpg" width="360" height="59"></td>
            </tr>
            <tr>
              <td colspan="3"><?
$lang = file('inc/lang.txt'); //tomo el archivo db como array
$menu0 = $lang[0];
$menu1 = $lang[1];
$menu2 = $lang[2];
$menu3 = $lang[3];
$menu4 = $lang[4];
$menu5 = $lang[5];
$menu6 = $lang[6];
$menu7 = $lang[7];

?></td>
            </tr>
            <tr>
              <td bgcolor="#0F41C4"><div align="center"><span class="Estilo1"><? echo $lang[23];?></span></div></td>
              <td width="502" colspan="2" rowspan="16"><label><center><iframe src="categorias/index.php" width="490" height="360" name="mainFrame" id="mainFrame" title="mainFrame" scrolling="NO" frameborder="0"></iframe></center></label></td>
            </tr>
            <tr>
              <td width="145"><span class="Estilo6">&gt;</span><a href="categorias/index.php" target="mainFrame" class="Estilo2"> <? echo $menu0; ?></a></td>
            </tr>
            <tr>
              <td><span class="Estilo6">&gt;</span><a href="inc/pss.php" target="mainFrame" class="Estilo2"> <? echo $menu1; ?></a> </td>
            </tr>
            <tr>
              <td height="21"><span class="Estilo6">&gt;</span><a href="categorias/clean.php" target="mainFrame" class="Estilo2"> <? echo $menu2; ?></a> </td>
            </tr>
            <tr>
              <td><span class="Estilo6">&gt;</span><a href="inc/titulo.php" target="mainFrame" class="Estilo2"> <? echo $menu3; ?></a> </td>
            </tr>
            <tr>
              <td><span class="Estilo6">&gt;</span><a href="inc/color.php" target="mainFrame" class="Estilo2"> <? echo $menu4; ?></a> </td>
            </tr>
            <tr>
              <td><span class="Estilo6">&gt;</span><a href="inc/borde.php" target="mainFrame" class="Estilo2"> <? echo $menu5; ?></a> </td>
            </tr>
            <tr>
              <td><span class="Estilo6">&gt;</span><a href="skin.php" target="mainFrame" class="Estilo2"> <? echo $menu6; ?></a> </td>
            </tr>
            
            <tr>
              <td height="26"><span class="Estilo6">&gt;</span><a href="categorias/listado.php" target="mainFrame" class="Estilo2"> <? echo $lang[61]; ?></a></td>
            </tr>
            <tr>
              <td height="21"><span class="Estilo6">&gt;</span><a href="logoff.php" class="Estilo2"> <? echo $menu7; ?></a></td>
            </tr>
            <tr>
              <td height="21">&nbsp;</td>
            </tr>
            <tr>
              <td height="21">&nbsp;</td>
            </tr>
            <tr>
              <td height="21">&nbsp;</td>
            </tr>
            <tr>
              <td height="21">&nbsp;</td>
            </tr>
            <tr>
              <td height="21">&nbsp;</td>
            </tr>
            <tr>
              <td height="21">&nbsp;</td>
            </tr>
            
            <tr>
              <td colspan="3"><div align="center">2006 - 2007 &copy; <a href="www.originale.com.ar">Originale Software</a> </div></td>
            </tr>
          </table>
      </div></td>
    </tr>
    <tr>
      <td><img src="imagenes/abajo.GIF" width="758" height="20" /></td>
    </tr>
  </table>
</div>
