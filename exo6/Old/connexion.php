<?php
// Paramètres de connexion à la base de données
$hostname = "localhost"; // Ou IP du serveur MySQL
$username = "votre_nom_dutilisateur";
$password = "votre_mot_de_passe";
$database = "nom_de_la_base_de_donnees";

// Connexion à la base de données
$conn = mysqli_connect($hostname, $username, $password, $database);

// Vérification de la connexion
if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}
echo "Connexion réussie à la base de données.";

// Fermeture de la connexion (facultatif ici, car le script est court)
mysqli_close($conn);
?>
