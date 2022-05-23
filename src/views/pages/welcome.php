<?php

use app\src\core\show\ShowCompanies;
use app\src\core\show\ShowContacts;
use app\src\core\show\ShowInvoices;

 ob_start(); ?>
<div class="container">
    <h1 class="text-center" >Bienvenue à la COGIP</h1>
    <p>Bonjour <?= $_SESSION['username'] ?> !</p> 

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
            <?php 
                foreach ( $_SESSION['list_last_invoices'] as $value ) {
                    ShowInvoices::listInvoices($value['facture_number'], $value['date'], $value['name']);
                }
            ?>
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
            <?php
                foreach ( $_SESSION['list_last_contacts'] as $value ) {
                    ShowContacts::listContacts($value['lastname'], $value['phone_number'], $value['email'], $value['name']);
                }
            ?>
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
            <?php 
                foreach ( $_SESSION['list_last_companies'] as $value ) {
                    ShowCompanies::listCompanies($value['name'], $value['VAT'], $value['country'], $value['type'], $value['id_company']);
                }
                // echo '<pre>';
                // var_dump($_SESSION['list_last_companies']);
                // echo '<pre>';
            ?>
        </tbody>
    </table>

<?php
$content = ob_get_clean();
require __DIR__. '/../layout.php';