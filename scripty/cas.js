function naplnCas (){
var datum = new Date();
aktualniCas = datum.getHours() + ":" + datum.getMinutes() + ":" + datum.getSeconds();
//
window.document.getElementById("cas").innerHTML = aktualniCas;
//
}

naplnCas();
window.setInterval("naplnCas()", 1000);
