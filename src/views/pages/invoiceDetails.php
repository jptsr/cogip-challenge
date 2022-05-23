<?php

use app\src\core\show\ShowInvoiceDetails;

 ob_start(); ?>

<h1>Facture : <span></span> </h1>

<table>
    <caption>Société liée à la facture</caption>
    <thead>
        <tr>
            <th>Nom</th>
            <th>TVA</th>
            <th>Type société</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($_SESSION['details_invoice'][1] as $value) {
                ShowInvoiceDetails::displayCompany($value['name'], $value['VAT'], $value['type']);
            }
        ?>
    </tbody>
</table>


<table>
    <caption>Personne de contact</caption>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($_SESSION['details_invoice'][2] as $value) {
                ShowInvoiceDetails::displayContact($value['lastname'], $value['email'], $value['phone_number']);
            }
        ?>
    </tbody>
</table>

<?php 
$content = ob_get_clean();
require __DIR__. '/../layout.php';