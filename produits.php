<?php
// header
require_once __DIR__ . ('/utilities/header.php');
// fonction avec requete sql pour recuperer des donnees
require_once __DIR__ . ('/function/produits.fn.php');
// code de la section de tri avec if else et html
require_once __DIR__ . ('/utilities/tri-prix.php');
?>


<!-- Section des produits -->
<section>
<div class="row row-cols-1 row-cols-md-3 m-auto justify-content-center ">
  
<!-- card des produits -->
  <?php require_once __DIR__ . ('/utilities/produits-card.php'); ?>

</div>
</section>
<!-- footer -->
<?php require_once __DIR__ . '/utilities/footer.php'; ?>