</main>
<footer class="py-3 my-4 footer">
    <div class="waves">
        <div class="wave z-0 opacity-100" id="wave1"></div>
        <div class="wave z-1 opacity-50" id="wave2"></div>
        <div class="wave z-2 opacity-25" id="wave3"></div>
        <div class="wave z-3 opacity-75" id="wave4"></div>
    </div>

    <ul class="nav justify-content-center pb-3 mb-3 text-white">
        <?php
        $socialMedia = array("Home", "Produits", "Prix", "Politique de confidentialité", "À propos");

        foreach ($socialMedia as $media) {
            echo '<li class="nav-item"><a href="#" class="nav-link px-2 text-white">' . $media . '</a></li>';
        }
        ?>
    </ul>

    <p class="text-center text-white">
        <!-- La fonction PHP Date est utilisé pour afficher l’année en cours en PHP. Y = Année -->
        Copyright <?= date('Y') ?> Tous droits réservés.
    </p>

</footer>
</body>

</html>