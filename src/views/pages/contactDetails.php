<?php
use app\src\core\show\ShowContactDetails;
use app\src\core\show\UpdateLink;
ob_start();
?>

<div class="container">
    <h1 class="text-center mb-5 mt-5"  >Contact : <span></span> </h1>
        <p class="fw-bold">Contact : <span><?= $_SESSION['details_contact'][0]['lastname'] ?></span> </p>
        <p class="fw-bold">Société : <span><?= $_SESSION['details_contact'][0]['name'] ?></span> </p>
        <p class="fw-bold">Email : <span><?= $_SESSION['details_contact'][0]['email'] ?></span> </p>
        <p class="fw-bold">Phone : <span><?= $_SESSION['details_contact'][0]['phone_number'] ?></span> </p>
        
    <table class= "table table-bordered caption-top">

        <caption class= "mb-3 "> Contact pour les factures :</caption>
        <thead>
            <tr>
                <th class="text-center fw-bold" >N°facture</th>
                <th class="text-center fw-bold" >Date</th>
                <?= $update = ( $_SESSION['details_contact'][1][0]['id_invoice'] == '/' ) ? '' : '<th></th>' ; ?>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($_SESSION['details_contact'][1] as $value) {
                    $exist = ( $value['id_invoice'] == '/' ) ? false : true;
                    
                    if ( !$exist ) {
                        ShowContactDetails::displayInvoices2($value['facture_number'], $value['date']);
                    } else {
                        ShowContactDetails::displayInvoices($value['facture_number'], $value['date'], 'facture', $value['id_invoice']);
                    }
                }
            ?>
        </tbody>
    </table>

    <?php UpdateLink::update('contact', $_SESSION['details_contact'][0]['id_contact'], 'le contact') ?>
</div>    

<?php 
$content = ob_get_clean();
require __DIR__. '/../layout.php';