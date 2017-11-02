<?php

@session_start();
if($_SESSION['isloged'] != 'E+2ks3Q-1oER5p7Ytt8UnS5t8'){
	@header("Location: ../blank.php");
	echo "&copy; Originale Systems ::.!";
	exit();
}

$lang = file('lang.txt'); //tomo el archivo db como array


$db = file('db.txt'); //tomo el archivo db como array
$usuario = $db[0]; // tomo valor de usuario
$usuario=str_replace("\n",' ',$usuario);
$usuario=ereg_replace('[[:space:]]+',' ',$usuario);
$pass = $db[1]; // tomo pass y quito espacios
$pass=str_replace("\n",' ',$pass);
$pass=ereg_replace('[[:space:]]+',' ',$pass);
$hex = $db[2]; //quito espacios del color
$hex=str_replace("\n",' ',$hex);
$hex=ereg_replace('[[:space:]]+',' ',$hex);
$titulo = $db[3]; //quito espacios del titulo
$titulo=str_replace("\n",' ',$titulo);
$titulo=ereg_replace('[[:space:]]+',' ',$titulo);
$borde = $db[4]; //quito espacios del borde
$borde=str_replace("\n",' ',$borde);
$borde=ereg_replace('[[:space:]]+',' ',$borde);
$key = $db[5]; //quito espacios del borde
$key=str_replace("\n",' ',$key);
$key=ereg_replace('[[:space:]]+',' ',$key);

if(isset($_POST['hex'])) 
{
$hex = $_POST['hex'];
unlink("db.txt"); //elimino la db
}

//si se postea el pass elimino y cambio el archivo
if(isset($_POST['hex'])) 
{ 
if (@$fp = fopen("db.txt","a")) 
    { 
fwrite($fp,$usuario."\r\n"); // bolcado de usuario
fwrite($fp,$pass."\r\n"); //volcado de contraseña
fwrite($fp,$hex."\r\n");
fwrite($fp,$titulo."\r\n");
fwrite($fp,$borde."\r\n");
fwrite($fp,$key."\r\n");
fclose($fp);
	}
header("Location: mensajes.php?id=3");	
}

?>
<html>
<head>
<title>Contacto TXT v1.0a - &copy; Originale Systems ::.</title>
<script Language="JavaScript">

<!-- begin
  var red=0; green=0; blue=0; hexnum='000000';
  var hexchars='0123456789ABCDEF';

  function toHex (num)
  {
    return hexchars.charAt(num >> 4) + hexchars.charAt(num & 0xF);
  }

  function fromHex (str)
  {
    var first=str.charAt(0);
    var second=str.charAt(1);
    return (16 * hexchars.indexOf(first)) + hexchars.indexOf(second);
  }
  
  function rgb ()
  {
    red=fromHex(hexnum.substring(0,2));
        green=fromHex(hexnum.substring(2,4));
    blue=fromHex(hexnum.substring(4,6));
  }
  
  function indexing ()
  {
    for ( var i=0; i<498; i++ )
        {
          if ( hexnum == document.forms[0].clrname.options[i].value )
            break;
        }
        if ( i==498 ) i--;
        index=i;
  }
  
  function paintit ()
  {
    document.forms[0].clrname.options[index].selected=1;
    document.forms[0].red.value=red;
    document.forms[0].green.value=green;
    document.forms[0].blue.value=blue;
    document.forms[0].hex.value=hexnum;

colorwin=window.open('',hexnum,'toobar=no,location=no,directories=no,status=no,scrollbars=no,resizable=no,copyhistory=no,width=130,height=50');
    colorwin.document.write( '<html><title>' + hexnum + '</title><body bgcolor=#' + hexnum + '></body></html>' );
    colorwin.document.close();
  }

  function inputval ()
  {
    var temp='';
    if ( document.forms[0].takex[1].checked==true )
        {
      hexnum=document.forms[0].hex.value.toUpperCase();
      for ( var i=0; i<=(hexnum.length-1); i++ )
          {
        temp += ( hexchars.indexOf(hexnum.charAt(i)) == -1 ? '0' :
hexnum.charAt(i) );
      }
      if ( hexnum.length < 6 )
          {
        for ( var i=hexnum.length-1; i<=5; i++)
                {
          temp += '0';
        }
      }
      hexnum=temp;
      rgb();
          indexing();
          paintit();
    }
        if ( document.forms[0].takex[0].checked==true )
        {
       with (Math)
           {
          temp=''+round(abs(parseFloat(document.forms[0].red.value)));
          red=( temp=='NaN' ? 0 : temp );
          temp=''+round(abs(parseFloat(document.forms[0].green.value)));
          green=( temp=='NaN' ? 0 : temp );
          temp=''+round(abs(parseFloat(document.forms[0].blue.value)));
          blue=( temp=='NaN' ? 0 : temp );
        }
        if ( red>255 ) red=255;
        if ( green>255 ) green=255;
        if ( blue>255 ) blue=255;
        hexnum= toHex(red) + toHex(green) + toHex(blue);
                indexing();
                paintit();
        }
  }
  
  function inputname ()
  {

hexnum=document.forms[0].clrname.options[document.forms[0].clrname.selectedIndex].value;
    if ( hexnum=='' )
    {
      document.forms[0].red.value='';
          document.forms[0].green.value='';
          document.forms[0].blue.value='';
      document.forms[0].hex.value=hexnum;
          document.forms[0].takex[0].checked=0;
          document.forms[0].takex[1].checked=0;
        } else
          {
            indexing();
            rgb();
                document.forms[0].takex[0].checked=1;
            paintit();
          }
  }
