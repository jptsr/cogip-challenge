<?php
use app\src\core\show\ShowCompanyDetails;
use app\src\core\show\UpdateLink;
ob_start();
?>

<h1>Société : <span><?= $_SESSION['details_company'][0]['name'] ?></span> </h1>
<p>N° TVA : <span><?= $_SESSION['details_company'][0]['VAT'] ?></span> </p>
<p>Type : <?= $_SESSION['details_company'][0]['id_type'] ?></p>

<table class="table table-bordered caption-top">
    <caption class="mb-3">Personnes de contact</caption>
    <thead>
        <tr>
            <th class="text-center fw-bold"> Nom</th>
            <th class="text-center fw-bold">Phone</th>
            <th class="text-center fw-bold">Email</th>
            <?= $update = ( $_SESSION['details_company'][1][0]['id_contact'] == '/' ) ? '' : '<th></th>' ; ?>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($_SESSION['details_company'][1] as $value) {
            $exist = ( $value['id_contact'] == '/' ) ? false : true;
            if ( !$exist ) {
                ShowCompanyDetails::displayContacts2($value['lastname'], $value['phone_number'], $value['email']);
            } else {
                ShowCompanyDetails::displayContacts($value['lastname'], $value['phone_number'], $value['email'], 'contact', $value['id_contact']);
            }
        }
        ?>
    </tbody>
</table>

<table class="table table-bordered caption-top">
    <caption class="mb-3">Factures</caption>
    <thead>
        <tr>
            <th class="text-center fw-bold">N° facture</th>
            <th class="text-center fw-bold">Date</th>
            <th class="text-center fw-bold">Personne de contact</th>
            <?= $update = ( $_SESSION['details_company'][1][0]['id_invoice'] == '/' ) ? '' : '<th></th>' ; ?>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($_SESSION['details_company'][2] as $value) {
            $exist = ( $value['id_invoice'] == '/' ) ? false : true;
            if ( !$exist ) {
                ShowCompanyDetails::displayContacts2($value['facture_number'], $value['date'], $value['lastname']);
            } else {
                ShowCompanyDetails::displayContacts($value['facture_number'], $value['date'], $value['lastname'], 'facture', $value['id_invoice']);
            }
        }
        ?>
    </tbody>
</table>

<?php UpdateLink::update('entreprise', $_SESSION['details_company'][0]['id_company'], 'la société') ?>

<?php
$content = ob_get_clean();
require __DIR__ . '/../layout.php';
