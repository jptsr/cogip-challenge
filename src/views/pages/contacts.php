<?php ob_start(); ?>

<!-- <h1>List Contacts</h1> -->

<div class="container ">
  <div class="row  mb-5 mt-5">
    <h2 class="text-center">COGIP : Annuaire des contacts</h2>
  </div>
  
  <div class="row justify-content-center ">
    <div class="col-8 mt-5 ">
      <table class="table table-bordered">
      <!-- Afficher la liste des contacts -->
        <thead>
          <tr>
            <th class="text-center fw-bold"> Nom</th>
            <th class="text-center fw-bold"> Téléphone</th>
            <th class="text-center fw-bold"> e-mail</th>
            <th class="text-center fw-bold"> Société</th>
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