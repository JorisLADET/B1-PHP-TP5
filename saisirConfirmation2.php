<?php
define("CONFIRMATION", 1);

do {
    echo "Confirmez-vous la modification (oui/non) : ";
    $valeurM = rtrim(fgets(STDIN));

    if ($valeurM !== "oui" && $valeurM !== "non") {
		echo $valeurM ,"\n";
        echo "Erreur : Veuillez entrer 'oui' ou 'non'.\n";
    }

} while ($valeurM !== "oui" && $valeurM !== "non");

echo "Modification en cours...";
?>
