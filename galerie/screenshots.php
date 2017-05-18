<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
<meta http-equiv="Content-Language" content="cs">

<link rel=stylesheet type="text/css" href="galerie_style.css">

<title>Galerie - www.w3server.wz.cz</title>
</head>
<body bgcolor="#0C0C0C;">
<?
$max="42";
?>
<center>
<table width="800px" border="0" cellspacing="0" cellpadding="0" bordercolor="#ffffff" background="galerie_soubory/pozadi.gif" >
  <tr>
    <td background="galerie_soubory/vrsek.gif" height="30px"></td>
  </tr>
  <tr>
    <td><h1>Screenshots</h1></td>
  </tr>
  <tr>
    <td height="20px"></td>
  </tr>
  <tr>
    <td background="galerie_soubory/stred.gif" height="9px"></td>
  </tr>
  <tr>
    <td height="10px"></td>
  </tr>
  <tr>
    <td align="center">
      <img src="<? echo "screenshots/screenshot".$o.".jpg" ?>" width="750px" height="563px">
    </td>
  </tr>
  <tr>
    <td height="15px"></td>
  </tr>
  <tr>
    <td background="galerie_soubory/stred.gif" height="9px"></td>
  </tr>
  <tr>
    <td>
      <center>
      <table width="780px" border="0" cellspacing="0" cellpadding="0" bordercolor="#ffffff">
        <tr>
    	  <td height="20px"></td>
  		</tr>
        <tr>
          <td width="80px" align="left" valign="middle">
            <table width="150px" border="0" cellspacing="0" cellpadding="0" bordercolor="#ffffff">
              <tr>
                <td background="galerie_soubory/polozka_menu.gif" width="150px" height="32px" align="center">
                  <a href="screenshots.php?o=<? if ($o=="1"){echo "1";} else {$b=$o-1; echo  $b;} ?>"><<< Předchozí</a>
                </td>
              </tr>
            </table>
          </td>
          <td align="left">
            <img src="<? $z=$o-1; echo "screenshots_nahled/screenshot".$z."_nahled.jpg" ?>" width="80px" height="64px">
          </td>
          <td align="center" class="pocet">
            <?
            echo "Screenshot ".$o." z ".$max;
            ?>
    		</td>
    	  <td align="right">
      		<img src="<? $v=$o+1; echo "screenshots_nahled/screenshot".$v."_nahled.jpg" ?>" width="80px" height="64px">
    	  </td>
    	  <td width="80px" align="right" valign="middle">
    	  	<table width="150px" border="0" cellspacing="0" cellpadding="0" bordercolor="#ffffff">
              <tr>
                <td background="galerie_soubory/polozka_menu.gif" width="150px" height="32px" align="center">
      		       <a href="screenshots.php?o=<? if ($o==$max){echo $max;} else {$b=$o+1; echo  $b;} ?>">Následující >>></a>
    	        </td>
              </tr>
            </table>
    	  </td>
        </tr>
      </table>
      </center>
    </td>
  </tr>
  <tr>
    <td background="galerie_soubory/spodek.gif" height="30px"></td>
  </tr>
</table>
<br>Copyright 2006 | design by Fenix | all rights rezerved / všechna práva vyhrazena
</center>
</body>