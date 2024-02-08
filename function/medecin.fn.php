<?php
// fonction qui selectionne toutes les colonnes de la table medecin et de la table 
// imgmedecin grâce à un innerjoin qui joint les deux tableaux 
function findDoctor($conn){
    $sql = "SELECT *
    FROM `medecin`
    INNER JOIN imgmedecin 
    ON medecin.imgID = imgmedecin.id;";
    // On stoque la requete en lui specifiant le lieu et en préparant et 
    // Exécutant une requête SQL avec query
    $requete = $conn->query($sql);
    // Cette ligne récupère toutes les lignes de résultats de la requête SQL
    // précédemment exécutée à l'aide de la méthode fetchAll(). Cela retourne 
    // un tableau multidimensionnel contenant toutes les lignes de résultats.
    $medecin = $requete->fetchAll();
    return $medecin;
}