<?php
// Fonction pour vérifier si un nombre est premier
function estPremier($nombre) {
    if ($nombre <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($nombre); $i++) {
        if ($nombre % $i == 0) {
            return false;
        }
    }
    return true;
}

// Fonction pour générer des nombres premiers jusqu'à une limite
function genererNombresPremiers($limite) {
    $nombresPremiers = [];
    for ($nombre = 2; $nombre <= $limite; $nombre++) {
        if (estPremier($nombre)) {
            $nombresPremiers[] = $nombre;
        }
    }
    return $nombresPremiers;
}

$resultat = null;
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['limite'])) {
    $limite = $_POST['limite'];
    $nombresPremiers = genererNombresPremiers($limite);
    $resultat = "Les nombres premiers jusqu'à " . htmlspecialchars($limite) . " sont : " . implode(", ", $nombresPremiers);
}
?>