<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Génération de Nombres Premiers</title>
</head>
<body>
    <h1>Générer des Nombres Premiers jusqu'à un Nombre Donné</h1>
    <form action="traitement.php" method="post">
        <input type="number" name="limite" required placeholder="Entrez un nombre">
        <input type="submit" value="Générer">
    </form>
    <?php
    // Affiche le résultat si existant
    if (isset($_GET['resultat'])) {
        echo "<p>" . htmlspecialchars(urldecode($_GET['resultat'])) . "</p>";
    }
    ?>
</body>
</html>
