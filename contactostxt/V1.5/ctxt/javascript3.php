<? $db = file("../../ctxt/inc/db.txt"); //tomo el archivo db como array ?>
<?
$skin = $db[4];
$width = '410';
$height = '400';
if ($skin == 1)
{
$template = file('../../ctxt/templates/indice.txt'); //tomo el archivo db como array
//abrimos y quirmoas espacios
$width = $template[4];
$width = str_replace("\n",' ',$width);
$width = ereg_replace('[[:space:]]+',' ',$width);
$height = $template[5];
$height = str_replace("\n",' ',$height);
$height = ereg_replace('[[:space:]]+',' ',$height);
}
?>
<!-- Copiar dentro del tag HEAD -->
<SCRIPT LANGUAGE="JavaScript">

<!--
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=<? echo $width; ?>,height=<? echo $height; ?>');");
}
// -->
</script>

