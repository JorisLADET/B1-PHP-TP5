<?php 
$nbEntier = rand(1,100);
$tentative = 0;
$valeurCapitaine = 0;

while ($valeurCapitaine != $nbEntier){
echo "Saisir un nombre entier compris entre 1 et 100 : ";
	$valeurCapitaine = rtrim( fgets( STDIN ) );
	
	
	if ($valeurCapitaine < $nbEntier) {
		echo "Trop petit !\n";
		$tentative = $tentative +1 ;
	}	
	
	elseif($valeurCapitaine > $nbEntier) {
		echo "Trop grand !\n";
		$tentative = $tentative +1 ;
	}
	elseif ($valeurCapitaine > 100){
	echo"Valeur incorrect !\n";
	}

	elseif($nbEntier == $valeurCapitaine){
	echo "Félicitations Capitaine. Victoire en ", $tentative ," coups !\n";
	} 
}

?>
	
