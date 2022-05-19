<?php ob_start(); ?>
<div class="container">
    <h1 class="text-center" >Bienvenue à la COGIP</h1>
    <p>Bonjour !</p> 

    <table class= "table table-bordered caption-top" >
        <caption class= "mb-3 fs-2">Dernières factures :</caption>
        <thead>
            <tr>
                <th class="text-center" >Numéro facture</th>
                <th class="text-center" >Dates</th>
                <th class="text-center" >Société</th>
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
        <caption class= "mb-3 fs-2">Dernières contact :</caption>
        <thead>
            <tr>
                <th class="text-center" >Nom </th>
                <th class="text-center" >Téléphone</th>
                <th class="text-center" >e-mail</th>
                <th class="text-center" >Société</th>
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

    <table class= "table table-bordered caption-top">
        <caption class= "mb-3 fs-2">Dernières sociétés :</caption>
        <thead>
            <tr>
                <th class="text-center" >Nom </th>
                <th class="text-center" >TVA</th>
                <th class="text-center" >Pays</th>
                <th class="text-center" >Type</th>
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
</div>



<?php
$content = ob_get_clean();
require __DIR__. '/../layout.php';