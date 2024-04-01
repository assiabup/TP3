<?php

function estNombreArmstrong($nombre) {
    $chiffres = str_split($nombre);
    $nombreChiffres = count($chiffres);
    $somme = 0;
    
    foreach ($chiffres as $chiffre) {
        $somme += pow($chiffre, $nombreChiffres);
    }
    
    return $somme === $nombre;
}

echo "<ul>";
for ($i = 1; $i < 1000; $i++) {
    if (estNombreArmstrong($i)) {
        echo "<li>$i</li>";
    }
}
echo "</ul>";

?>