<?php
require_once dirname(__DIR__) . ('/config/config.php');
require_once dirname(__DIR__) . ('/config/headerConfig.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- CSS Custom -->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title><?= $title ?></title>
</head>

<body id="<?= $bodyId ?>">
    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img src="../img/wonderland-pharma.png" alt="logo" class="w-75"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav fs-2">
                        <?php
                        // Génère dynamiquement une liste de liens de navigation en utilisant des données stockées dans un tableau multidimensionnel. 
                        // La liste est mise à jour automatiquement en fonction de l'URL actuelle.
                        foreach ($navlinks as $key => $value) {
                            echo "<li class=\"nav-item\"><a class=\"nav-link text-center " . isActive(
                                $current_url,
                                $value['link_url'],
                                $value['link_url2']
                            ) . "\"" . "href=\"" . $value['link_url'] . "\">" . $value['link_title'] . "</a></li>";
                        };
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>