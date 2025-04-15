<?php 
	/* Questo pezzo di PHP definisce una lista di oggetti
		(simula quindi un DB)
		e leggendo in input dei parametri di ricerca
		effettua anche un filtraggio sui dati
	*/
	
	// parametri di input
	$cg = $_GET['cg'];
	$no = $_GET['no'];

	// definizione lista
	$size=20;
	$cognomi[0]="Rossi"; 			$nomi[0] = "Mario";
	$cognomi[1]="Binaghi"; 		$nomi[1] = "Chiara";
	$cognomi[2]="Verdi"; 			$nomi[2] = "Francesco";
	$cognomi[3]="Rossi"; 			$nomi[3] = "Matteo";
	$cognomi[4]="Rossini"; 		$nomi[4] = "Letizia";
	$cognomi[5]="Verdone";	 	$nomi[5] = "Noemi";
	$cognomi[6]="Cavalli";		$nomi[6] = "Matteo";
	$cognomi[7]="Rossi";			$nomi[7] = "Mattia";
	$cognomi[8]="Cavalli";		$nomi[8] = "Noemi";
	$cognomi[9]="Verdi";			$nomi[9] = "Chiara";
	$cognomi[10]="Rossi";			$nomi[10] = "Chiara";
	$cognomi[11]="Binaghi";		$nomi[11] = "Sofia";
	$cognomi[12]="Nuti";			$nomi[12] = "Mario";
	$cognomi[13]="Nuti";			$nomi[13] = "Federico";
	$cognomi[14]="Nuti";			$nomi[14] = "Francesco";
	$cognomi[15]="Verdi";			$nomi[15] = "Sofia";
	$cognomi[16]="Verdone";		$nomi[16] = "Sofia";
	$cognomi[17]="Verdone";		$nomi[17] = "Francesco";
	$cognomi[18]="Binaghi";		$nomi[18] = "Matteo";
	$cognomi[19]="Ferrari";		$nomi[19] = "Sofia";
	$cognomi[20]="Ferrari";		$nomi[20] = "Chiara";
	$count=0;
?>

{"list": [

<?php
	$i=0 ;
	// filtraggio della lista
	while($i < $size)
	{
		$ok=0;  
	  if ($cg=="" && $no=="") $ok=1;
		if ($cg==$cognomi[$i]) $ok=1;
		if ($no==$nomi[$i]) $ok=1;

		
	  if($ok==1) {
	      if($count>0)
	         echo ",";
	      echo '{"nome": "' . $nomi[$i] . '", "cognome": "' . $cognomi[$i] . '"}';
	      $count++;
	   }
	   $i++;
	}
?>
	], "size": <?php echo $count; ?>
}
