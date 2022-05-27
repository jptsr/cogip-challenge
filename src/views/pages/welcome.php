<?php
use app\src\core\show\ShowCompanies;
use app\src\core\show\ShowContacts;
use app\src\core\show\ShowInvoices;
ob_start();
?>

<div class="container mt-5">
    <h1 class="text-center mb-5" >Bienvenue à la COGIP</h1>
    <p>Bonjour <?= $_SESSION['username'] ?> !</p>
    <?= $_SESSION['non_admin'] = ( empty($_SESSION['non_admin']) ) ? '' : $_SESSION['non_admin'] ?>

    <table class= "table table-bordered caption-top" >
        <caption class= "mb-3" >Dernières factures :</caption>
        <thead>
            <tr>
                <th  class="text-center fw-bold " >Numéro facture</th>
                <th class="text-center fw-bold" >Date</th>
                <th class="text-center fw-bold" >Société</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ( $_SESSION['list_last_invoices'] as $value ) {
                    ShowInvoices::listInvoices($value['facture_number'], $value['date'], $value['name'], $value['id_invoice']);
                }
            ?>
        </tbody>
    </table>

    <table class= "table table-bordered caption-top" >
        <caption  class= "mb-3"   >Derniers contacts :</caption>
        <thead>
            <tr>
                <th class="text-center fw-bold" >Nom </th>
                <th class="text-center fw-bold" >Téléphone</th>
                <th class="text-center fw-bold" >E-mail</th>
                <th class="text-center fw-bold" >Société</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ( $_SESSION['list_last_contacts'] as $value ) {
                    ShowContacts::listContactsNoAdmin($value['lastname'], $value['phone_number'], $value['email'], $value['name'], $value['id_contact']);
                }
            ?>
        </tbody>
    </table>

    <table class= "table table-bordered caption-top" >
        <caption class= "mb-3 "  >Dernières sociétés :</caption>
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
            ?>
        </tbody>
    </table>
</div>
<?php
$content = ob_get_clean();
require __DIR__. '/../layout.php';