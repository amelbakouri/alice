<?php
// header
require_once __DIR__ . ('/utilities/header.php');
// fonction avec requete sql pour recuperer des donnees
require_once __DIR__ . ('/function/medecin.fn.php');
?>

<!-- Section Présentation titre + paragraphe -->
<section>
    <div class="container my-5">
        <h2 class="d-flex justify-content-center fs-1">Présentation :</h2>
        <p class="fs-22">Bienvenue au laboratoire pharmaceutique Wonderland Pharma, un établissement unique où la science et la magie se rencontrent pour créer des médicaments extraordinaires.
            Notre équipe dévouée de chercheurs et d'alchimistes travaille sans relâche pour développer des formulations révolutionnaires qui permettent à nos clients de changer de taille, de couleur,
            ou même d'acquérir des pouvoirs magiques. Inspiré par l'univers fantastique de Lewis Carroll, notre laboratoire est déterminé à repousser les limites de la réalité et à offrir des expériences
            pharmacologiques inédites. Que vous cherchiez à explorer de nouveaux horizons dimensionnels ou à embrasser votre côté fantastique, notre gamme de produits innovants est conçue pour émerveiller et surprendre.
            Rejoignez-nous dans cette aventure extraordinaire où la science et la magie convergent pour créer des solutions pharmaceutiques uniques au pays des rêves et de l'émerveillement.
        </p>
    </div>
</section>

<!-- Section Médecins titre + cards -->
<section>
    <div class="row row-cols-1 row-cols-md-2 m-auto justify-content-center ">
        <!-- card des medecins -->
        <?php
        // stock les données de la function dans $docteurs
        $docteurs = findDoctor($conn);
        require_once __DIR__ . ('/utilities/medecin-card.php');
        ?>

</section>

<!-- footer -->
<?php require_once __DIR__ . ('/utilities/footer.php'); ?>

