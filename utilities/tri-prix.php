<?php
// si la valeur choisis dans la selection est egale à ASC/DESC il remplace $order dans la
// fontion findBestMedicine par la valeur choisis ce qui modifiera l'ordre des prix.
// S'il n'y a aucun choix il mettra la fonction qui permet d'avoir l'ordre selon la base de données.
if (isset($_POST['mySelect']) && $_POST['mySelect'] == 'ASC') {
    $medicaments = findBestMedicine($conn, 'ASC');
  } else if (isset($_POST['mySelect']) && $_POST['mySelect'] == 'DESC') {
    $medicaments = findBestMedicine($conn, 'DESC');
  } else {
    $medicaments = findMedicine($conn);
  }
 ?>

<!--  Affichage du formulaire pour filtrer le prix des médicaments grâce aux values -->
<form action="" method="post" class="row align-items-center justify-content-end p-3 m-3">
  <div class="col-4">
    <select class="form-select form-select-sm  " name="mySelect" aria-label="Default select example">
      <option selected>Trier par prix</option>
      <option value="ASC">moins cher</option>
      <option value="DESC">plus cher</option>
    </select>
  </div>
  <div class="col-4">
    <!-- bouton pour soumettre le resultat -->
    <input type="submit" class="btn bg-blue text-white rounded-0">
  </div>
</form>