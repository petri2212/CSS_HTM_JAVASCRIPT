var cognome;
var data;
var eta;
var cf;

// per il 2025 valutare se conviene far vedere 
// questo sistema per aggiungere i listener
function setUp () {
  cognome = document.forms.myForm.cognome;
  data = document.forms.myForm.data;
  eta = document.forms.myForm.eta;
  cf = document.forms.myForm.cf;
	cognome.addEventListener("change", checkCognome);
	data.addEventListener("change", checkData);
	eta.addEventListener("change", checkEta);
	cf.addEventListener("change", checkCF);
  return false;
};

function cleanInput () {  
	var node = document.getElementById(event.target.id);
	var str = node.value; 
	str = str.replaceAll ("\'", "\\\'");
//						.replaceAll ("\\", "\\\\");
	node.value = str;
};

function cleanInput2 (str) {
	str = str.replaceAll ("\'", "\\\'");
	return str;
};

function checkCognome() {
	cognome.value = cleanInput2 (cognome.value);
};

function checkEta() {
	eta.value = cleanInput2 (eta.value);
	var e=parseInt(eta.value);
	if (isNaN(e)) {
    	alert ("Inserire un numero per l'età: " + eta.value);	
			eta.value = null;
	}
	else
		eta.value = e;
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

function checkCF() {
	cf.value = cleanInput2 (cf.value);	
	if (cf.value.length != 16){
		alert ("Il codice fiscale è formato da 16 caratteri: " + cf.value);	
		cf.value = null;
	}
};

