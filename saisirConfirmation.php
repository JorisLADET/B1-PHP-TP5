<?php
	define( "CONFIRMATION", 1 );
do{
	echo"Confirmez-vous la modification (oui/non)";
	$valeurM = rtrim ( fgets (STDIN) );
	
	
}while ($valeurM !== "oui" && $valeurM !== "non");

echo"Modification en cours...";
?>
		
