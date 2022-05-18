<?php ob_start(); ?>

<h1>Société : <span></span> </h1>
<p>N° TVA : <span></span> </p>
<p>Type : Client</p>

<table>
    <caption>Personnes de contact</caption>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Phone</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>

<table>
    <caption>Factures</caption>
    <thead>
        <tr>
            <th>N° facture</th>
            <th>Date</th>
            <th>Personne de contact</th>
        </tr>
    </thead>
    <tbody>
        
    </tbody>
</table>

<?php
$content = ob_get_clean();
require __DIR__. '/../layout.php';