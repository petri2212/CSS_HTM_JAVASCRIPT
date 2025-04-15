

<!DOCTYPE HTML>
<html>
	<head>
    <title>Esercitazione 3</title>
    <link rel="stylesheet" href="./css/styleExe3.css">
	</head>
	<body>  
		<header><h1 id="hcod1">Esercitazione 3 - Index</h1></header>
<?php		
	include 'nav.html';			// 	navigazione
	include 'footer.html';	//	footer
	/* *********
		NB. attenzione! 
		l'inclusione dei file inserisce il codice incluso 
		esattamente nel punto in cui l'inclusione viene chiamata.
		Se non scrivete bene i vostri css potreste avere dei comportamenti scorretti!
		La cosa migliore sarebbe includere singolarmente la navigazione e il footer 
		nei punti in cui sarebbe preferibile averli
	***************** */
?>
		<div id="content">              	
			Notate la barra di navigazione
			<br> ... <br>  
			... e il footer (che è posizionato sempre in fondo 
			grazie al foglio di stile)
		</div>
	</body>
</html>
