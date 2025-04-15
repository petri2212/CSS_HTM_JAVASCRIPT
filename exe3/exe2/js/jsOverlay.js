// questa lireria funziona come quella dell'esempio degli eventi,
// ma accentra tutti i controlli alla pressione del bottone del Form
// ... e gestisce gli errori diversamente

var nome;
var cognome;
var data;
var eta;
var cf;
var msgBox;

// nasconde lo schermo
function hideOverlay() {
		document.getElementById("overlay").style.display = "none";
		document.forms.myForm.submit();
}

// mostra lo schermo
function showOverlay() {
		document.getElementById("overlay").style.display = "flex";
}

function setUp () {
	msgBox = document.getElementById("msgBox");
  nome = document.forms.myForm.cognome;
  cognome = document.forms.myForm.cognome;
  data = document.forms.myForm.data;
  eta = document.forms.myForm.eta;
  cf = document.forms.myForm.cf;
	return false;
};

function checkInput() {
	var msg = "";
	var str;
/*	checkNome();
	checkData();
	checkCF();
*/
	msg = checkEta(msg);
	msg = checkCF(msg);

	if (msg != "") {
		msg += "<br/><br/><br/>Clicca per chiudere";
		msgBox.innerHTML = msg;
		showOverlay();
	}

};

// filtrare il testo di input... da completare
function cleanInput () {  
	var node = document.getElementById(event.target.id);
	var str = node.value; 
	str = str.replaceAll ("\'", "\\\'");
	node.value = str;
};

// filtrare il testo di input... da completare
function cleanInput2 (str) {
	str = str.replaceAll ("\'", "\\\'");
	return str;
};

function checkCognome() {
	cognome.value = cleanInput2 (cognome.value);
};

function checkEta(msg) {
	eta.value = cleanInput2 (eta.value);
	var e=parseInt(eta.value);
	if (isNaN(e)) 
    msg += "<br/>- Inserire un numero per l'et" +
							String.fromCodePoint(224) + 
							": " + eta.value;	
	return msg;
};

function checkData() {
	data.value = cleanInput2 (data.value);
	const userKeyRegExp = /[0-9]{2}\.[0-9]{2}\.[0-9]{4}/;
	const valid = userKeyRegExp.test(data.value);
	if (!valid) {
		alert ("Formato della data errato: " + data.value);	
		data.value = null;
	}
};

function checkCF(msg) {
	cf.value = cleanInput2 (cf.value);	
	if (cf.value.length != 16)
		msg += "<br/>- Il codice fiscale " +
							String.fromCodePoint(232) + 
							" formato da 16 caratteri: " + cf.value;	
	return msg;
};
