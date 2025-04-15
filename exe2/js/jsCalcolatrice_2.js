var fsomma=function (v1, v2)
{
   var r = v1 + v2;
   var testo = "" + v1 + "+" + v2 + "=" + r;
   return testo;   
}

var fdifferenza=function (v1, v2)
{
   var r = v1 - v2;
   var testo = "" + v1 + "-" + v2 + "=" + r;
   return testo;   
}

var fprodotto=function (v1, v2)
{
   var r = v1 * v2;
   var testo = "" + v1 + "*" + v2 + "=" + r;
   return testo;   
}

var fdivisione=function (v1, v2)
{
   var r = v1 / v2;
   var testo = "" + v1 + "/" + v2 + "=";
   if (v2 != 0){
   	r = v1 / v2;
    testo += r;
    } else {
    	testo += " impossibile";
        }
   return testo;   
 
}

function Calcola(operazione) {
	var v1=parseInt(document.forms.myForm.op1.value);
	var v2=parseInt(document.forms.myForm.op2.value);
	if (isNaN(v1))
    	v1 = 0;
    if (isNaN(v2))
    	v2 = 0;

    var testo = operazione(v1, v2);

   var nodo = document.getElementById("risultato");
   nodo.innerHTML = "<p>" + testo + "</p>";

}

