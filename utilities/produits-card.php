<?php
// boucle d'une seule card pour chaque medicament en passant par le tableau de données sql
//  stocké dans $medicament.
// Pour l'image on passe par le pathImg qui est le chemin d'accés aux images stocké dans la base de données
 foreach ($medicaments as $medicament) : ?>
<div class="card col text-center m-3 p-0 rounded-0 border-0 text-blue" style="width: 300px;">
      <img src="./img/produits/<?= $medicament["pathImg"] ?>" class="card-img-top rounded-0" alt="<?= $medicament["name"] ?>">
      <div class="card-body">
        <h5 class="card-title"><?= $medicament["name"] ?></h5>
        <p class="card-text"><?= $medicament["description"] ?></p>
        <p class="card-text"><small class="text-muted">Prix: <?= $medicament["prix"] ?></small></p>
        <a href="produit.php?id=<?= $medicament['id'] ?>" class="btn bg-blue text-white rounded-0">Acheter</a>
      </div>
    </div>
<?php endforeach; ?>