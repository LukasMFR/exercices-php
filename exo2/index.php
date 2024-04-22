<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Conversion de température</title>
</head>
<body>
    <h1>Convertir la température</h1>
    <?php
    $resultat = null; // Initialiser la variable résultat

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST['temperature'];
        $unite = $_POST['unite'];

        if ($unite == "celsius") {
            // Conversion de Celsius en Fahrenheit
            $resultat = ($temperature * 9/5) + 32;
            $resultat = htmlspecialchars($temperature) . "°C équivaut à " . htmlspecialchars($resultat) . "°F.";
        } elseif ($unite == "fahrenheit") {
            // Conversion de Fahrenheit en Celsius
            $resultat = ($temperature - 32) * 5/9;
            $resultat = htmlspecialchars($temperature) . "°F équivaut à " . htmlspecialchars($resultat) . "°C.";
        } else {
            $resultat = "Unité non reconnue.";
        }
    }
    ?>

    <form action="" method="post">
        <input type="number" name="temperature" required placeholder="Saisir la température">
        <div>
            <input type="radio" id="celsius" name="unite" value="celsius" required>
            <label for="celsius">Celsius à Fahrenheit</label>
        </div>
        <div>
            <input type="radio" id="fahrenheit" name="unite" value="fahrenheit">
            <label for="fahrenheit">Fahrenheit à Celsius</label>
        </div>
        <input type="submit" value="Convertir">
    </form>

    <?php if ($resultat !== null): ?>
    <p>Résultat : <?php echo $resultat; ?></p>
    <?php endif; ?>
</body>
</html>
