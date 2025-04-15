
  function gen_messaggio(message) {
    var format=message.toUpperCase() 
    var size=1 //go through the message, letter by letter 
    var risultato="";
    for (i=0;i<message.length;i++) {  
    	                  
 			var m = format.charAt(i).fontsize(size).bold();
        risultato += m;
     	if (size<7) 
        	size++; 
     	else 
        	size=1;
    }
    return risultato;
  }


function formatta() {
  var nodo = document.getElementById("area_risultato");
	nodo.innerHTML = gen_messaggio("Welcome everybody! Enjoy the test");
  return false;
}
