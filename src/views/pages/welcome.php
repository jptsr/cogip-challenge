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
                    ShowInvoices::listInvoices($value[0], $value[1], $value[2]);
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
                    ShowContacts::listContacts($value[0], $value[1], $value[2], $value[3]);
                    // echo $value[0];
                    // echo $value[1];
                    // echo $value[2];
                    // echo $value[3];
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
                    ShowCompanies::listCompanies($value[0], $value[1], $value[2], $value[3]);
                }
            ?>
        </tbody>
    </table>

<?php
$content = ob_get_clean();
require __DIR__. '/../layout.php';