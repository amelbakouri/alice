 <!-- Card qui montre les infos selon le produit choisit.
 Pour l'image on passe par le pathImg qui est le chemin d'accés aux images stocké dans la base de données -->

<div class="mt-5" style=" display: flex; flex-direction:column; align-items: center;">
<div class="card col text-center m-3 p-0 rounded-0 border-0" style="width: 80vh;">
<div class="row g-0">
    <div class="col-md-7">
    <img src="./img/produits/<?= $medicament["pathImg"] ?>" class="img-fluid rounded-0" 
    style="height: 50vh; width:47vh;" alt="<?= $medicament["name"] ?>">
    </div>
    <div class="col-md-5">
    <div class="card-body">
        <h5 class="card-title"><?= $medicament["name"] ?></h5>
        <p class="card-text"><?= $medicament["description"] ?></p>
        <p class="card-text"><small class="text-muted">Prix: <?= $medicament["prix"] ?></small></p>
        <a href="#" class="btn bg-blue text-white rounded-0">Acheter</a>
        </div>
    </div>
  </div>
</div>
</div>

