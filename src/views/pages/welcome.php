<?php ob_start(); ?>
<div class="container mt-5">
    <h1 class="text-center mb-5" >Bienvenue à la COGIP</h1>
    <p>Bonjour !</p> 

    <table class= "table table-bordered caption-top" >
        <caption class= "mb-3 fs-2" >Dernières factures :</caption>
        <thead>
            <tr>
                <th  class="text-center fw-bold " >Numéro facture</th>
                <th class="text-center fw-bold" >Dates</th>
                <th class="text-center fw-bold" >Société</th>
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

    <table class= "table table-bordered caption-top" >
        <caption  class= "mb-3 fs-2"   >Dernières contact :</caption>
        <thead>
            <tr>
                <th class="text-center fw-bold" >Nom </th>
                <th class="text-center fw-bold" >Téléphone</th>
                <th class="text-center fw-bold" >e-mail</th>
                <th class="text-center fw-bold" >Société</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <table class= "table table-bordered caption-top" >
        <caption class= "mb-3 fs-2"  >Dernières sociétés :</caption>
        <thead>
            <tr>
                <th class="text-center fw-bold" >Nom </th>
                <th class="text-center fw-bold" >TVA</th>
                <th class="text-center fw-bold" >Pays</th>
                <th class="text-center fw-bold" >Type</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

<?php
$content = ob_get_clean();
require __DIR__. '/../layout.php';