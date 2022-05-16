<?php ob_start(); ?>

<h1>List Contacts</h1>

<?php 
$content = ob_get_clean();
require __DIR__. '/../layout.php';