<?php ob_start(); ?>

<h1>Société : <span></span> </h1>
<p>N° TVA : <span></span> </p>
<p>Type : Client</p>

<table class= "table table-bordered caption-top">

    <caption class= "mb-3 fs-2">Personnes de contact</caption>
    <thead>
        <tr>
            <th class="text-center fw-bold" > Nom</th>
            <th class="text-center fw-bold" >Phone</th>
            <th class="text-center fw-bold" >Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>

<table class= "table table-bordered caption-top">
    <caption class= "mb-3 fs-2" >Factures</caption>
    <thead>
        <tr>
            <th class="text-center fw-bold" >N° facture</th>
            <th class="text-center fw-bold" >Date</th>
            <th class="text-center fw-bold" >Personne de contact</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
        </tr>
        
    </tbody>
</table>

<?php
$content = ob_get_clean();
require __DIR__. '/../layout.php';