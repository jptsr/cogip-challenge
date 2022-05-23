<?php

use app\src\core\show\ShowContactDetails;

 ob_start(); ?>

<div class="container">
    <h1 class="text-center mb-5 mt-5"  >Contact : <span></span> </h1>
        <p class="fw-bold">Contact : <span><?= $_SESSION['details_contact'][0]['lastname'] ?></span> </p>
        <p class="fw-bold">Société : <span><?= $_SESSION['details_contact'][0]['name'] ?></span> </p>
        <p class="fw-bold">Email : <span><?= $_SESSION['details_contact'][0]['email'] ?></span> </p>
        <p class="fw-bold">Phone : <span><?= $_SESSION['details_contact'][0]['phone_number'] ?></span> </p>
        
    <table class= "table table-bordered caption-top">

        <caption class= "mb-3 fs-2"> Contact pour les factures :</caption>
        <thead>
            <tr>
                <th class=" fw-bold" >N°facture</th>
                <th class=" fw-bold" >Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($_SESSION['details_contact'][1] as $value) {
                    ShowContactDetails::displayInvoices($value['facture_number'], $value['date']);
                }
            ?>
        </tbody>
    </table>    
</div>    

<?php 
$content = ob_get_clean();
require __DIR__. '/../layout.php';