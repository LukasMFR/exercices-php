<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice simple en PHP</title>
</head>
<body>
    <h1>Calculatrice simple</h1>
    <?php
    $resultat = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre1 = $_POST['nombre1'];
        $nombre2 = $_POST['nombre2'];
        $operation = $_POST['operation'];

        switch ($operation) {
            case 'addition':
                $resultat = $nombre1 + $nombre2;
                break;
            case 'soustraction':
                $resultat = $nombre1 - $nombre2;
                break;
            case 'multiplication':
                $resultat = $nombre1 * $nombre2;
                break;
            case 'division':
                if ($nombre2 == 0) {
                    $resultat = "Division par zéro n'est pas autorisée!";
                } else {
                    $resultat = $nombre1 / $nombre2;
                }
                break;
            default:
                $resultat = "Opération non reconnue.";
                exit;
        }
    }
    ?>

    <form action="" method="post">
        <div>
            <input type="number" name="nombre1" required placeholder="Premier nombre" value="<?php echo isset($_POST['nombre1']) ? $_POST['nombre1'] : ''; ?>">
        </div>
        <div>
            <input type="number" name="nombre2" required placeholder="Deuxième nombre" value="<?php echo isset($_POST['nombre2']) ? $_POST['nombre2'] : ''; ?>">
        </div>
        <div>
            <select name="operation">
                <option value="addition" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'addition') ? 'selected' : ''; ?>>Addition</option>
                <option value="soustraction" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'soustraction') ? 'selected' : ''; ?>>Soustraction</option>
                <option value="multiplication" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'multiplication') ? 'selected' : ''; ?>>Multiplication</option>
                <option value="division" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'division') ? 'selected' : ''; ?>>Division</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Calculer">
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Résultat de l'opération : " . htmlspecialchars($resultat) . "</h2>";
    }
    ?>
</body>
</html>
