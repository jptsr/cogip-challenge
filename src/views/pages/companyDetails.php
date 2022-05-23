<?php ob_start(); ?>

<?php
echo '<pre>';
var_dump($_SESSION['details_company']);
echo '<pre>';
?>

<?= $_SESSION['details_company'][1][0]['lastname'] ?>

<?= $_SESSION['details_company'][2][0]['lastname'] ?>

<h1>Société : <span><?= $_SESSION['details_company'][0]['name'] ?></span> </h1>
<p>N° TVA : <span><?= $_SESSION['details_company'][0]['VAT'] ?></span> </p>
<p>Type : <?= $_SESSION['details_company'][0]['id_type'] ?></p>

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