<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vérification de Palindrome</title>
</head>
<body>
    <h1>Tester si une chaîne est un palindrome</h1>
    <form action="verifier_palindrome.php" method="post">
        <input type="text" name="texte" required placeholder="Entrez une chaîne">
        <input type="submit" value="Tester">
    </form>
    <?php
    // Affichage du résultat si redirigé depuis verifier_palindrome.php
    if (isset($_GET['resultat'])) {
        echo "<p>" . htmlspecialchars($_GET['resultat']) . "</p>";
    }
    ?>
</body>
</html>
