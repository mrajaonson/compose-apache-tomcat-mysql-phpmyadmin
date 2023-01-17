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


// Vérifie si une chaine se termine par .php
function endsWithPHP($string)
{
    // Récupère la longueur de la chaîne
    $len = strlen($string);

    // Vérifie si la chaîne se termine par ".php"
    if ($len >= 4 && substr($string, $len - 4) == '.php') {
        return true;
    } else {
        return false;
    }
}

// Lit chaque entrée du répertoire
while (($entry = readdir($dir)) !== false) {
    // Ignore les entrées "." et ".."
    if ($entry == '.' || $entry == '..') {
        continue;
    }

    if ($entry != 'index.php' && endsWithPHP($entry)) {
        // Affiche l'entrée
        echo "<li>" . lien($entry) . "<br></li>";
    }

}

// Ferme le répertoire
closedir($dir);


$host = "mysql";
$dbname = "test";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<li>Connected successfully<br></li>";
} catch (PDOException $e) {
    echo "<li>Connection failed: " . $e->getMessage() . "<br></li>";
}
$conn = null;
