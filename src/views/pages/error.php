<?php ob_start(); ?>

<h1 class="text-center text-danger mt-5">Attention!</h1>
<h2 class="text-center mt-5">Les informations envoyées ne permettent pas de vous identifier</h2>

<a class="text-dark" href="/connexion">Connexion</a>

<?php
$content = ob_get_clean();
require __DIR__. '/../layout.php';