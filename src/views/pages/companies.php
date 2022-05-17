<?php ob_start(); ?>

<h1>List Companies</h1>
<div class="container ">
  <div class="row  mb-5 mt-5">
    <h2 class="text-center">COGIP : Annuaire des sociétés</h2>
  </div>
  
  <div class="row justify-content-center ">
    <div class="col-8 ">
      <h3 class="mb-3">Clients</h3>  
    </div>
  </div>

  <div class="row justify-content-center ">
    <div class="col-8 ">
      <table class="table">
      <!-- Afficher la liste des clients -->
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