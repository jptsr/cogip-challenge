<?php ob_start(); ?>

<div class="container text-center bg-info bg-gradient py-5 mt-3">
  
  <h2 class="mb-5 mt-5 text-danger text-center">Erreur 404</h2>
  <h3 class="mt-5 mb-5 text-center">Désolé, la page que vous chechez est introuvable</h3>
  <img src="./assets/img/404.jpg" alt="error"></div>
  
</div>

<?php
$content = ob_get_clean();
require __DIR__. '/../layout.php';