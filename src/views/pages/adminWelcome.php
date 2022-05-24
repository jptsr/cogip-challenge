<?php

use app\src\core\show\ShowCompanies;
use app\src\core\show\ShowContacts;
use app\src\core\show\ShowInvoices;

 ob_start(); ?>
<div class="container">
    <h1 class="text-center" >Bienvenue à la COGIP</h1>
    <p>Bonjour Jean Christian !</p>
    <p>Que souhaitez-vous faire aujourd'hui ?</p>

    <button><img src="./assets/img/plus.png" alt="plus" width="25" height="25"> Nouvelle facture  </button>
    <button class=" mx-3" ><img src="./assets/img/plus.png" alt="plus" width="25" height="25">Nouveau contact </button>
    <button><img src="./assets/img/plus.png" alt="plus" width="25" height="25">Nouvelle société</button>

    <table class= "table table-bordered caption-top mt-5">
        <caption class= "mb-3 fs-2" >Dérnieres factures :</caption>
        <thead>
            <tr>
                <th class="text-center" >Numéro facture</th>
                <th class="text-center" >Dates</th>
                <th class="text-center" >Société</th>
                <th class="text-center" ></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ( $_SESSION['list_last_invoices'] as $value ) {
                    ShowInvoices::listInvoicesAdmin($value['facture_number'], $value['date'], $value['name'], $value['id_invoice']);
                }
            ?>
        </tbody>
    </table>


    <table class= "table table-bordered caption-top mt-5" >
        <caption class= "mb-3 fs-2" >Dérnieres contact :</caption>
        <thead>
            <tr>
                <th class="text-center">Nom</th>
                <th class="text-center">Téléphone</th>
                <th class="text-center">e-mail</th>
                <th class="text-center">Société</th>
                <th class="text-center"></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ( $_SESSION['list_last_contacts'] as $value ) {
                    ShowContacts::listContactsAdmin($value['lastname'], $value['phone_number'], $value['email'], $value['name'], $value['id_contact']);
                }
            ?>
        </tbody>
    </table>

    <table class= "table table-bordered caption-top mt-5">
        <caption class= "mb-3 fs-2" >Dérnieres société :</caption>
        <thead>
            <tr>
                <th class="text-center" >Nom</th>
                <th class="text-center" >TVA</th>
                <th class="text-center" >Pays</th>
                <th class="text-center" >Type</th>
                <th class="text-center" ></th>          
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ( $_SESSION['list_last_companies'] as $value ) {
                    ShowCompanies::listCompaniesAdmin($value['name'], $value['VAT'], $value['country'], $value['type'], $value['id_company']);
                }
            ?>
        </tbody>
    </table>
</div>

<?php
$content = ob_get_clean();
require __DIR__. '/../layout.php';