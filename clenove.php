<h1>Registrovan� �lenov�</h1>
<table width="400px" border="0"  cellspacing="0" cellpadding="4" class="tabulka">
  <tr>
    <td class="thl" width="100px">Nick</td>
    <td class="thl" width="30px">V�k</td>
    <td class="thl" width="110px">ICQ</td>
    <td class="thl" width="160px">E-mail</td>
  </tr>
    
  <?
  $filename="clenove_tabulka.php";
  $fp=fopen($filename,"r");
  $vypis=fread($fp,filesize ($filename));
  fclose($fp);	  
  
  echo $vypis;
  ?>

</table>
<br>
Chcete v t�to tabulce b�t tak�?&nbsp;&nbsp;&nbsp;&nbsp;<a href="w3.php?s=registrace.php" class="o">Zaregistrujte se</a> 