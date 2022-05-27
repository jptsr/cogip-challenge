<?php
use app\src\core\show\ShowCompaniesOption;
ob_start();
?>

<div class="container ">
  <div class="row align-items-center">
    <h2 class="mb-5 mt-5 text-center">Modification du contact</h2>
  </div>
  
  <div class="row justify-content-center mx-auto py-5 form_style">
    <div class="col-6">
      <form action="" method="post">

        <div class="mb-3">
			    <label for="nom" class="form-label">Nom</label>
			    <input type="text" class="form-control" name="nom" value="<?= $_SESSION['actual_contact'][0]['lastname'] ?>">
          <?php if (!empty($_SESSION['erreurNewcontact']['nom'])) {
            echo $_SESSION['erreurNewcontact']['nom'];
          } else {
            echo '';
          } ?>
		    </div>
        <div class="mb-3">
			    <label for="prenom" class="form-label">Prénom</label>
			    <input type="text" class="form-control" name="prenom" value="<?= $_SESSION['actual_contact'][0]['firstname'] ?>">
          <?php if (!empty($_SESSION['erreurNewcontact']['prenom'])) {
            echo $_SESSION['erreurNewcontact']['prenom'];
          } else {
            echo '';
          } ?>
		    </div>
        <div class="mb-3">
			    <label for="phone" class="form-label">Phone</label>
			    <input type="tel" class="form-control" name="phone" value="<?= $_SESSION['actual_contact'][0]['phone_number'] ?>">
          <?php if (!empty($_SESSION['erreurNewcontact']['phone'])) {
            echo $_SESSION['erreurNewcontact']['phone'];
          } else {
            echo '';
          } ?>
		    </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control"  placeholder="name@example.com" name="email" value="<?= $_SESSION['actual_contact'][0]['email'] ?>">
          <?php if (!empty($_SESSION['erreurNewcontact']['email'])) {
            echo $_SESSION['erreurNewcontact']['email'];
          } else {
            echo '';
          } ?>
        </div>
		    <div class="mb-3">
			    <label for="société" class="form-label">Société</label>
			    <select class="form-select" name="compagnie">
            <?php
              foreach ($_SESSION['all_companies'][0] as $companie) {
                ShowCompaniesOption::listOptionsCompanies($companie['name'], $companie['id_company'], $_SESSION['actual_contact'][0]['name']);
              }
              foreach ($_SESSION['all_companies'][1] as $companie) {
                ShowCompaniesOption::listOptionsCompanies($companie['name'], $companie['id_company'], $_SESSION['actual_contact'][0]['name']);
              }
            ?>
			    </select>
		    </div>
        <div class="d-grid  justify-content-end">
          <button type="submit" class="btn btn-primary forme_btn " name="update_contact">Submit</button>
        </div>     
      </form>
    </div>
    
  </div>
</div>

<?php 
$content = ob_get_clean();
require __DIR__. '/../layout.php';