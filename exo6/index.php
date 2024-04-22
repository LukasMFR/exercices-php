<?php
// Paramètres de connexion
$host = "localhost"; // ou votre adresse du serveur
$username = "root";
$password = ""; // ajoutez votre mot de passe s'il existe
$dbname = "exo6";

// Création de la connexion
$conn = mysqli_connect($host, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
} else {
    echo "Connexion réussie à la base de données '$dbname'.";
}

// Fermeture de la connexion (optionnelle ici, car elle se fermera à la fin du script)
mysqli_close($conn);
?>
