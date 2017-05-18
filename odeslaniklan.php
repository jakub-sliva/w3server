<h1>Potvrzení o odeslání</h1>
<?
$msg1 = $HTTP_POST_VARS['klan'];
$msg2 = $HTTP_POST_VARS['web'];
$msg3 = $HTTP_POST_VARS['popis'];

$message = "\nKlan: ".$msg1.
	   "\nWeb: ".$msg2.
                   "\nPopis: ".$msg3;

if (mail("skokan440@seznam.cz","Nový klan na www.w3server.wz.cz",$message))
{echo "Dìkujeme vám že ste se pøidali k tomuto projectu a pøejeme vám mnoho vyhraných zápasù.<br><br>Váš klan by teï mìl být v sekci klany, prosím zkontrolujte to a pokud ne, napište prosím adminovy pro Warcraft 3.<br><br>";}
else {echo "Dohužel se vám formuláø nepodaøilo odeslat, zkuste to prosím znovu.<br><br>";}



$filename="klan_tabulka.php";

if ($msg1=="") {$msg1=".&nbsp;.&nbsp;.";}
if ($msg2=="") {$msg2=".&nbsp;.&nbsp;.";}
if ($msg3=="") {$msg3=".&nbsp;.&nbsp;.";}

if (is_file($filename)) {} 
else {$fp=fopen($filename,"w+");
fclose($fp);}

$fp=fopen($filename,"a+");
$zapis="
<tr>
  <td class=to2 width=150px>$msg1</td>
  <td class=to2 width=150px>$msg2</td>
  <td class=to2 width=100px>$msg3</td>
</tr>";

fputs($fp,$zapis);
fclose($fp);
?>