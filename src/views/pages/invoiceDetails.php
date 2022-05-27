<?php
use app\src\core\show\ShowInvoiceDetails;
use app\src\core\show\UpdateLink;
ob_start();
?>

<h1 class="my-5 text-center" >Facture : <span></span> </h1>

<table class= "table table-bordered caption-top">
    <caption class= "mb-3 ">Société liée à la facture</caption>
    <thead>
        <tr>
            <th class="text-center fw-bold">Nom</th>
            <th class="text-center fw-bold">TVA</th>
            <th class="text-center fw-bold">Type société</th>
            <?= $update = ( $_SESSION['details_invoice'][1][0]['id_company'] == '/' ) ? '' : '<th></th>' ; ?>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($_SESSION['details_invoice'][1] as $value) {
                $exist = ( $value['id_company'] == '/' ) ? false : true;
                if ( !$exist ) {
                    ShowInvoiceDetails::displayCompany2($value['name'], $value['VAT'], $value['id_type']);
                } else {
                    ShowInvoiceDetails::displayCompany($value['name'], $value['VAT'], $value['id_type'], 'entreprise', $value['id_company']);
                }
            }
        ?>
    </tbody>
</table>

<table class= "table table-bordered caption-top">
    <caption class= "mb-3">Personne de contact</caption>
    <thead>
        <tr>
            <th class="text-center fw-bold">Nom</th>
            <th class="text-center fw-bold">Email</th>
            <th class="text-center fw-bold">Phone</th>
            <?= $update = ( $_SESSION['details_invoice'][2][0]['id_contact'] == '/' ) ? '' : '<th></th>' ; ?>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($_SESSION['details_invoice'][2] as $value) {
                $exist = ( $value['id_contact'] == '/' ) ? false : true;

                if ( !$exist ) {
                    ShowInvoiceDetails::displayContact2($value['lastname'], $value['email'], $value['phone_number']);
                } else {
                    ShowInvoiceDetails::displayContact($value['lastname'], $value['email'], $value['phone_number'], 'contact', $value['id_contact']);
                }
                
            }
        ?>
    </tbody>
</table>

<?php UpdateLink::update('facture', $_SESSION['details_invoice'][0]['id_invoice'], 'la facture') ?>

<?php 
$content = ob_get_clean();
require __DIR__. '/../layout.php';