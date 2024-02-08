<?php
// boucle d'une seule card pour chaque docteur en passant par le tableau de données sql
//  stocké dans $docteur.
// Pour l'image on passe par le pathImg qui est le chemin d'accés aux images stocké dans la base de données
foreach ($docteurs as $docteur) :
?>
    <div class="card col-6 text-center m-3 p-0 rounded-0 border-0 text-blue" style="width: 300px;">
        <img src="/img/docteurs/<?= $docteur["pathImg"] ?>" class="card-img-top rounded-0" alt="<?= $docteur["name"] ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $docteur["name"] ?></h5>
            <p class="card-text"><?= $docteur["description"] ?></p>
        </div>
    </div>
<?php endforeach; ?>

