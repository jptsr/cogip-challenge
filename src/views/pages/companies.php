<?php ob_start(); ?>

<h1>List Companies</h1>
<div class="container ">
  <div class="row  mb-5 mt-5">
    <h2 class="text-center">COGIP : Annuaire des sociétés</h2>
  </div>
  
  <div class="row justify-content-center ">
    <div class="col-8 ">
      <table class="table table-bordered caption-top">
      <!-- Afficher la liste des clients -->
        <caption class="mb-3 fs-2">Clients</caption>
        <thead>
          <tr>
            <th class="text-center fw-bold"> Nom</th>
            <th class="text-center fw-bold"> TVA</th>
            <th class="text-center fw-bold"> Pays</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Raviga</td>
            <td>BE 0876654 665</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>    

  <div class="row justify-content-center ">
    <div class="col-8 ">
      <table class="table table-bordered caption-top">
        <caption class="mb-3 mt-5 fs-2">Fournisseurs</caption>
      <!-- Afficher la liste des Fournisseurs  -->
        <thead>
          <tr>
            <th class="text-center fw-bold"> Nom</th>
            <th class="text-center fw-bold"> TVA</th>
            <th class="text-center fw-bold"> Pays</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Belgalol</td>
            <td>BE 0876654 665</td>
            <td>Belgique</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>    


</div>

<?php
$content = ob_get_clean();
require __DIR__. '/../layout.php';