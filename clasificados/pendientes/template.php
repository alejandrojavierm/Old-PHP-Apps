<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?php include("../../admin/seo/clasificados/descripcion.php"); ?>" />
	<meta name="keywords" content="<?php include("../../admin/seo/clasificados/descripcion.php"); ?>" />
	<meta name="author" content="Alejandro M." />
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-2" />
	<link rel="stylesheet" href="../../images/estilo.css" type="text/css" />
	<title><?php include("../../admin/seo/titulo.php"); ?></title>
    <style type="text/css">
<!--
.Estilo1 {color: #000000}
.Estilo2 {color: #339900}
.Estilo5 {color: #000000; font-weight: bold; }
.Estilo9 {font-size: 14px}
.Estilo13 {color: #FF0000}
-->
    </style>
</head>
<?
ob_start();
//inicio de comprecion
?>
<body onLoad="goforit()">
	<div class="content">
		<div class="header">
		  <table width="753" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="190" rowspan="2"><table width="92" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="92"><img src="../../images/logo.jpg" alt="logo" width="149" height="111" /></td>
                </tr>
              </table></td>
              <td width="319"><div class="top_info_left">
                <p><span class="Estilo5">Eres un usuario? </span><span class="Estilo1"><br />
                  Puedes</span><a href="#"><span class="Estilo2"> ingresar</span></a><span class="Estilo1"> o </span><a href="#"><span class="Estilo2">resgitrarte</span></a><span class="Estilo1"> desde aqu&iacute; </span> </p>
              </div>                <p align="left">&nbsp;</p>                </td>
              <td width="244"><div class="top_info_left">
                <p align="right"><span class="Estilo5">
                  <?
// Obtenemos y traducimos el nombre del d a
$dia=date("l");
if ($dia=="Monday") $dia="Lunes";
if ($dia=="Tuesday") $dia="Martes";
if ($dia=="Wednesday") $dia="Mircoles";
if ($dia=="Thursday") $dia="Jueves";
if ($dia=="Friday") $dia="Viernes";
if ($dia=="Saturday") $dia="Sabado";
if ($dia=="Sunday") $dia="Domingo";

// Obtenemos el n mero del da
$dia2=date("d");

// Obtenemos y traducimos el nombre del mes
$mes=date("F");
if ($mes=="January") $mes="Enero";
if ($mes=="February") $mes="Febrero";
if ($mes=="March") $mes="Marzo";
if ($mes=="April") $mes="Abril";
if ($mes=="May") $mes="Mayo";
if ($mes=="June") $mes="Junio";
if ($mes=="July") $mes="Julio";
if ($mes=="August") $mes="Agosto";
if ($mes=="September") $mes="Setiembre";
if ($mes=="October") $mes="Octubre";
if ($mes=="November") $mes="Noviembre";
if ($mes=="December") $mes="Diciembre";

// Obtenemos el a o
$ano=date("Y");

// Imprimimos la fecha completa
echo "$dia $dia2 de $mes de $ano";
?>
                  <span id="clock"></span> </span><span class="Estilo1"><br />
                </span><span class="Estilo1">Has esta pagina la <a class="Estilo2" href="../../directorio/href" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://address-to-your-site.com');" style="CURSOR: hand">Principal</a> de tu navegador</span></p>
              </div></td>
            </tr>
            
            <tr>
              <td colspan="2"><div align="left"><img src="../../images/cbacom.jpg" alt="logo" width="453" height="55" /></div></td>
            </tr>
          </table>
	  </div>
		<div class="bar">
			<ul>
				<li class="slogan">
				  <div align="center">&iexcl; Felices Fiestas! </div>
				</li>
				<li><a href="#" accesskey="s">Servicios</a></li>
				<li><a href="../../index.php" accesskey="c">Principal</a></li>
				<li><a href="#" accesskey="d">Directorio</a></li>
				<li class="active">Clasificados</li>
				<li><a href="#" accesskey="b">Noticias</a></li>
				<li><a href="#" accesskey="j">Entretenimientos</a></li>
				<li><a href="#" accesskey="t">Tu Sitio</a></li>
				</ul>
		</div>
		<div class="search_field">
			<form method="post" action="../../directorio/?">
				<p><input type="text" name="search" class="searchblack" /> 
				<input type="submit" value="Buscar en webs cordobesas" class="searchSubmit" /></p>
			</form>
		</div>
		<div class="subheader">
			<p><?php include("../../admin/seo/lineadetexto/texto.txt"); ?></p>
	  </div>
	  <form action='proceso3.php' method='post'>
		<table width="757" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="757"><img src="../../images/arriva.GIF" alt="" width="758" height="20" /></td>
          </tr>
          <tr>
            <td background="../../images/bg03.gif"><table width="702" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td colspan="2"><div align="center" class="Estilo9">
                  <div align="left"><img src="gratis.jpg" alt="" width="511" height="71" /></div>
                </div></td>
              </tr>
              <tr>
                <td colspan="2"><div align="center" class="Estilo13">Por el momento no necesita pagar en ningún lugar.. sus clasificados se publicaran, solo llene los dos primeros requisitos y su anuncio. </div></td>
              </tr>
              <tr>
                <td width="357" rowspan="17"><img src="pagofacil.jpg" alt="" width="357" height="367" /></td>
                <td width="345"><p>&nbsp;</p>                </td>
              </tr>
              <tr>
                <td>Su nombre y apellido </td>
              </tr>
              <tr>
                <td><input name="nombre" type="text" id="nombre" value="Nombre Apellido" size="40" maxlength="85" />&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Su email </td>
              </tr>
              <tr>
                <td><input name="email" type="text" id="email" value="@mimail.com" size="40" maxlength="85" />&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Su código pago fácil (coloreados de rojo y verde en la imagen) </td>
              </tr>
              <tr>
                <td><input name="pagofacil" type="text" id="pagofacil" value="1234" size="4" maxlength="4" />
      - 
      <input name="pagofacil2" type="text" id="pagofacil2" value="A12345" size="6" maxlength="6" />&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Hora del deposito (coloreado de naranja en la imagen) </td>
              </tr>
              <tr>
                <td><input name="hora" type="text" id="hora" value="hh:mm:ss" size="20" maxlength="85" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Su anuncio </td>
              </tr>
              <tr>
                <td><textarea name="anuncio" cols="40" rows="6" id="anuncio"></textarea>
                &nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><p><input type="submit" name="Submit" value="Enviar" />
                  <span class="Estilo13">&nbsp;(En modo gratuito se le darán solo 100 impresiones) </span></p>                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              
            </table></td>
          </tr>
          <tr>
            <td><img src="../../images/abajo.GIF" alt="" width="758" height="20" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
		<div class="footer">
		  <p><span class="Estilo2"><a href="../../proximamenteh.html">HondurasComecial</a></span> | <a href="../../www.cordobacomercial.com" class="Estilo2">CordobaComercial</a> | <a href="#">InterComercial</a> | <a href="../../www.nova-networks.com.ar">Nova-Networks</a> | <a href="#">OriginaleSystems</a><br />
		  &copy; Copyright 2006 InterComerical Grup</p>
		</div>
	</div>
</body>
</html>
<?
//cerramos el contenido de la pagina
$cntACmp =ob_get_contents();
ob_end_clean();
$cntACmp=str_replace("\n",' ',$cntACmp);
$cntACmp=ereg_replace('[[:space:]]+',' ',$cntACmp);
ob_start("ob_gzhandler");
echo $cntACmp;
ob_end_flush();
?>