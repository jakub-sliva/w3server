var browser = navigator.appName
var verze = parseInt(navigator.appVersion)
if ((browser == "Microsoft Internet Explorer" & verze >= 4) | (browser == "Netscape" & verze >= 4)){

sirka = screen.width
vyska = screen.height
asirka = screen.availWidth
avyska = screen.availHeight
color = screen.colorDepth

document.write(sirka + " x " + vyska + " pixelù")
}
else document.write("Lituji - Nelze zjistit")