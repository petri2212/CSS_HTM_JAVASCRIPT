<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="HTML"/>
  <title>JQ Messaggio</title>
  <link rel="stylesheet" href="./css/styleExe4.css">

	<script type="text/javascript" src="jquery-2.0.0.js"></script>
	<script type="text/javascript" src="JQMessaggio.js"></script>
</head>

<body>
	<header><h1 id="hcod1">Formattazione Messaggio</h1></header>
<?php	
	include 'nav.html';
	include 'footer.html';
?>
	<div id="content">     
	  <form name="myForm">
			<label for="idTesto">Messaggio da formattare</label>
	    <input id="idTesto" name="testo" type="text"/>
	    <input type="submit" value="Formatta" id="idPulsante"/>
	  </form>
		<br>
	  <div id="areaRisultato">
	  Qui il risultato
	  </div>
	</div>

</body>
</html>
