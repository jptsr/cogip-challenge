<?php ob_start(); ?>

<!-- <h1>List Invoices</h1> -->

<div class="container ">
  <div class="row  mb-5 mt-5">
    <h2 class="text-center">COGIP : Listing des factures</h2>
  </div>
  
  <div class="row justify-content-center ">
    <div class="col-8 mt-5 ">
      <table class="table table-bordered">
      <!-- Afficher la liste des invoices -->
        <thead>
          <tr>
            <th class="text-center fw-bold">Numero facture</th>
            <th class="text-center fw-bold">Dates</th>
            <th class="text-center fw-bold">Société</th>
            <th class="text-center fw-bold">Type</th>
          </tr>
        </thead>
        <tbody>
          <!-- loop  -->
          <tr>
            <td><a href="#"></a></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>     


</div>

<?php 
$content = ob_get_clean();
require __DIR__. '/../layout.php';