<h1>Potvrzen� o odesl�n�</h1>
<?
$msg1 = $HTTP_POST_VARS['nick'];
$msg2 = $HTTP_POST_VARS['vek'];
$msg3 = $HTTP_POST_VARS['icq'];
$msg4 = $HTTP_POST_VARS['email'];
$msg5 = $HTTP_POST_VARS['poznamka'];

$message = "\nNick: ".$msg1.
	       "\nV�k: ".$msg2.
           "\nICQ: ".$msg3.
           "\nE-mail: ".$msg4.
           "\nPozn�mka: ".$msg5;

$message2 = "D�kujeme v�m �e ste se p�idali k tomuto projectu a p�ejeme v�m mnoho vyhran�ch z�pas�.".
	         "\n\nPokud budete m�t n�jak� dotazy ohledn� str�nek pi�te na ICQ 226-007-365 (Webmaster).".
	         "\nPokud budete m�t n�jak� dotazy ohledn� Warcraft 3  pi�te na ICQ 251-860-372 (Hlavn� admin pro W3).".
	         "\n\nV�mi zadan� �daje p�i registraci: $message".
	         "\n\nTak te� u� sta�� jen hr�t a hr�t.".
	         "\nP��jemnou z�bavu na http://www.w3server.wz.cz v�m p�ej� *Tony440* a *Fenix*";

if ($msg4=="@"){}
   else if ($msg4==""){}
            else  if (mail($msg4,"��dost o �lenstv� na www.w3server.wz.cz",$message2))
            	     {echo "D�kujeme v�m �e ste se p�idali k tomuto projectu a p�ejeme v�m mnoho vyhran�ch z�pas�.<br><br>Pokud jste zadali e-mail, p�ijde v�m na n�j potvrzen� o registraci.<br><br>Va�e jm�no by te� m�lo b�t v sekci �lenov�, pros�m zkontrolujte to a pokud ne, napi�te pros�m adminovy pro Warcraft 3.<br><br>";}
                     else {echo "Dohu�el se v�m formul�� nepoda�ilo odeslat, zkuste to pros�m znovu.<br><br>";}

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