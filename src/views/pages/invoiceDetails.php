<?php ob_start(); ?>

<h1>Facture : <span></span> </h1>

<table>
    <caption>Société liée à la facture</caption>
    <thead>
        <tr>
            <th>Nom</th>
            <th>TVA</th>
            <th>Type société</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>


<table>
    <caption>Personne de contact</caption>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        
    </tbody>
</table>

<?php 
$content = ob_get_clean();
require __DIR__. '/../layout.php';