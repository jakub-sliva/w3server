<h1>Klany</h1>
<table width="400px" border="0"  cellspacing="0" cellpadding="4" class="tabulka">
  <tr>
    <td class="thl" width="150px">Klan</td>
    <td class="thl" width="150px">Web klanu</td>
    <td class="thl" width="100px">Popis</td>
  </tr>
    
  <?
  $filename="klan_tabulka.php";
  $fp=fopen($filename,"r");
  $vypis=fread($fp,filesize ($filename));
  fclose($fp);	  
  
  echo $vypis;
  ?>

</table>
<br><br>

<center><a href="w3.php?s=registrace_klan.php" class="o">Registrovat klan</a></center><br><br>

Kterýkoliv klan mùže zaslat info o sobì a mi mu vytvoøíme podstráku s informacemi.<br>