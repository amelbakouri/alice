<?php
// Définit le domaine de base pour les pages
$domain = 'med2/';

// URL de la page d'accueil
$index_page = $domain;

// URL de la page des produits
$produits_page = $domain . 'produits.php';

// URL de la page de contact
$contact_page = $domain . 'contact.php';

// URL de la page de produit
$produit_page = $domain . 'produit.php';

// Obtient l'URL actuelle
$current_url = $_SERVER['SCRIPT_NAME'];

// Détermine le titre de la page en fonction de l'URL actuelle
// switch (true) est utilisé pour vérifier plusieurs conditions. Chaque case dans le switch est une expression qui renvoie un booléen. Si l’expression est vraie, le code associé à ce case est exécuté.
switch (true) {
    case strpos($index_page, $current_url) || strpos($index_page . 'index.php', $current_url):
        // Titre pour la page d'accueil
        $title = 'La boutique santé de Wonderland Pharma';
        // Id pour le body de la page d'accueil'
        $bodyId = 'home';
        break;

    case strpos($produits_page, $current_url):
        // Titre pour la page des produits
        $title = 'Nos Produits santé Wonderland Pharma';
        // Id pour le body de la page des produits
        $bodyId = 'products';
        break;

    case strpos($contact_page, $current_url):
        // Titre pour la page de contact
        $title = 'Contactez-nous';
        // Id pour le body de la page contact
        $bodyId = 'contact';
        break;

    case strpos($produit_page, $current_url):
        // Titre pour la page de contact
        $title = 'produit';
        // Id pour le body de la page contact
        $bodyId = 'produit';
        break;
};


// Liens de navigation et titre des liens stockés dans un tableau multidimensionnel
$navlinks = [
    'accueil' => [
        'link_url' => '/',
        'link_url2' => '/index.php',
        'link_title' => 'Accueil',
    ],
    'produits' => [
        'link_url' => '/produits.php',
        'link_url2' => '',
        'link_title' => 'Produits',
    ],
    'contact' => [
        'link_url' => '/contact.php',
        'link_url2' => '',
        'link_title' => 'Contact',
    ],

];

// Fonction pour déterminer si une page est active
// Elle prend trois arguments : l'URL actuelle, l'URL de la page à vérifier et une URL de secours optionnelle
function isActive($current_url, $url, $url2){
    if ($current_url === $url || $current_url === $url2) {
        // Retourne 'active' si l'URL actuelle correspond à l'URL donnée
        return 'active';
    } else {
        // Retourne une chaîne vide dans le cas contraire
        return '';
    }
};
