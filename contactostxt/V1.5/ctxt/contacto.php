<? $Vd77d5e50 = file('inc/db.txt'); 
include_once('inc/Secrypt.class.inc.php'); 
$V16b86474 = new Secrypt(); 
$Vaddbd28a = 'originale'; 
$Ve797e6e2= 'udh7yv4a5pwncektgr57dpolk4wesd5ipo82opfdswaefdo56pnr77efxcfdsioip'; 
$V3c6e0b8a = $Vd77d5e50[5]; 
}
?>
<?php include "inc/functions.php"; ?>
<? $V7572559c = file('inc/lang.txt'); ?>
<?
$V70dda5df = $Vd77d5e50[2];
$V37c24a31 = $Vd77d5e50[4];
if ($V37c24a31 == 1)
{
$V66f6181b = file('templates/indice.txt'); 
$V70dda5df = $V66f6181b[0];
$Vf8d23e15 = $V66f6181b[2];
$Ve30d1b8e = $V66f6181b[3];
}
?>
<html>
<head>
<title><? echo $Vd77d5e50[3];?></title>
<style type="text/css">
<!--
body {
	background-color: <? echo $V70dda5df;?>;
}
.Estilo1 {font-size: 12px}
-->
</style>
</head>
<form action="contactopros.php?<?PHP echo SID; ?>" method="post">
 <table width="389" border="0" cellspacing="0" cellpadding="0">
 <tr>
 <td width="389"><? if ($V37c24a31 == 1) {echo '<img src="templates/'.$V66f6181b[1].'">'; }?></td>
 </tr>
 <tr>
 <td <? if ($V37c24a31 == 1) {echo 'background="templates/'.$V66f6181b[3].'"'; }?>><table width="316" align="center" cellpadding=1>
 <tr>
 <td colspan="2" align="center"><em><strong><? echo $Vd77d5e50[3];?></strong></em></td>
 </tr>
 <tr>
 <td colspan="2" align="center"><div align="left"><? echo $V7572559c[32];?></div></td>
 </tr>
 <tr>
 <td colspan="2" align="center"><div align="left">
 <textarea name="sugerencia" cols="40" rows="12" id="sugerencia"><? echo $V7572559c[33];?></textarea>
 </div>
 </label></td>
 </tr>
 <tr>
 <td width="171" align="center"><div align="left">
 <?php dsp_crypt(0,black.config.inc); ?>
 </div></td>
 <td width="129" align="center"><? echo $V7572559c[34];?><br>
 <input type="text" name="code"></td>
 </tr>
 <tr>
 <td colspan="2" align="center"><div align="left">
 <input type="submit" name="submit" value="<? echo $V7572559c[35];?>">
 </div></td>
 </tr>
 <tr>
   <td colspan="2" align="center"><span class="Estilo1">Power by <a href="http://nova-networks.com.ar/0/freeware/ctxt.html" target="_blank">ContactoTXT</a> -  <a href="http://nova-networks.com.ar" target="_blank">Nova Networks Cba</a> </span></td>
 </tr>
 </table></td>
 </tr>
 <tr>
 <td><? if ($V37c24a31 == 1) {echo '<img src="templates/'.$V66f6181b[2].'">'; }?></td>
 </tr>
 </table>
</form>
</html>
