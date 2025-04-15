<!DOCTYPE HTML>
<html>
	<head>
    <title>Esercitazione 3</title>
    <link rel="stylesheet" href="./css/styleExe3.css">
    <script src="./js/jsMessaggio_1.js"></script>
	</head>
 		<header><h1 id="hcod1">Esercitazione 3 - Es.1</h1></header>	
	<body>
<?php	
	include 'nav.html';
	include 'footer.html';
?>		
		<div id="content">      
			Generiamo una tabella 
			leggendo gli attributi alla pagina:
			<br><br>        	
		  <div id="area_risultato">

<?php
	if(count($_GET)==0)	{           
?>
				<p class="testo">
						Nessun campo &egrave; 
						stato inviato alla pagina.
				</p>
<?php         
	}           // notate che le parentesi vanno chiuse!
	else        
	{                  
?> 
				<table class="tabella">
					<tr class="testata">
						<th>Campo </th> 
						<th>Valore </th>
					</tr>
<?php                
		foreach(array_keys($_GET) as $name) { // apertuta foreach
?>
					<tr class="riga" > 
						<td class="cella"><?php echo $name ?></td>
						<td class="cella"><?php	echo $_GET[$name];?></td> 
					</tr>
<?php
	}         // chiusura foreach
?>
			</table>
<?php
}
?>
			
			
			
		  </div>
		</div> 
		
	</body>
</html>
