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
$dbname = "exo8"; // Mise à jour du nom de la base de données

// Création de la connexion
$conn = new mysqli($host, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion: " . $conn->connect_error);
}

// Définir le nombre d'utilisateurs par page
$utilisateursParPage = 5;

// Déterminer sur quelle page se trouve l'utilisateur, ou démarrer sur la première page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $utilisateursParPage;

// Calculer le nombre total d'utilisateurs
$result = $conn->query("SELECT COUNT(id) AS total FROM users");
$row = $result->fetch_assoc();
$totalUtilisateurs = $row['total'];
$totalPages = ceil($totalUtilisateurs / $utilisateursParPage);

// Requête SQL pour récupérer les utilisateurs avec LIMIT pour la pagination
$sql = "SELECT id, nom, email FROM users LIMIT $start, $utilisateursParPage";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Affichage des utilisateurs dans un tableau
    echo "<table><tr><th>ID</th><th>Nom</th><th>Email</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nom"] . "</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>";

    // Affichage des liens de pagination
    for ($i = 1; $i <= $totalPages; $i++) {
        echo "<a href='?page=$i'>$i</a> ";
    }
} else {
    echo "0 résultats";
}

// Fermeture de la connexion
$conn->close();
?>
</body>
</html>
