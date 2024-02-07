<?php
// Fonction qui permet de se connecter  à la base de données
// le fetch_assoc permet de ne pas avoir de repetitions
// try : essaie de se connecter, catch: s'il n'y arrive pas il envoit une message d'erreur qui
//  explique où est l'erreur

function getPDOlink(){
    try {
        $conn = new PDO('mysql:host=localhost;dbname=alice; charset=utf8', "root", "");
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $conn;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return null;
    }
}

// Utilisation de la fonction getPDOlink pour obtenir la connexion PDO
$conn = getPDOlink();

