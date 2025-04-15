<!DOCTYPE HTML>
<html>
	<head>
    <title>Esercitazione 3</title>
    <link rel="stylesheet" href="./css/styleExe3.css">
    <script src="./js/jsMessaggio_1.js"></script>
	</head>
 		<header><h1 id="hcod1">Esercitazione 3 - Es.4</h1></header>	
	<body>
<?php	
	include 'nav.html';
	include 'footer.html';
?>		
		<div id="content">      
			Leggiamo i dati da un database richiesti da un form:
		  <form name="myform" method="POST">
		  	<label for="n1">Artista da cercare</label>
		    <input id="n1" name="name" type="text"/>
		    <input type="submit" value="Cerca"/>
		  </form>
		
		  <div id="area_risultato">
<?php	
	if(count($_POST)==0 || $_POST["name"]=="")
	{           		
?>
				<p>Non &egrave; stato richiesto nessun artista</p>

<?php
	} else {  
		$name=$_POST["name"];
		$query="SELECT * FROM Artist " .
						"WHERE Name LIKE '%" . $name ."%' ";
	  echo "<p>Query: " . $query . "</p>";
		include 'connect.php';
		try {
			$result = $conn->query($query);
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
						<th>Nome che contiene: <?php	echo $name; ?> </th> 
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
<?php } ?>
			</table>
<?php }  } ?>
					
		  </div>
		</div> 
		
	</body>
</html>
