<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tableau de bord des exercices</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Tableau de bord des exercices PHP</h1>
    <p class="intro">Cette série d'exercices en PHP vise à vous aider à pratiquer et à renforcer vos compétences en
        programmation PHP. Chaque exercice aborde différents aspects de la programmation PHP, allant des concepts de
        base aux défis plus avancés.</p>
    <ul>
        <?php
        $descriptions = [
            "Créer une calculatrice simple qui peut effectuer des opérations d'addition, de soustraction, de multiplication et de division.",
            "Créer un programme PHP qui permet de convertir une température de Celsius en Fahrenheit et vice versa.",
            "Écrire une fonction PHP pour vérifier si une chaîne de caractères est un palindrome ou non.",
            "Écrire une fonction PHP qui génère et affiche tous les nombres premiers jusqu'à un nombre donné.",
            "Créer un gestionnaire de tâches simple en PHP qui permet d'ajouter, de supprimer et de marquer des tâches comme terminées.",
            "Créer une page PHP qui se connecte à une base de données MySQL.",
            "Écrire un script PHP pour récupérer les utilisateurs depuis une table dans une base de données et les afficher sur la page.",
            "Améliorer l'affichage des utilisateurs en mettant en place une pagination pour éviter d'afficher tous les utilisateurs en une seule fois."
        ];
        for ($i = 1; $i <= 8; $i++) {
            echo "<li>";
            echo "<a href='exo$i/index.php'>Exercice $i</a>";
            echo "<p class='description'>{$descriptions[$i - 1]}</p>";
            echo "</li>";
        }
        ?>
    </ul>
</body>

</html>