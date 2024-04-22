<?php
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

function genererNombresPremiers($limite) {
    $nombresPremiers = [];
    for ($nombre = 2; $nombre <= $limite; $nombre++) {
        if (estPremier($nombre)) {
            $nombresPremiers[] = $nombre;
        }
    }
    return $nombresPremiers;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['limite'])) {
        $limite = $_POST['limite'];
        $nombresPremiers = genererNombresPremiers($limite);
        $resultat = "Les nombres premiers jusqu'à " . htmlspecialchars($limite) . " sont : " . implode(", ", $nombresPremiers);
        // Redirige vers index.php avec les résultats
        header("Location: index.php?resultat=" . urlencode($resultat));
        exit;
    }
}
