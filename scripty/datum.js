var now = new Date();
var month = now.getMonth()+1;
var dayNr = ((now.getDate()<10) ? "" : "")+ now.getDate();

var todaysDate =(
dayNr
+ ". "
+ month
+ ". 2007");

document.write(todaysDate);