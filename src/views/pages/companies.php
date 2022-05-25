<?php
use app\src\core\show\ShowCompanies;
ob_start();
?>

<div class="container ">
  <div class="row  mb-5 mt-5">
    <h1 class="text-center">COGIP : Annuaire des sociétés</h1>
  </div>

  <div class="row justify-content-center ">
    <div class="col-8 ">
      <table class="table table-bordered caption-top">
        <caption class="mb-3 ">Clients</caption>
        <thead>
          <tr>
            <th class="text-center fw-bold"> Nom</th>
            <th class="text-center fw-bold"> TVA</th>
            <th class="text-center fw-bold"> Pays</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php
            for ($i = 0; $i < count($_SESSION['all_companies'][0]); $i++) {
              $name = $_SESSION['all_companies'][0][$i]['name'];
              $VAT = $_SESSION['all_companies'][0][$i]['VAT'];
              $country = $_SESSION['all_companies'][0][$i]['country'];
              $id = $_SESSION['all_companies'][0][$i]['id_company'];

              ShowCompanies::companies($name, $VAT, $country, $id);
            }
          ?>
      </table>
    </div>
  </div>

  <div class="row justify-content-center ">
    <div class="col-8 ">
      <table class="table table-bordered caption-top">
        <caption class="mb-3 mt-5 ">Fournisseurs</caption>
      <!-- Afficher la liste des Fournisseurs  -->
        <thead>
          <tr>
            <th class="text-center fw-bold"> Nom</th>
            <th class="text-center fw-bold"> TVA</th>
            <th class="text-center fw-bold"> Pays</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
            for ($i = 0; $i < count($_SESSION['all_companies'][1]); $i++) {
              $name = $_SESSION['all_companies'][1][$i]['name'];
              $VAT = $_SESSION['all_companies'][1][$i]['VAT'];
              $country = $_SESSION['all_companies'][1][$i]['country'];
              $id = $_SESSION['all_companies'][1][$i]['id_company'];

              ShowCompanies::companies($name, $VAT, $country, $id);
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>


</div>

<?php
$content = ob_get_clean();
require __DIR__ . '/../layout.php';
