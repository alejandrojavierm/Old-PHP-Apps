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
.Estilo15 {color: #009900}
.Estilo16 {color: #FF9900}
.Estilo17 {color: #FF0000; font-weight: bold; }
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
                </span><span class="Estilo1">Has esta pagina la <a class="Estilo2" href="../../index.php" onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://address-to-your-site.com');" style="CURSOR: hand">Principal</a> de tu navegador</span></p>
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
	  <form action='proceso.php' method='post'>
	  
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
                <td colspan="2"><div align="center" class="Estilo13">
                  <div align="left"><span class="Estilo15"><strong>Lea detenidamente</strong>: Los clasificados <strong><em>gratuitos se publican a un monto equivalente a $2 (solo llene los dos primeros casilleros y el anuncio) </em></strong>, por cada <strong>$1</strong> que ud pague se se otorgara <strong>100 impresiones</strong>, así usted es el que decide cuanta gente lo vera... además le regalamos <strong>200 </strong>impresiones más.</span> <span class="Estilo16">Para ver el papel que debera imprimir para realizar el pago haga click</span> <span class="Estilo13"><a href="formulario.html" target="_blank">AQUI</a></span> </div>
                </div></td>
              </tr>
              <tr>
                <td width="357" rowspan="17"><img src="pagofacil.jpg" alt="" width="357" height="367" /></td>
                <td width="345"><p>&nbsp;</p>                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><label></label>
                <div align="center"><span class="Estilo17">SU ANUNCIO SE ENVIO </span></div></td>
              </tr>
              <tr>
                <td><div align="center" class="Estilo1">Tendra que esperar entre 12-24hrs, que sea autorizado.</div></td>
              </tr>
              <tr>
                <td><div align="center" class="Estilo1"></div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><p>&nbsp;</p>                </td>
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