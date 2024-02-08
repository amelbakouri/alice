<section class="col-12 col-sm-8 m-auto">
  <h2 class="text-center text-light text-blue">Formulaire de contact</h2>
  <form class="p-4 mb-5 " action="" method="GET">
    <div class="col d-flex flex-column justify-content-center w-75 container text-light">
      <?php
      $input1 = [
        array(
          "for" => "prenom",
          "type" => "text",
          "name" => "prenom",
          "id" => "prenom",
          "textlabel" => "Prénom",
          "div_class" => "col",
          "input_class" => "form-control rounded-0"
        ),
        array(
          "for" => "nom",
          "type" => "text",
          "name" => "nom",
          "id" => "nom",
          "textlabel" => "Nom",
          "div_class" => "col",
          "input_class" => "form-control rounded-0"
        ),
      ];
      $input2 = [
        array(
          "for" => "email",
          "type" => "email",
          "name" => "email",
          "id" => "email",
          "textlabel" => "Email",
          "div_class" => "mb-3",
          "input_class" => "form-control rounded-0"
        ),
        array(
          "for" => "sujet",
          "type" => "text",
          "name" => "sujet",
          "id" => "sujet",
          "textlabel" => "Sujet",
          "div_class" => "mb-3",
          "input_class" => "form-control rounded-0"
        ),
      ];

      // Créer le premier élément div englobant
      // echo "<div class=\"d-flex flex-column justify-content-center w-75 container\">";

      // Créer le deuxième élément div avec la classe row
      echo "<div class=\"row row-cols-md-2 row-cols-1 mb-3\">";

      // Parcourir le tableau avec une boucle foreach
      foreach ($input1 as $item) {
        // Récupérer les valeurs du tableau
        $for = $item["for"];
        $type = $item["type"];
        $name = $item["name"];
        $id = $item["id"];
        $textLabel = $item["textlabel"];
        $div_class = $item["div_class"];
        $input_class = $item["input_class"];

        // Créer un élément div avec la classe correspondante
        echo "<div class=\"$div_class\">";

        // Créer un élément label avec les attributs correspondants
        echo "<label for=\"$for\" class=\"form-label\">$textLabel</label>";

        // Créer un élément input avec les attributs et la classe correspondants
        echo "<input type=\"$type\" class=\"$input_class\" name=\"$name\" id=\"$id\"/>";

        // Fermer l'élément div
        echo "</div>";
      }

      // Fermer le deuxième élément div
      echo "</div>";

      foreach ($input2 as $item) {
        // Récupérer les valeurs du tableau
        $for = $item["for"];
        $type = $item["type"];
        $name = $item["name"];
        $id = $item["id"];
        $textLabel = $item["textlabel"];
        $div_class = $item["div_class"];
        $input_class = $item["input_class"];

        // Créer un élément div avec la classe correspondante
        echo "<div class=\"$div_class\">";

        // Créer un élément label avec les attributs correspondants
        echo "<label for=\"$for\" class=\"form-label\">$textLabel</label>";

        // Créer un élément input avec les attributs et la classe correspondants
        echo "<input type=\"$type\" class=\"$input_class\" name=\"$name\" id=\"$id\"/>";

        // Fermer l'élément div
        echo "</div>";
      }
      ?>

      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control rounded-0" id="message" name="message" rows="3"></textarea>
      </div>
      <div class="d-flex justify-content-center">
        <input type="submit" class="btn btn-primary rounded-0 bg-blue border-0">
      </div>
    </div>
  </form>

</section>

<?php

// Créer un tableau de données à afficher dans les cards
$input = array(
  array("prenom" => "prenom", "txt-p" => "Prénom"),
  array("nom" => "nom", "txt-n" => "Nom"),
  array("email" => "email", "txt-m" => "Mail"),
  array("sujet" => "sujet", "txt-s" => "Sujet"),
);

?>

<?php

// Récupère la valeur du paramètre 'prenom', 'nom' ... dans l'URL
// En utilisant la superglobale $_GET pour récupérer les valeurs des paramètres spécifiés dans l’URL de la requête HTTP
// Vérifie si les clés 'prenom', 'nom', 'email', et 'sujet' existent dans $_GET avant d'y accéder
// isset — Détermine si une variable est déclarée et est différente de null
// filter_var — Filtre une variable avec un filtre spécifique
// FILTER_SANITIZE_EMAIL : Supprime tous les caractères sauf les lettres, chiffres, et !#$%&'*+-=?^_`{|}~@.[]. 

if ($prenom = isset($_GET['prenom'])) {
  $prenom = htmlspecialchars($_GET['prenom']);
} else {
  $prenom = null;
}

// Opérateur Ternaire
$nom = isset($_GET['nom']) ? htmlspecialchars($_GET['nom']) : null;
$email = isset($_GET['email']) ? filter_var(($_GET['email']), FILTER_SANITIZE_EMAIL) : null;
$sujet = isset($_GET['sujet']) ? htmlspecialchars($_GET['sujet']) : null;
$message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : null;

// Vérification si les données saisies s'affichent
var_dump($prenom);
var_dump($nom);
var_dump($email);
var_dump($sujet);
var_dump($message);

?>