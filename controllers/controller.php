<?php

if($words = getWordsArray()) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include 'postController.php';
    } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
        include 'getController.php';
    } else {
        die('Tu n’as rein à faire ici avec cette méthode HTTP');
    }
} else {
    die("il n'a pas été possible de récupérer les mots depuis la base de données");
}

$serializedLetters = getSerializedLetters($letters);