<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
  <title>JQ Nominativi</title>
  <link rel="stylesheet" href="./css/styleExe4.css">
	<script type="text/javascript" src="jquery-2.0.0.js"></script>
	<script type="text/javascript" src="JQNominativi.js"></script>
</head>


<body>
	<header><h1 id="hcod1">Cerca nominativi</h1></header>
<?php	
	include 'nav.html';
	include 'footer.html';
?>
	
	<div id="content">     
	  <form name="myForm" >
				<label for="idNome">Nome</label>
				<input type="text" id="idNome"/>    <br/>
				<label for="idCognome">Cognome</label>
	     	<input type="text" id="idCognome"/> 
	     <input type="submit" value="Cerca" id="idInvio"/>
	  </form>
		
		<div id="areaRisultato"><br>...</div>
	</div>
</body>
</html>
