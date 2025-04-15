function Calcola(operazione) {
	var v1=parseInt(document.forms.myForm.op1.value);
	var v2=parseInt(document.forms.myForm.op2.value);
	if (isNaN(v1))
    	v1 = 0;
    if (isNaN(v2))
    	v2 = 0;

    var testo = "";

    if(operazione == "+")
       testo = "" + v1 + "+" + v2 + "=" + (v1 + v2);
    if(operazione == "-")
       testo = "" + v1 + "-" + v2 + "=" + (v1 - v2);
    if(operazione == "*")
       testo = "" + v1 + "*" + v2 + "=" + (v1 * v2);
    if(operazione == "/")
    {
       if( v2 == 0)
          testo = "" + v1 + "/" + v2 + " Impossibile";
       else
          testo = "" + v1 + "/" + v2 + "=" + (v1 / v2);
    }                                  

   var nodo = document.getElementById("risultato");
   nodo.innerHTML = testo;

}