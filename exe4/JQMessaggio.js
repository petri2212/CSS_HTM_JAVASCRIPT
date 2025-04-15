// viene generato l'html da inserire
function genMessaggio(message) {
  var format=message.toUpperCase() 
  var size=1 //go through the message, letter by letter 
  var risultato="";
  for (i=0;i<message.length;i++) {
  	// generiamo una catena di azioni per creare html
		var m = format.charAt(i).fontsize(size).bold();
		risultato += m;
   	if (size<7) 
      	size++; 
   	else 
      	size=1;
  }
	//alert(risultato);
 	return risultato;
}

function formatta( event ) {         
		// leggiamo il valore del testo
    var msg = $("#idTesto").eq(0).val();
		// settiamo il risultato nell'elemento di interesse
		$("#areaRisultato").eq(0).html( genMessaggio(msg) );
		//Inibisce l’azione di default dell’evento
    event.preventDefault();
}

var starter = function() {
   // set the event handler
	 // leghiamo un'azione al click del pulsante del form
   $("#idPulsante").bind("click", formatta);
};

$( starter );
