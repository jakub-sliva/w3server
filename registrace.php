<h1>Pøidejte se k nám</h1>
K tomu abyse se staly èleny tohoto projectu, staèí jen vyplnit tento formuláø.<br><br>
Odesláním formuláøe stvrzijete že souhlasíte s <a href="w3.php?s=pravidla.php" class="o">podmínkami projectu</a>.<br><br>
Po odeslání budete zaøezeni do tabulky v sekci èlenové a stanete se tak oficiálnì èlenem tohoto projectu.<br><br>
V pøípadì chybnì, nebo nežádoucnì zadáných registraèních údajù budete vyškrtnuti z tabulky registrovaných èlenù.<br><br>
Pokud nebudete chtít z nìjakého dùvodu vyplnit nìjaké políèko ve formuláøi, ponechejte ho bezezmìny (nevyplòujte).<br><br>
<br>
<h1>Formuláø</h1>
<script language="JavaScript">
function kontrola()
{
	if (window.RegExp)
	{
		znaky=new RegExp("^[^.]+(\.[^.]+)*@([^.]+[.])+[a-z]{2,3}$");
		if (!znaky.test(formular.email.value))
		{
			window.alert("Zadaná adresa není platným e-mailem!");
			formular.email.focus();
			return false;
		}
	}
}
</script>
<form action="w3.php?s=odeslani.php" method="post" name="formular" OnSubmit="return kontrola();">
<table width="400px" border="0" cellspacing="0" cellpadding="5" class="registrace">
  <tr>
    <td align="right" width="100px">
      Nick:
    </td>
    <td>
      <input type="text" name="nick" size=20><font class="zvyrazneni"> (nutné)</font>
    </td>
  </tr>
  <tr>
     <td align="right" width="100px">
       Vìk:
     </td>
     <td>
       <input type="text" name="vek" maxlength="2" size=1>
     </td>
   </tr>
   <tr>
     <td align="right" width="100px">
       ICQ:
     </td>
     <td>
       <input type="text" name="icq" size=20 value="xxx-xxx-xxx" maxlength="11"><font class="zvyrazneni"> (xxx-xxx-xxx)</font>
     </td>
   </tr>
   <tr>
     <td align="right" width="100px">
       E-mail:
     </td>
     <td>
       <input type="text" name="email" size=30 value="@"><font class="zvyrazneni"> (nutné)</font>
     </td>
   </tr>
   <tr>
     <td align="right" width="100px" valign="top">
       Poznámka:
     </td>
     <td>
       <textarea name="poznamka" cols="25" rows="4">
       </textarea>
     </td>
   </tr>
   <tr>
    <td colspan="2">
    </td>
  </tr>
   <tr>
     <td colspan="2" align="center">
       <img src="obrazky/odeslat.gif" alt="odeslat"><input type="submit" name="odeslat" value="    O d e s l a t    ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="reset" name="smazat" value="     S m a z a t     ">
     </td>
   </tr>
 </table>
</form>
