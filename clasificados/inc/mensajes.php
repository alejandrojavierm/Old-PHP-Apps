<?
$lang = file('lang.txt'); //tomo el archivo db como array

if ($_GET['id'] == 1) { $mensaje = $lang[39]; }
if ($_GET['id'] == 2) { $mensaje = $lang[40]; }
if ($_GET['id'] == 3) { $mensaje = $lang[41]; }
if ($_GET['id'] == 4) { $mensaje = $lang[42]; }
if ($_GET['id'] == 5) { $mensaje = $lang[43]; }
if ($_GET['id'] == 6) { $mensaje = $lang[44]; }
if ($_GET['id'] == 7) { $mensaje = $lang[45]; }
if ($_GET['id'] == 8) { $mensaje = $lang[57]; }
if ($_GET['id'] == 9) { $mensaje = $lang[63]; }
?>
<p>&nbsp;</p>
<table width="325" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center"><? echo $mensaje; ?></div></td>
  </tr>
</table>