<?php
session_start();

// Initialisation des tâches si non présentes dans la session
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Ajout d'une nouvelle tâche
if (isset($_POST['add']) && !empty($_POST['task'])) {
    $_SESSION['tasks'][] = ['task' => $_POST['task'], 'done' => false];
}

// Marquer une tâche comme terminée
if (isset($_POST['done'])) {
    $_SESSION['tasks'][$_POST['done']]['done'] = true;
}

// Supprimer une tâche
if (isset($_POST['delete'])) {
    array_splice($_SESSION['tasks'], $_POST['delete'], 1);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Gestionnaire de Tâches</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Ajouter une nouvelle tâche</h2>
<form action="" method="POST">
    <input type="text" name="task" placeholder="Nouvelle tâche">
    <button type="submit" name="add">Ajouter</button>
</form>

<h2>Liste des Tâches</h2>
<ul>
<?php foreach ($_SESSION['tasks'] as $index => $task): ?>
    <li>
        <?php if ($task['done']): ?>
            <strike><?php echo htmlspecialchars($task['task']); ?></strike>
        <?php else: ?>
            <?php echo htmlspecialchars($task['task']); ?>
        <?php endif; ?>
        <form action="" method="POST" style="display: inline;">
            <button type="submit" name="done" value="<?php echo $index; ?>">Terminer</button>
            <button type="submit" name="delete" value="<?php echo $index; ?>">Supprimer</button>
        </form>
    </li>
<?php endforeach; ?>
</ul>

</body>
</html>
