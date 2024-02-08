<?php
// header
require_once __DIR__ . ('/utilities/header.php');
// fonction avec requete sql pour recuperer des donnees
require_once __DIR__ . ('/function/produits.fn.php');
// recupere les donnees d'une seule potion selon l'id du medicament dans l'URL
$medicament = findOneMedicine($conn, $_GET['id']);
?>

<?php 
// card du produit chosit.
require_once __DIR__ . ('/utilities/produit-card.php');
?>


