<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
  <title>JQ Nominativi bis</title>
  <link rel="stylesheet" href="./css/styleExe4.css">
	<script type="text/javascript" src="jquery-2.0.0.js"></script>
	<script type="text/javascript" src="JQCalcolatrice.js"></script>
</head>


<body>
	<header><h1 id="hcod1">Esercitazione 4 - Calcolatrice</h1></header>
<?php	
	include 'nav.html';
	include 'footer.html';
?>
		<div id="content">
    	<form name="myForm" id="idMyForm">
	    	<label for="op1">Op 1</label>
				<input type="text" name="op1" class="myInput" /> <br>
	    	<label for="op2">Op 2</label>
				<input type="text" name="op2" class="myInput" /> <br>
				<label for="op2">Oper</label>
	    	<input type="submit" value="+" />
	    	<input type="submit" value="-" />
	    	<input type="submit" value="*" />
	    	<input type="submit" value="/" />
			 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    	<input type="submit" value="Svuota"/>
    	</form>
    
    	<div id="risultato">

    	</div>   	
		</div> 

</body>
</html>