//-- end -->

</script>
</head>
<form action="<? echo $_SERVER['PHP_SELF'];?>" method="post">
<table width="424" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="424">&nbsp;</td>
  </tr>
  <tr>
    <td><? echo $lang[16];?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="424" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="424"><font size="2"><em><? echo $lang[17];?></em></font>
            <select name="clrname" size="1" onChange="inputname()">
              <option value="000000">&nbsp;-----&nbsp;Black&nbsp;&nbsp;-----</option>
              <option value="0000FF">&nbsp;------&nbsp;Blue&nbsp;------</option>
              <option value="F0F8FF">AliceBlue</option>
              <option value="7FFFD4">Aquamarine</option>
              <option value="76EEC6">Aquamarine2</option>
              <option value="66CDAA">Aquamarine3</option>
              <option value="458B74">Aquamarine4</option>
              <option value="F0FFFF">Azure</option>
              <option value="F0FFFF">Azure1</option>
              <option value="E0EEEE">Azure2</option>
              <option value="C1CDCD">Azure3</option>
              <option value="838B8B">Azure4</option>
              <option value="0000EE">Blue2</option>
              <option value="0000CD">Blue3</option>
              <option value="00008B">Blue4</option>
              <option value="8A2BE2">BlueViolet</option>
              <option value="5F9EA0">CadetBlue</option>
              <option value="98F5FF">CadetBlue1</option>
              <option value="8EE5EE">CadetBlue2</option>
              <option value="7AC5CD">CadetBlue3</option>
              <option value="53868B">CadetBlue4</option>
              <option value="6495ED">CornflowerBlue</option>
              <option value="00FFFF">Cyan</option>
              <option value="00EEEE">Cyan2</option>
              <option value="00CDCD">Cyan3</option>
              <option value="008B8B">Cyan4</option>
              <option value="483D8B">DarkSlateBlue</option>
              <option value="00CED1">DarkTurquoise</option>
              <option value="00BFFF">DeepSkyBlue</option>
              <option value="00B2EE">DeepSkyBlue2</option>
              <option value="009ACD">DeepSkyBlue3</option>
              <option value="00688B">DeepSkyBlue4</option>
              <option value="1E90FF">DodgerBlue</option>
              <option value="1C86EE">DodgerBlue2</option>
              <option value="1874CD">DodgerBlue3</option>
              <option value="104E8B">DodgerBlue4</option>
              <option value="ADD8E6">LightBlue</option>
              <option value="BFEFFF">LightBlue1</option>
              <option value="B2DFEE">LightBlue2</option>
              <option value="9AC0CD">LightBlue3</option>
              <option value="68838B">LightBlue4</option>
              <option value="E0FFFF">LightCyan</option>
              <option value="D1EEEE">LightCyan2</option>
              <option value="B4CDCD">LightCyan3</option>
              <option value="7A8B8B">LightCyan4</option>
              <option value="87CEFA">LightSkyBlue</option>
              <option value="B0E2FF">LightSkyBlue1</option>
              <option value="A4D3EE">LightSkyBlue2</option>
              <option value="8DB6CD">LightSkyBlue3</option>
              <option value="607B8B">LightSkyBlue4</option>
              <option value="8470FF">LightSlateBlue</option>
              <option value="B0C4DE">LightSteelBlue</option>
              <option value="CAE1FF">LightSteelBlue1</option>
              <option value="BCD2EE">LightSteelBlue2</option>
              <option value="A2B5CD">LightSteelBlue3</option>
              <option value="6E7B8B">LightSteelBlue4</option>
              <option value="66CDAA">MediumAquamarine</option>
              <option value="0000CD">MediumBlue</option>
              <option value="7B68EE">MediumSlateBlue</option>
              <option value="48D1CC">MediumTurquoise</option>
              <option value="191970">MidnightBlue</option>
              <option value="000080">NavyBlue</option>
              <option value="AFEEEE">PaleTurquoise</option>
              <option value="BBFFFF">PaleTurquoise1</option>
              <option value="AEEEEE">PaleTurquoise2</option>
              <option value="96CDCD">PaleTurquoise3</option>
              <option value="668B8B">PaleTurquoise4</option>
              <option value="B0E0E6">PowderBlue</option>
              <option value="4169E1">RoyalBlue</option>
              <option value="4876FF">RoyalBlue1</option>
              <option value="436EEE">RoyalBlue2</option>
              <option value="3A5FCD">RoyalBlue3</option>
              <option value="27408B">RoyalBlue4</option>
              <option value="87CEEB">SkyBlue</option>
              <option value="87CEFF">SkyBlue1</option>
              <option value="7EC0EE">SkyBlue2</option>
              <option value="6CA6CD">SkyBlue3</option>
              <option value="4A708B">SkyBlue4</option>
              <option value="6A5ACD">SlateBlue</option>
              <option value="836FFF">SlateBlue1</option>
              <option value="7A67EE">SlateBlue2</option>
              <option value="6959CD">SlateBlue3</option>
              <option value="473C8B">SlateBlue4</option>
              <option value="4682B4">SteelBlue</option>
              <option value="63B8FF">SteelBlue1</option>
              <option value="5CACEE">SteelBlue2</option>
              <option value="4F94CD">SteelBlue3</option>
              <option value="36648B">SteelBlue4</option>
              <option value="40E0D0">Turquoise</option>
              <option value="00F5FF">Turquoise1</option>
              <option value="00E5EE">Turquoise2</option>
              <option value="00C5CD">Turquoise3</option>
              <option value="00868B">Turquoise4</option>
              <option value="A52A2A">&nbsp;-----&nbsp;Brown&nbsp;&nbsp;-----</option>
              <option value="F5F5DC">Beige</option>
              <option value="FF4040">Brown1</option>
              <option value="EE3B3B">Brown2</option>
              <option value="CD3333">Brown3</option>
              <option value="8B2323">Brown4</option>
              <option value="DEB887">Burlywood</option>
              <option value="FFD39B">Burlywood1</option>
              <option value="EEC591">Burlywood2</option>
              <option value="CDAA7D">Burlywood3</option>
              <option value="8B7355">Burlywood4</option>
              <option value="D2691E">Chocolate</option>
              <option value="FF7F24">Chocolate1</option>
              <option value="EE7621">Chocolate2</option>
              <option value="CD661D">Chocolate3</option>
              <option value="8B4513">Chocolate4</option>
              <option value="CD853F">Peru</option>
              <option value="BC8F8F">RosyBrown</option>
              <option value="FFC1C1">RosyBrown1</option>
              <option value="EEB4B4">RosyBrown2</option>
              <option value="CD9B9B">RosyBrown3</option>
              <option value="8B6969">RosyBrown4</option>
              <option value="8B4513">SaddleBrown</option>
              <option value="F4A460">SandyBrown</option>
              <option value="D2B48C">Tan</option>
              <option value="FFA54F">Tan1</option>
              <option value="EE9A49">Tan2</option>
              <option value="CD853F">Tan3</option>
              <option value="8B5A2B">Tan4</option>
              <option value="BEBEBE">&nbsp;------&nbsp;Gray&nbsp;------</option>
              <option value="2F4F4F">DarkSlateGray</option>
              <option value="97FFFF">DarkSlateGray1</option>
              <option value="8DEEEE">DarkSlateGray2</option>
              <option value="79CDCD">DarkSlateGray3</option>
              <option value="528B8B">DarkSlateGray4</option>
              <option value="696969">DimGray</option>
              <option value="030303">Gray1</option>
              <option value="050505">Gray2</option>
              <option value="080808">Gray3</option>
              <option value="0A0A0A">Gray4</option>
              <option value="0D0D0D">Gray5</option>
              <option value="0F0F0F">Gray6</option>
              <option value="121212">Gray7</option>
              <option value="141414">Gray8</option>
              <option value="171717">Gray9</option>
              <option value="1A1A1A">Gray10</option>
              <option value="1C1C1C">Gray11</option>
              <option value="1F1F1F">Gray12</option>
              <option value="212121">Gray13</option>
              <option value="242424">Gray14</option>
              <option value="262626">Gray15</option>
              <option value="292929">Gray16</option>
              <option value="2B2B2B">Gray17</option>
              <option value="2E2E2E">Gray18</option>
              <option value="303030">Gray19</option>
              <option value="333333">Gray20</option>
              <option value="363636">Gray21</option>
              <option value="383838">Gray22</option>
              <option value="3B3B3B">Gray23</option>
              <option value="3D3D3D">Gray24</option>
              <option value="404040">Gray25</option>
              <option value="424242">Gray26</option>
              <option value="454545">Gray27</option>
              <option value="474747">Gray28</option>
              <option value="4A4A4A">Gray29</option>
              <option value="4D4D4D">Gray30</option>
              <option value="4F4F4F">Gray31</option>
              <option value="525252">Gray32</option>
              <option value="545454">Gray33</option>
              <option value="575757">Gray34</option>
              <option value="595959">Gray35</option>
              <option value="5C5C5C">Gray36</option>
              <option value="5E5E5E">Gray37</option>
              <option value="616161">Gray38</option>
              <option value="636363">Gray39</option>
              <option value="666666">Gray40</option>
              <option value="696969">Gray41</option>
              <option value="6B6B6B">Gray42</option>
              <option value="6E6E6E">Gray43</option>
              <option value="707070">Gray44</option>
              <option value="737373">Gray45</option>
              <option value="757575">Gray46</option>
              <option value="787878">Gray47</option>
              <option value="7A7A7A">Gray48</option>
              <option value="7D7D7D">Gray49</option>
              <option value="7F7F7F">Gray50</option>
              <option value="828282">Gray51</option>
              <option value="858585">Gray52</option>
              <option value="878787">Gray53</option>
              <option value="8A8A8A">Gray54</option>
              <option value="8C8C8C">Gray55</option>
              <option value="8F8F8F">Gray56</option>
              <option value="919191">Gray57</option>
              <option value="949494">Gray58</option>
              <option value="969696">Gray59</option>
              <option value="999999">Gray60</option>
              <option value="9C9C9C">Gray61</option>
              <option value="9E9E9E">Gray62</option>
              <option value="A1A1A1">Gray63</option>
              <option value="A3A3A3">Gray64</option>
              <option value="A6A6A6">Gray65</option>
              <option value="A8A8A8">Gray66</option>
              <option value="ABABAB">Gray67</option>
              <option value="ADADAD">Gray68</option>
              <option value="B0B0B0">Gray69</option>
              <option value="B3B3B3">Gray70</option>
              <option value="B5B5B5">Gray71</option>
              <option value="B8B8B8">Gray72</option>
              <option value="BABABA">Gray73</option>
              <option value="BDBDBD">Gray74</option>
              <option value="BFBFBF">Gray75</option>
              <option value="C2C2C2">Gray76</option>
              <option value="C4C4C4">Gray77</option>
              <option value="C7C7C7">Gray78</option>
              <option value="C9C9C9">Gray79</option>
              <option value="CCCCCC">Gray80</option>
              <option value="CFCFCF">Gray81</option>
              <option value="D1D1D1">Gray82</option>
              <option value="D4D4D4">Gray83</option>
              <option value="D6D6D6">Gray84</option>
              <option value="D9D9D9">Gray85</option>
              <option value="DBDBDB">Gray86</option>
              <option value="DEDEDE">Gray87</option>
              <option value="E0E0E0">Gray88</option>
              <option value="E3E3E3">Gray89</option>
              <option value="E5E5E5">Gray90</option>
              <option value="E8E8E8">Gray91</option>
              <option value="EBEBEB">Gray92</option>
              <option value="EDEDED">Gray93</option>
              <option value="F0F0F0">Gray94</option>
              <option value="F2F2F2">Gray95</option>
              <option value="F5F5F5">Gray96</option>
              <option value="F7F7F7">Gray97</option>
              <option value="FAFAFA">Gray98</option>
              <option value="FCFCFC">Gray99</option>
              <option value="D3D3D3">LightGray</option>
              <option value="778899">LightSlateGray</option>
              <option value="708090">SlateGray</option>
              <option value="C6E2FF">SlateGray1</option>
              <option value="B9D3EE">SlateGray2</option>
              <option value="9FB6CD">SlateGray3</option>
              <option value="6C7B8B">SlateGray4</option>
              <option value="00FF00">&nbsp;-----&nbsp;Green&nbsp;&nbsp;-----</option>
              <option value="7FFF00">Chartreuse</option>
              <option value="76EE00">Chartreuse2</option>
              <option value="66CD00">Chartreuse3</option>
              <option value="458B00">Chartreuse4</option>
              <option value="006400">DarkGreen</option>
              <option value="BDB76B">DarkKhaki</option>
              <option value="556B2F">DarkOliveGreen</option>
              <option value="CAFF70">DarkOliveGreen1</option>
              <option value="BCEE68">DarkOliveGreen2</option>
              <option value="A2CD5A">DarkOliveGreen3</option>
              <option value="6E8B3D">DarkOliveGreen4</option>
              <option value="8FBC8F">DarkSeaGreen</option>
              <option value="C1FFC1">DarkSeaGreen1</option>
              <option value="B4EEB4">DarkSeaGreen2</option>
              <option value="9BCD9B">DarkSeaGreen3</option>
              <option value="698B69">DarkSeaGreen4</option>
              <option value="228B22">ForestGreen</option>
              <option value="ADFF2F">GreenYellow</option>
              <option value="F0E68C">Khaki</option>
              <option value="FFF68F">Khaki1</option>
              <option value="EEE685">Khaki2</option>
              <option value="CDC673">Khaki3</option>
              <option value="8B864E">Khaki4</option>
              <option value="7CFC00">LawnGreen</option>
              <option value="20B2AA">LightSeaGreen</option>
              <option value="32CD32">LimeGreen</option>
              <option value="3CB371">MediumSeaGreen</option>
              <option value="00FA9A">MediumSpringGreen</option>
              <option value="F5FFFA">MintCream</option>
              <option value="6B8E23">OliveDrab</option>
              <option value="C0FF3E">OliveDrab1</option>
              <option value="B3EE3A">OliveDrab2</option>
              <option value="9ACD32">OliveDrab3</option>
              <option value="698B22">OliveDrab4</option>
              <option value="98FB98">PaleGreen</option>
              <option value="9AFF9A">PaleGreen1</option>
              <option value="90EE90">PaleGreen2</option>
              <option value="7CCD7C">PaleGreen3</option>
              <option value="548B54">PaleGreen4</option>
              <option value="2E8B57">SeaGreen</option>
              <option value="54FF9F">SeaGreen1</option>
              <option value="4EEE94">SeaGreen2</option>
              <option value="43CD80">SeaGreen3</option>
              <option value="2E8B57">SeaGreen4</option>
              <option value="00FF7F">SpringGreen</option>
              <option value="00EE76">SpringGreen2</option>
              <option value="00CD66">SpringGreen3</option>
              <option value="008B45">SpringGreen4</option>
              <option value="9ACD32">YellowGreen</option>
              <option value="FFA499">&nbsp;-----&nbsp;Orange&nbsp;-----</option>
              <option value="FFE4C4">Bisque</option>
              <option value="EED5B7">Bisque2</option>
              <option value="CDB79E">Bisque3</option>
              <option value="8B7D6B">Bisque4</option>
              <option value="FF7F50">Coral</option>
              <option value="FF7256">Coral1</option>
              <option value="EE6A50">Coral2</option>
              <option value="CD5B45">Coral3</option>
              <option value="8B3E2F">Coral4</option>
              <option value="FF8C00">DarkOrange</option>
              <option value="FF7F00">DarkOrange1</option>
              <option value="EE7600">DarkOrange2</option>
              <option value="CD6600">DarkOrange3</option>
              <option value="8B4499">DarkOrange4</option>
              <option value="E9967A">DarkSalmon</option>
              <option value="F0FFF0">Honeydew</option>
              <option value="E0EEE0">Honeydew2</option>
              <option value="C1CDC1">Honeydew3</option>
              <option value="838B83">Honeydew4</option>
              <option value="F08080">LightCoral</option>
              <option value="FFA07A">LightSalmon</option>
              <option value="EE9572">LightSalmon2</option>
              <option value="CD8162">LightSalmon3</option>
              <option value="8B5742">LightSalmon4</option>
              <option value="EE9A00">Orange2</option>
              <option value="CD8499">Orange3</option>
              <option value="8B5A00">Orange4</option>
              <option value="FFDAB9">PeachPuff</option>
              <option value="EECBAD">PeachPuff2</option>
              <option value="CDAF95">PeachPuff3</option>
              <option value="8B7765">PeachPuff4</option>
              <option value="FA8072">Salmon</option>
              <option value="FF8C69">Salmon1</option>
              <option value="EE8262">Salmon2</option>
              <option value="CD7054">Salmon3</option>
              <option value="8B4C39">Salmon4</option>
              <option value="A0522D">Sienna</option>
              <option value="FF8247">Sienna1</option>
              <option value="EE7942">Sienna2</option>
              <option value="CD6839">Sienna3</option>
              <option value="8B4726">Sienna4</option>
              <option value="FF0000">&nbsp;------&nbsp;Red&nbsp;&nbsp;------</option>
              <option value="FF1493">DeepPink</option>
              <option value="EE1289">DeepPink2</option>
              <option value="CD1076">DeepPink3</option>
              <option value="8B0A50">DeepPink4</option>
              <option value="B22222">FireBrick</option>
              <option value="FF3030">FireBrick1</option>
              <option value="EE2C2C">Firebrick2</option>
              <option value="CD2626">Firebrick3</option>
              <option value="8B1A1A">Firebrick4</option>
              <option value="FF69B4">HotPink</option>
              <option value="EE6AA7">HotPink2</option>
              <option value="CD6090">HotPink3</option>
              <option value="8B3A62">HotPink4</option>
              <option value="CD5C5C">IndianRed</option>
              <option value="FF6A6A">IndianRed1</option>
              <option value="EE6363">IndianRed2</option>
              <option value="CD5555">IndianRed3</option>
              <option value="8B3A3A">IndianRed4</option>
              <option value="FFB6C1">LightPink</option>
              <option value="FFAEB9">LightPink1</option>
              <option value="EEA2AD">LightPink2</option>
              <option value="CD8C95">LightPink3</option>
              <option value="8B5F65">LightPink4</option>
              <option value="C71585">MediumVioletRed</option>
              <option value="FFE4E1">MistyRose</option>
              <option value="EED5D2">MistyRose2</option>
              <option value="CDB7B5">MistyRose3</option>
              <option value="8B7D7B">MistyRose4</option>
              <option value="FF4499">OrangeRed</option>
              <option value="EE4000">OrangeRed2</option>
              <option value="CD3700">OrangeRed3</option>
              <option value="8B2499">OrangeRed4</option>
              <option value="DB7093">PaleVioletRed</option>
              <option value="FF82AB">PaleVioletRed1</option>
              <option value="EE799F">PaleVioletRed2</option>
              <option value="CD6889">PaleVioletRed3</option>
              <option value="8B475D">PaleVioletRed4</option>
              <option value="FF6347">Tomato</option>
              <option value="EE5C42">Tomato2</option>
              <option value="CD4F39">Tomato3</option>
              <option value="8B3626">Tomato4</option>
              <option value="D02090">VioletRed</option>
              <option value="FF3E96">VioletRed1</option>
              <option value="EE3A8C">VioletRed2</option>
              <option value="CD3278">VioletRed3</option>
              <option value="8B2252">VioletRed4</option>
              <option value="9932CC">DarkOrchid</option>
              <option value="BF3EFF">DarkOrchid1</option>
              <option value="B23AEE">DarkOrchid2</option>
              <option value="9A32CD">DarkOrchid3</option>
              <option value="68228B">DarkOrchid4</option>
              <option value="9400D3">DarkViolet</option>
              <option value="E6E6FA">Lavender</option>
              <option value="FFF0F5">LavenderBlush</option>
              <option value="EEE0E5">LavenderBlush2</option>
              <option value="CDC1C5">LavenderBlush3</option>
              <option value="8B8386">LavenderBlush4</option>
              <option value="FF00FF">Magenta</option>
              <option value="EE00EE">Magenta2</option>
              <option value="CD00CD">Magenta3</option>
              <option value="8B008B">Magenta4</option>
              <option value="B03060">Maroon</option>
              <option value="FF34B3">Maroon1</option>
              <option value="EE30A7">Maroon2</option>
              <option value="CD2990">Maroon3</option>
              <option value="8B1C62">Maroon4</option>
              <option value="BA55D3">MediumOrchid</option>
              <option value="E066FF">MediumOrchid1</option>
              <option value="D15FEE">MediumOrchid2</option>
              <option value="B452CD">MediumOrchid3</option>
              <option value="7A378B">MediumOrchid4</option>
              <option value="9370DB">MediumPurple</option>
              <option value="AB82FF">MediumPurple1</option>
              <option value="9F79EE">MediumPurple2</option>
              <option value="8968CD">MediumPurple3</option>
              <option value="5D478B">MediumPurple4</option>
              <option value="DA70D6">Orchid</option>
              <option value="FF83FA">Orchid1</option>
              <option value="EE7AE9">Orchid2</option>
              <option value="CD69C9">Orchid3</option>
              <option value="8B4789">Orchid4</option>
              <option value="DDA0DD">Plum</option>
              <option value="FFBBFF">Plum1</option>
              <option value="EEAEEE">Plum2</option>
              <option value="CD96CD">Plum3</option>
              <option value="8B668B">Plum4</option>
              <option value="A020F0">Purple</option>
              <option value="9B30FF">Purple1</option>
              <option value="912CEE">Purple2</option>
              <option value="7D26CD">Purple3</option>
              <option value="551A8B">Purple4</option>
              <option value="D8BFD8">Thistle</option>
              <option value="FFE1FF">Thistle1</option>
              <option value="EED2EE">Thistle2</option>
              <option value="CDB5CD">Thistle3</option>
              <option value="8B7B8B">Thistle4</option>
              <option value="FFFFFF">&nbsp;-----&nbsp;White&nbsp;&nbsp;-----</option>
              <option value="FAEBD7">AntiqueWhite</option>
              <option value="FFEFDB">AntiqueWhite1</option>
              <option value="EEDFCC">AntiqueWhite2</option>
              <option value="CDC0B0">AntiqueWhite3</option>
              <option value="8B8378">AntiqueWhite4</option>
              <option value="FFFAF0">FloralWhite</option>
              <option value="DCDCDC">Gainsboro</option>
              <option value="F8F8FF">GhostWhite</option>
              <option value="FFFFF0">Ivory</option>
              <option value="EEEEE0">Ivory2</option>
              <option value="CDCDC1">Ivory3</option>
              <option value="8B8B83">Ivory4</option>
              <option value="FAF0E6">Linen</option>
              <option value="FFDEAD">NavajoWhite</option>
              <option value="EECFA1">NavajoWhite2</option>
              <option value="CDB38B">NavajoWhite3</option>
              <option value="8B795E">NavajoWhite4</option>
              <option value="FDF5E6">OldLace</option>
              <option value="FFF5EE">Seashell</option>
              <option value="EEE5DE">Seashell2</option>
              <option value="CDC5BF">Seashell3</option>
              <option value="8B8682">Seashell4</option>
              <option value="FFFAFA">Snow</option>
              <option value="EEE9E9">Snow2</option>
              <option value="CDC9C9">Snow3</option>
              <option value="8B8989">Snow4</option>
              <option value="F5DEB3">Wheat</option>
              <option value="FFE7BA">Wheat1</option>
              <option value="EED8AE">Wheat2</option>
              <option value="CDBA96">Wheat3</option>
              <option value="8B7E66">Wheat4</option>
              <option value="F5F5F5">WhiteSmoke</option>
              <option value="FFFF00">&nbsp;-----&nbsp;Yellow&nbsp;-----</option>
              <option value="FFEBCD">BlanchedAlmond</option>
              <option value="FFF8DC">Cornsilk</option>
              <option value="EEE8CD">Cornsilk2</option>
              <option value="CDC8B1">Cornsilk3</option>
              <option value="8B8878">Cornsilk4</option>
              <option value="B8860B">DarkGoldenrod</option>
              <option value="FFB90F">DarkGoldenrod1</option>
              <option value="EEAD0E">DarkGoldenrod2</option>
              <option value="CD950C">DarkGoldenrod3</option>
              <option value="8B6508">DarkGoldenrod4</option>
              <option value="FFD700">Gold</option>
              <option value="EEC900">Gold2</option>
              <option value="CDAD00">Gold3</option>
              <option value="8B7499">Gold4</option>
              <option value="DAA520">Goldenrod</option>
              <option value="FFC125">Goldenrod1</option>
              <option value="EEB422">Goldenrod2</option>
              <option value="CD9B1D">Goldenrod3</option>
              <option value="8B6914">Goldenrod4</option>
              <option value="FFFACD">LemonChiffon</option>
              <option value="EEE9BF">LemonChiffon2</option>
              <option value="CDC9A5">LemonChiffon3</option>
              <option value="8B8970">LemonChiffon4</option>
              <option value="EEDD82">LightGoldenrod</option>
              <option value="FFEC8B">LightGoldenrod1</option>
              <option value="EEDC82">LightGoldenrod2</option>
              <option value="CDBE70">LightGoldenrod3</option>
              <option value="8B814C">LightGoldenrod4</option>
              <option value="FAFAD2">LightGoldenrodYellow</option>
              <option value="FFFFE0">LightYellow</option>
              <option value="EEEED1">LightYellow2</option>
              <option value="CDCDB4">LightYellow3</option>
              <option value="8B8B7A">LightYellow4</option>
              <option value="FFE4B5">Moccasin</option>
              <option value="EEE8AA">PaleGoldenrod</option>
              <option value="FFEFD5">PapayaWhip</option>
              <option value="EEEE00">Yellow2</option>
              <option value="CDCD00">Yellow3</option>
              <option value="8B8B00">Yellow4</option>
              <option value="Value"></option>
            </select>        </td>
        </tr>
      <tr>
        <td><font size="2"><em><? echo $lang[18];?></em></font><b>
          <input type="radio" name="takex" checked="checked" onClick="javascrip:document.forms[0].red.focus()" />
          <font size="2">:</font>
          <input type="text" name="red" size="3" maxlength="3" value="0" onFocus="javascript:document.forms[0].takex[0].checked=1" />
          <font size="2">/ </font>
          <input type="text" name="green" size="3" maxlength="3" value="0" onFocus="javascript:document.forms[0].takex[0].checked=1" />
          <font size="2">/ </font>
          <input type="text" name="blue" size="3" maxlength="3" value="0" onFocus="javascript:document.forms[0].takex[0].checked=1" />
          </b><font size="2"><em>Hex</em></font><b>
          <input type="radio" name="takex" onClick="javascript:document.forms[0].hex.focus()" />
          <font size="2">:</font></b>
          <input type="text" name="hex" size="6" maxlength="6" value="000000" onFocus="javascript:document.forms[0].takex[1].checked=1" /></td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td><input type="submit" name="Submit" value="<? echo $lang[22];?>">      <label></label></td>
    </tr>
</table>
</form>
</html>

