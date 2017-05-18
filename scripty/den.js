var now = new Date();
var dName = now.getDay() + 1.;

if(dName==1) Day = "Nedìle";
if(dName==2) Day = "Pondìlí";
if(dName==3) Day = "Úterý";
if(dName==4) Day = "Støeda";
if(dName==5) Day = "Ètvrtek";
if(dName==6) Day = "Pátek";
if(dName==7) Day = "Sobota";

document.write(Day);