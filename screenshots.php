<h1>Screenshots</h1>
<center>
  <table width="400px" border="0" cellspacing="0" cellpadding="0" class="registrace">
    <?
      //Zadej celkový poèet screenshotu.
      $pocet=42;
      
      //Popisky a autoøi.
      $popis=array();
      $popis[1]="Dùkaldná obraná<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[2]="Neviditelný pavouk 1<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[3]="Neviditelný pavouk 2<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[4]="Neviditelný pavouk 3<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[5]="Autoøi<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[6]="Pán dìsu<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[7]="Pán dìsu - skok<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[8]="Hrdinové nemrtvých<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[9]="Mìsto<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[10]="Celkové skóre<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[11]="Hrdinové orkù 1<br><font class=zvyrazneni>Autor: </font>Sargoth";
      $popis[12]="Hrdinové orkù 2<br><font class=zvyrazneni>Autor: </font>Sargoth";
      $popis[13]="Vìž znièena<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[14]="Trochu vìtší armáda<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[15]="Armáda kostlivcù<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[16]="Mìsto - *Fenix*<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[17]="Mìsto - Alakazam<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[18]="Celkové skóre<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[19]="Skóre za hrdiny<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[20]="*Fenix* + *Tony440* vs. PC<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[21]="Masakr<br><font class=zvyrazneni>Autor: </font>Sargoth";
      $popis[22]="Teleport<br><font class=zvyrazneni>Autor: </font>Sargoth";
      $popis[23]="Vytunìný hero<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[24]="Skóre DotA<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[25]="Nesmrtelný Hero<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[26]="Jasná prohra<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[27]="Skóre *Fenix*<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[28]="Tak sme to vyhrali<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[29]="Fenixùv hero<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[30]="Tonyho hero<br><font class=zvyrazneni>Autor: </font>*Tony440*";
      $popis[31]="Souboj<br><font class=zvyrazneni>Autor: </font>*Tony440*";
      $popis[32]="Good Like<br><font class=zvyrazneni>Autor: </font>*Tony440*";
      $popis[33]="Pìkný skill<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[34]="Vytunìný Sven<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[35]="Dva koníci<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[36]="Pìkné skóre<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[37]="Fenix vs. Exi<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[38]="Damage!!<br><font class=zvyrazneni>Autor: </font>Martin Èerný";
      $popis[39]="Mortred<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[40]="Dazzle<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[41]="Tajný obchod 1<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      $popis[42]="Tajný obchod 2<br><font class=zvyrazneni>Autor: </font>*Fenix*";
      
      //Výpis tabuky - Nemìnit!!!
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
>>> Pošli také svùj screenshot na <a href=mailto:fenix1@seznam.cz?subject=w3server.wz.cz>fenix1@seznam.cz</a>. <<<
</center>