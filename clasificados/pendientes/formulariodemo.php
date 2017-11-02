<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <style type="text/css">
<!--
.Estilo3 {color: #FF0000}
-->
    </style>
</head>

<body>
<form action='proceso.php' method='post'>
<table width="526" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="526"><strong>Agregar Clasificado  (<span class="Estilo3">Peligro!</span> no deje lugares vacios): </strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><label>
    <input name="cyber" type="hidden" id="cyber" value="cyber: 123" />
    </label></td>
  </tr>
  <tr>
    <td>Nombre y apellido   :
      <label>
      <input name="nombre" type="text" id="nombre" value="Nombre Apellido" size="85" maxlength="85" />
      </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>E-mail  :
      <label>
      <input name="email" type="text" id="email" value="@mimail.com" size="85" maxlength="85" />
      </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Codigo pagofacil  :
      <label>
      <input name="pagofacil" type="text" id="pagofacil" size="85" maxlength="80" />
      </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Su anuncio  :
      <label>
      <textarea name="anuncio" cols="80" rows="6" id="anuncio"></textarea>
      </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
      <div align="center">
        <input type="submit" name="Submit" value="Añadir" />
        </div></td></tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
