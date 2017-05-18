<h1>Potvrzení o odeslání</h1>
<?
$msg1 = $HTTP_POST_VARS['nick'];
$msg2 = $HTTP_POST_VARS['vek'];
$msg3 = $HTTP_POST_VARS['icq'];
$msg4 = $HTTP_POST_VARS['email'];
$msg5 = $HTTP_POST_VARS['poznamka'];

$message = "\nNick: ".$msg1.
	       "\nVìk: ".$msg2.
           "\nICQ: ".$msg3.
           "\nE-mail: ".$msg4.
           "\nPoznámka: ".$msg5;

$message2 = "Dìkujeme vám že ste se pøidali k tomuto projectu a pøejeme vám mnoho vyhraných zápasù.".
	         "\n\nPokud budete mít nìjaké dotazy ohlednì stránek pište na ICQ 226-007-365 (Webmaster).".
	         "\nPokud budete mít nìjaké dotazy ohlednì Warcraft 3  pište na ICQ 251-860-372 (Hlavní admin pro W3).".
	         "\n\nVámi zadané ùdaje pøi registraci: $message".
	         "\n\nTak teï už staèí jen hrát a hrát.".
	         "\nPøíjemnou zábavu na http://www.w3server.wz.cz vám pøejí *Tony440* a *Fenix*";

if ($msg4=="@"){}
   else if ($msg4==""){}
            else  if (mail($msg4,"Žádost o èlenství na www.w3server.wz.cz",$message2))
            	     {echo "Dìkujeme vám že ste se pøidali k tomuto projectu a pøejeme vám mnoho vyhraných zápasù.<br><br>Pokud jste zadali e-mail, pøijde vám na nìj potvrzení o registraci.<br><br>Vaše jméno by teï mìlo být v sekci èlenové, prosím zkontrolujte to a pokud ne, napište prosím adminovy pro Warcraft 3.<br><br>";}
                     else {echo "Dohužel se vám formuláø nepodaøilo odeslat, zkuste to prosím znovu.<br><br>";}

$filename="clenove_tabulka.php";

if ($msg1=="") {$msg1=".&nbsp;.&nbsp;.";}
if ($msg2=="") {$msg2=".&nbsp;.&nbsp;.";}
if ($msg3=="xxx-xxx-xxx") {$msg3=".&nbsp;.&nbsp;.";}
if ($msg3=="") {$msg3=".&nbsp;.&nbsp;.";}
if ($msg4=="@") {$msg4=".&nbsp;.&nbsp;.";}
if ($msg4=="") {$msg4=".&nbsp;.&nbsp;.";}

if (is_file($filename)) {} 
else {$fp=fopen($filename,"w+");
fclose($fp);}

$fp=fopen($filename,"a+");
$zapis="
<tr>
  <td class=to2 width=100px>$msg1</td>
  <td class=to2 width=30px>$msg2</td>
  <td class=to2 width=110px>$msg3</td>
  <td class=to width=160px><a href=mailto:$msg4?subject=w3server.wz.cz class=obsah>$msg4</a></td>
</tr>";

fputs($fp,$zapis);
fclose($fp);
?>