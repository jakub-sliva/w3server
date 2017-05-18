<h1>Registrovaní èlenové</h1>
<table width="400px" border="0"  cellspacing="0" cellpadding="4" class="tabulka">
  <tr>
    <td class="thl" width="100px">Nick</td>
    <td class="thl" width="30px">Vìk</td>
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
Chcete v této tabulce být také?&nbsp;&nbsp;&nbsp;&nbsp;<a href="w3.php?s=registrace.php" class="o">Zaregistrujte se</a> 