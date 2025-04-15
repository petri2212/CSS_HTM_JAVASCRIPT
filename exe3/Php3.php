<!DOCTYPE HTML>
<html>
	<head>
    <title>Esercitazione 3</title>
    <link rel="stylesheet" href="./css/styleExe3.css">
    <script src="./js/jsMessaggio_1.js"></script>
	</head>
 		<header><h1 id="hcod1">Esercitazione 3 - Es.3</h1></header>	
	<body>
<?php	
	include 'nav.html';
	include 'footer.html';
?>		
		<div id="content">      
			Leggiamo i dati da un database:
<?php	
	// possiamo includere anche pezzi di php
	include 'connect.php';
?>
			<br><br>        	
		  <div id="area_risultato">

<?php
	try {     
		// query
		$result = $conn->query("SELECT * FROM Director");
	} catch(PDOException$e) {
		echo "DB Error on Query: " . $e->getMessage();
		$error = true;
	}
	if(!$error)
	{           
?>
				<table class="tabella">
					<tr class="testata">
						<th>id </th> 
						<th>Nome </th> 
					</tr>
<?php
	$i=0;
	foreach($result as $riga) {
		$i=$i+1;
		$classRiga='class="rigaDispari"';
		if($i%2==0) {
			$classRiga='class="rigaPari"';
		}
?>
					<tr <?php	echo $classRiga; ?> > 
						<td > <?php echo $riga["id"]; ?> </td>
						<td > <?php echo $riga["Name"]; ?> </td> 
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
