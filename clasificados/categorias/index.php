<?
@session_start();
if($_SESSION['isloged'] != 'E+2ks3Q-1oER5p7Ytt8UnS5t8'){
	@header("Location: ../blank.php");
	echo "&copy; Originale Systems ::.!";
	exit();
}

$lang = file('../inc/lang.txt'); //tomo el archivo db como array
?>
<div align="center">
  <table width="168" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><div align="center"><a href="servicios/formulario.php"><? echo $lang[47];?></a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="computacion/formulario.php"><? echo $lang[48];?></a></div></td>
    </tr>
    <tr>
      <td> <div align="center"><a href="empleos/formulario.php"><? echo $lang[49];?></a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="propiedades/formulario.php"><? echo $lang[50];?></a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="varios/formulario.php"><? echo $lang[51];?></a></div></td>
    </tr>
    <tr>
      <td><div align="center"><a href="veiculos/formulario.php"><? echo $lang[52];?></a></div></td>
    </tr>
  </table>
</div>

