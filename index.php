<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord des exercices</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tableau de bord des exercices PHP</h1>
    <ul>
        <?php
        for ($i = 1; $i <= 8; $i++) {
            echo "<li><a href='exo$i/index.php'>Exercice $i</a></li>";
        }
        ?>
    </ul>
</body>
</html>
