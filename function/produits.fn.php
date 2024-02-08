<?php
// fonction qui recupere les infos et l'image lié aux medicaments grâce à innerjoin
function findMedicine ($conn) {
    $sql = "SELECT medicament.name, medicament.id, medicament.description,
    medicament.prix, imgmedicament.pathImg
    FROM `medicament`
    INNER JOIN imgmedicament
    ON medicament.imgID = imgmedicament.id;";
    // On stoque la requete en lui specifiant le lieu et en préparant et Exécutant une requête SQL avec query
    $requete = $conn->query($sql);
    // Cette ligne récupère toutes les lignes de résultats de la requête SQL précédemment exécutée à l'aide de la méthode fetchAll(). Cela retourne un tableau multidimensionnel contenant toutes les lignes de résultats.
    $medicament = $requete->fetchAll();
    return $medicament;
}

// fonction qui recupere les infos et l'image lié 
// aux medicaments mais dans l'ordre que la personne
//  aura choisis lors du tri grâce au $order
function findBestMedicine ($conn, $order ) {
    $sql = "SELECT *
    FROM `medicament` 
    INNER JOIN imgmedicament
    ON medicament.imgID = imgmedicament.id
    ORDER BY prix $order ;";
    $requete = $conn->query($sql);
    $medicaments = $requete->fetchAll();
    return $medicaments;
}

//fonction pour recuperer qu'une seule potion selon 
// la page où la personne est grace au $currentID
function findOneMedicine ($conn, $currentId) {
    $sql = "SELECT medicament.name, medicament.description,
    medicament.prix, imgmedicament.pathImg
    FROM `medicament`
    INNER JOIN imgmedicament
    ON medicament.imgID = imgmedicament.id
    WHERE medicament.id = $currentId;";
    $requete = $conn->query($sql);
    $medicament = $requete->fetch();
    return $medicament;
}



