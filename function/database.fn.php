<?php 
// try catch qui permet de se connecter  à la base de données
// le fetch_assoc permet de ne pas avoir de repetitions
// try : essaie de se connecter, catch: s'il n'y arrive pas il envoit une message d'erreur qui
// explique où est l'erreur
function getPDOlink($config) {
  // DSN de connexion :
  $dsn = 'mysql:dbname=' . $config['dbname'] . ';host=' . $config['dbhost'] . ';port=' . $config['dbport'];

  // On tenter de se connecter à la base de données :
  try {

    // On instancie l'objet PDO :
    $conn = new PDO($dsn, $config['dbuser'], $config['dbpass']);

    // On envoi nos requetes en utf8 :
    $conn->exec("SET NAMES utf8");

    // On definit le mode de fetch par defaut :
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $conn;

  } catch (PDOException $e) {
    exit('BDD Erreur de connexion : ' . $e->getMessage());
  }
}