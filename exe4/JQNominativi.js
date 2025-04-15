// definizione di un oggeto con i selettori
var selectors = { 
  area: "#areaRisultato",
  pulsanteInvio: "#idInvio",
  cognome: "#idCognome",
  nome: "#idNome"
};

// appende la lista dei risultati nel HTML preposto
function MostraLista( lista ) {
   var area = $(selectors.area);
   area.html("<p>Trovati " + lista.list.length + " nominativi</p>");

   var i;
   for( i=0; i < lista.list.length; i++) {
      $("<div>" + (i+1) + ". " + 
								lista.list[i].nome + " " + 
								lista.list[i].cognome +
          "</div>").appendTo(selectors.area);
   }
}

// non dovrebbe mai essere eseguita... ma in caso...
function MostraErrore( errorThrown ) {
   var area = $(selectors.area);
   area.html("<p>Spiacenti, errore rilevato: " + errorThrown + "</p>");
}

// gestione del caso di successo 
var success = function ( data, textStatus, jqXHR ) {
   MostraLista( data );
};

// gestione del caso di fallimento
var failure = function( jqXHR, textStatus, errorThrown ) {
   MostraErrore( errorThrown );
};

// generazione di un parte della query 
function AppendToQuery( oldQuery, name, val ) {
   var query;
   if( oldQuery.length==0)
      query = "?";
   else
      query = oldQuery + "&";

   query += name + "=" + val;
   
   return query;
}

// gestore dell'evento
var eventHandler = function ( event ) {
   event.preventDefault();
	 //lettura dei parametri di ricerca
   var cg = $(selectors.cognome).val();
   var no = $(selectors.nome).val();
   
	 // composizione della query
   var query = "";
   if( cg.length > 0)
      query = AppendToQuery( query, "cg", cg );
   if( no.length > 0)
      query = AppendToQuery( query, "no", no );

		// definizione del codice da richiamare   
   var ajaxConf = {
      url: "./Nominativi.php" + query,
      type: "GET",
      dataType: "json"
   };
   
	 // call ajax al php di interesse
   $.ajax( ajaxConf ).done( success ).fail( failure );   
};

// setting dell'azione da eseguire in base ad un evento
var starter = function() {
   $(selectors.pulsanteInvio).bind("click", eventHandler);
}

$(starter);
