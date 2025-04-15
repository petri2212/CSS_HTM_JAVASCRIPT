<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML">
  <title>JQ Nominativi bis</title>
  <link rel="stylesheet" href="./css/styleExe4.css">
	<script type="text/javascript" src="jquery-2.0.0.js"></script>
	<script type="text/javascript" src="JQNominativi2.js"></script>
</head>    


<body>         
	<header><h1 id="hcod1">Cerca nominativi bis</h1></header>
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

	<div id="areaMessaggio">
	</div>

	<div id="areaRisultato">
	</div>
</div>



</body></html>