<!DOCTYPE HTML>
<html>
	<head>
    <title>Esercitazione 3</title>
    <link rel="stylesheet" href="./css/styleExe3.css">
    <script src="./js/jsMessaggio_1.js"></script>
	</head>
 		<header><h1 id="hcod1">Esercitazione 3 - Es.2</h1></header>	
	<body>
<?php	
	include 'nav.html';
	include 'footer.html';
?>		
		<div id="content">      
			Generiamo una tabella 
			leggendo gli attributi alla pagina 
			e formattiamo la tabella:
			<br><br>        	
		  <div id="area_risultato">

<?php
	if(count($_GET)==0)
	{           
?>
				<p class="testo">
						Nessun campo &egrave; 
						stato inviato dalla form.
				</p>
<?php
	}           // notate che le parentesi vanno chiuse!
	else
	{                                  
?> 
				<table class="tabella">
					<tr class="testata">
						<th># </th> 
						<th>Campo </th> 
						<th>Valore </th>
					</tr>
<?php
	$i=0;
	foreach(array_keys($_GET) as $name)
	{
		$i=$i+1;
		$classRiga='class="rigaDispari"';
		if($i%2==0) {
			$classRiga='class="rigaPari"';
		}
?>
					<tr <?php	echo $classRiga; ?> > 
						<td > <?php echo $i; ?> </td>
						<td > <?php echo $name ?> </td>
						<td > <?php echo $_GET[$name]; ?> </td> 
					</tr>
<?php
	}
?>
			</table>
<?php
}
?>
			
			
			
		  </div>
		</div> 
		
	</body>
</html>
