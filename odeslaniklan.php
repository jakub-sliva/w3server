<h1>Potvrzen� o odesl�n�</h1>
<?
$msg1 = $HTTP_POST_VARS['klan'];
$msg2 = $HTTP_POST_VARS['web'];
$msg3 = $HTTP_POST_VARS['popis'];

$message = "\nKlan: ".$msg1.
	   "\nWeb: ".$msg2.
                   "\nPopis: ".$msg3;

if (mail("skokan440@seznam.cz","Nov� klan na www.w3server.wz.cz",$message))
{echo "D�kujeme v�m �e ste se p�idali k tomuto projectu a p�ejeme v�m mnoho vyhran�ch z�pas�.<br><br>V� klan by te� m�l b�t v sekci klany, pros�m zkontrolujte to a pokud ne, napi�te pros�m adminovy pro Warcraft 3.<br><br>";}
else {echo "Dohu�el se v�m formul�� nepoda�ilo odeslat, zkuste to pros�m znovu.<br><br>";}



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