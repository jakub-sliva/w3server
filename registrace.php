<h1>P�idejte se k n�m</h1>
K tomu abyse se staly �leny tohoto projectu, sta�� jen vyplnit tento formul��.<br><br>
Odesl�n�m formul��e stvrzijete �e souhlas�te s <a href="w3.php?s=pravidla.php" class="o">podm�nkami projectu</a>.<br><br>
Po odesl�n� budete za�ezeni do tabulky v sekci �lenov� a stanete se tak ofici�ln� �lenem tohoto projectu.<br><br>
V p��pad� chybn�, nebo ne��doucn� zad�n�ch registra�n�ch �daj� budete vy�krtnuti z tabulky registrovan�ch �len�.<br><br>
Pokud nebudete cht�t z n�jak�ho d�vodu vyplnit n�jak� pol��ko ve formul��i, ponechejte ho bezezm�ny (nevypl�ujte).<br><br>
<br>
<h1>Formul��</h1>
<script language="JavaScript">
function kontrola()
{
	if (window.RegExp)
	{
		znaky=new RegExp("^[^.]+(\.[^.]+)*@([^.]+[.])+[a-z]{2,3}$");
		if (!znaky.test(formular.email.value))
		{
			window.alert("Zadan� adresa nen� platn�m e-mailem!");
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
      <input type="text" name="nick" size=20><font class="zvyrazneni"> (nutn�)</font>
    </td>
  </tr>
  <tr>
     <td align="right" width="100px">
       V�k:
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
       <input type="text" name="email" size=30 value="@"><font class="zvyrazneni"> (nutn�)</font>
     </td>
   </tr>
   <tr>
     <td align="right" width="100px" valign="top">
       Pozn�mka:
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
