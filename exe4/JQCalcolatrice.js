function MioElenco( idResult){
   this.idResult = idResult;
   this.contatore = 0;
   this.Elenco = new Array(1);
   
   this.addToElenco = function( elemento ){
	this.Elenco[this.contatore] = elemento;
    this.contatore ++;
   }

   this.showElenco = function(){
    var i;
    var area = $("#" + this.idResult );
    area.html("");
    var nuovoTesto;
    for (i=0; i < this.contatore; i++){
    	if( i==0)
    		nuovoTesto = this.Elenco[i];
    	else
				nuovoTesto = "<br/>" + this.Elenco[i];
      area.html( area.html() + nuovoTesto );
    }
  }
  
  this.Svuota = function(){
    $("#" + this.idResult).html("Qui il risultato:");
    this.contatore = 0;
  }
}
    

var fsomma=function (v1, v2) {
   var r = v1 + v2;
   var testo = "" + v1 + "+" + v2 + "=" + r;
   return testo;   
}

var fdifferenza=function (v1, v2){
   var r = v1 - v2;
   var testo = "" + v1 + "-" + v2 + "=" + r;
   return testo;   
}

var fprodotto=function (v1, v2)  {
   var r = v1 * v2;
   var testo = "" + v1 + "*" + v2 + "=" + r;
   return testo;   
}

var fdivisione=function (v1, v2) {
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


var Elenco;

function Calcola(operazione) {
    var campi = $(".myInput");
    var s1 = campi.eq(0).val();
    var s2 = campi.eq(1).val();
    var v1=parseInt(s1);
    var v2=parseInt(s2);
	if (isNaN(v1))
    	v1 = 0;
    if (isNaN(v2))
    	v2 = 0;
    var testo = operazione(v1,v2);
    Elenco.addToElenco( testo );
    Elenco.showElenco();
}

function Inizializza(){
   Elenco = new MioElenco("risultato");
   Elenco.Svuota();
}

var eventHandler = function( event ){
   event.preventDefault();
   var nodo = $(event.target);
   var pulsante = nodo.val();
   if( pulsante == "+" )
      Calcola(fsomma);
   if( pulsante == "-" )
      Calcola(fdifferenza);
   if( pulsante == "*" )
      Calcola(fprodotto);
   if( pulsante == "/" )
      Calcola(fdivisione);
   if( pulsante == "Svuota" )
      Elenco.Svuota();
}

var starter = function (){
   var campi = $("#idMyForm input");
   
		// aggiungo un event handler agli elementi SUBMIT
   var process = function (i, el)   {
      var campo = $( el );
      if( campo.attr("type") == "submit")
         campo.bind("click", eventHandler);
      
   }
   campi.each( process );                                                     

   Inizializza(); // era chiamata nell'evento onLoad
}

$( starter );
