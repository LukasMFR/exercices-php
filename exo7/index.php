<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
// Paramètres de connexion
$host = "localhost";
$username = "root";
$password = ""; // Votre mot de passe de base de données ici, si nécessaire
$dbname = "exo7";

// Création de la connexion
$conn = new mysqli($host, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion: " . $conn->connect_error);
}

// Requête SQL pour récupérer tous les utilisateurs
$sql = "SELECT id, nom, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Début du tableau pour afficher les utilisateurs
    echo "<table><tr><th>ID</th><th>Nom</th><th>Email</th></tr>";

    // Récupération des données de chaque ligne
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nom"] . "</td><td>" . $row["email"] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "0 résultats";
}

// Fermeture de la connexion
$conn->close();
?>
</body>
</html>
