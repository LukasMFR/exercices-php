<?php
function estPalindrome($chaine) {
    $chaineNormalisee = strtolower(str_replace(' ', '', $chaine));
    return $chaineNormalisee === strrev($chaineNormalisee);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['texte'])) {
    $texte = $_POST['texte'];
    if (estPalindrome($texte)) {
        $resultat = "\"" . $texte . "\" est un palindrome.";
    } else {
        $resultat = "\"" . $texte . "\" n'est pas un palindrome.";
    }
    // Redirection vers index.php avec le résultat
    header("Location: index.php?resultat=" . urlencode($resultat));
    exit;
}
?>
