<h1>Screenshots</h1>
<center>
  <table width="400px" border="0" cellspacing="0" cellpadding="0" class="registrace">
    <?
      //Zadej celkov� po�et screenshotu.
      $pocet=42;
      
      //Popisky a auto�i.
      $popis=array();
      $popis[1]="D�kaldn� obran�<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[2]="Neviditeln� pavouk 1<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[3]="Neviditeln� pavouk 2<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[4]="Neviditeln� pavouk 3<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[5]="Auto�i<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[6]="P�n d�su<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[7]="P�n d�su - skok<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[8]="Hrdinov� nemrtv�ch<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[9]="M�sto<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[10]="Celkov� sk�re<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[11]="Hrdinov� ork� 1<br><font class=zvyrazneni>Autor: </font>Sargoth";
      $popis[12]="Hrdinov� ork� 2<br><font class=zvyrazneni>Autor: </font>Sargoth";
      $popis[13]="V� zni�ena<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[14]="Trochu v�t�� arm�da<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[15]="Arm�da kostlivc�<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[16]="M�sto - *Fenix*<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[17]="M�sto - Alakazam<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[18]="Celkov� sk�re<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[19]="Sk�re za hrdiny<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[20]="*Fenix* + *Tony440* vs. PC<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[21]="Masakr<br><font class=zvyrazneni>Autor: </font>Sargoth";
      $popis[22]="Teleport<br><font class=zvyrazneni>Autor: </font>Sargoth";
      $popis[23]="Vytun�n� hero<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[24]="Sk�re DotA<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[25]="Nesmrteln� Hero<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[26]="Jasn� prohra<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[27]="Sk�re *Fenix*<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[28]="Tak sme to vyhrali<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[29]="Fenix�v hero<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[30]="Tonyho hero<br><font class=zvyrazneni>Autor: </font>*Tony440*";
      $popis[31]="Souboj<br><font class=zvyrazneni>Autor: </font>*Tony440*";
      $popis[32]="Good Like<br><font class=zvyrazneni>Autor: </font>*Tony440*";
      $popis[33]="P�kn� skill<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[34]="Vytun�n� Sven<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[35]="Dva kon�ci<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[36]="P�kn� sk�re<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[37]="Fenix vs. Exi<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[38]="Damage!!<br><font class=zvyrazneni>Autor: </font>Martin �ern�";
      $popis[39]="Mortred<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[40]="Dazzle<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[41]="Tajn� obchod 1<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[42]="Tajn� obchod 2<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      
      //V�pis tabuky - Nem�nit!!!
      for ($i=1;$i<=$pocet;$i=$i+1) 
      {
      $i2=$i+1;
      
      echo 
    "<tr>".
      "<td align=center width=200px>".
        "<a href=galerie/screenshots.php?o=".$i." class=obr target=blank><img src=galerie/screenshots_nahled/screenshot".$i."_nahled.jpg alt=Screenshot ".$i." border=0 align=middle></a><br><br>".
      "</td>".
      "<td align=center width=200px>".
        "<a href=galerie/screenshots.php?o=".$i2." class=obr target=blank><img src=galerie/screenshots_nahled/screenshot".$i2."_nahled.jpg alt=Screenshot ".$i2." border=0 align=middle></a><br><br>".
      "</td>".
    "</tr>".
    "<tr>".
      "<td align=center width=200px class=text>".
        $popis[$i]."<br><br>".
      "</td>".
      "<td align=center width=200px class=text>".
        $popis[$i2]."<br><br>".
      "</td>".
    "</tr>";

      $i=$i+1;}
    ?>
  </table>
<br>
>>> Po�li tak� sv�j screenshot na <a href=mailto:fenix1@seznam.cz?subject=w3server.wz.cz>fenix1@seznam.cz</a>. <<<
</center>