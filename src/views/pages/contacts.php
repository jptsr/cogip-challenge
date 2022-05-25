<?php
use app\src\core\show\ShowContacts;
ob_start();
?>

<div class="container ">
  <div class="row  mb-5 mt-5">
    <h1 class="text-center">COGIP : Listing des contacts</h1>
  </div>
  
  <div class="row justify-content-center ">
    <div class="col-8 mt-5 ">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="text-center fw-bold"> Nom</th>
            <th class="text-center fw-bold"> Téléphone</th>
            <th class="text-center fw-bold"> E-mail</th>
            <th class="text-center fw-bold"> Société</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            <?php
              foreach ( $_SESSION['all_contacts'] as $value ) {
                ShowContacts::listContacts($value['lastname'], $value['phone_number'], $value['email'], $value['name'], $value['id_contact']);
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