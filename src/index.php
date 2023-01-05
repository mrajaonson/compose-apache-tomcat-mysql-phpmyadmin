<?php
// Définit le répertoire source
$source_dir = './';

// Ouvre le répertoire source
$dir = opendir($source_dir);

// Code html du lien
function lien($url)
{
    return "<a href=\"$url\">$url</a>";
}

// Lit chaque entrée du répertoire
while (($entry = readdir($dir)) !== false) {
    // Ignore les entrées "." et ".."
    if ($entry == '.' || $entry == '..') {
        continue;
    }

    if ($entry != 'index.php') {
        // Affiche l'entrée
        echo "<li>" . lien($entry) . "<br></li>";
    }

}

// Ferme le répertoire
closedir($dir);
?>
