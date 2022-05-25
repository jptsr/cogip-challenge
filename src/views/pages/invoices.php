<?php
use app\src\core\show\ShowInvoices;
ob_start();
?>

<div class="container ">
  <div class="row  mb-5 mt-5">
    <h1 class="text-center">COGIP : Listing des factures</h1>
  </div>
  
  <div class="row justify-content-center ">
    <div class="col-8 mt-5 ">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="text-center fw-bold">Numero facture</th>
            <th class="text-center fw-bold">Date</th>
            <th class="text-center fw-bold">Société</th>
            <th class="text-center fw-bold">Type</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ( $_SESSION['all_invoices'] as $value ) {
              ShowInvoices::invoices($value['facture_number'], $value['date'], $value['name'], $value['type'], $value['id_invoice']);
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>     


</div>

<?php 
$content = ob_get_clean();
require __DIR__. '/../layout.php';