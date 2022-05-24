<?php

use app\src\core\show\ShowCompaniesOption;

 ob_start(); ?>

<!-- <h1>New Contact add</h1> -->

<div class="container ">
  <div class="row align-items-center">
    <h2 class="mb-5 mt-5 text-center">Ajout nouveau contact</h2>
  </div>

  <div class="row justify-content-center py-5">
    <div class="col-6">
      <form action="/nouveau-contact" method="post">
        <?php
        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
        ?>
        <div class="mb-3">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom" value="">
          <?php if (!empty($_SESSION['nom'])) {
            echo $_SESSION['nom'];
          } else {
            echo '';
          } ?>
        </div>
        <div class="mb-3">
          <label for="prenom" class="form-label">Prénom</label>
          <input type="text" class="form-control" name="prenom" value="">
          <?php if (!empty($_SESSION['prenom'])) {
            echo $_SESSION['prenom'];
          } else {
            echo '';
          } ?>
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Phone</label>
          <input type="tel" class="form-control" name="phone">
          <?php if (!empty($_SESSION['phone'])) {
            echo $_SESSION['phone'];
          } else {
            echo '';
          } ?>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="name@example.com" name="email">
          <?php if (!empty($_SESSION['email'])) {
            echo $_SESSION['email'];
          } else {
            echo '';
          } ?>
        </div>
        <div class="mb-3">
          <label for="société" class="form-label">Société</label>
          <select class="form-select fw-light" name="compagnie">
          <?php
            foreach($_SESSION['all_companies'][0] as $companie){
              ShowCompaniesOption::listOptionsCompanies($companie['name']);
            }
            foreach($_SESSION['all_companies'][1] as $companie){
              ShowCompaniesOption::listOptionsCompanies($companie['name']);
            }
            ?>
          </select>
          
        </div>
        <div class="d-grid  justify-content-end">
          <button type="submit" name="newContact" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>

  </div>
</div>

<!-- <div class="container ">
  <div class="row align-items-center">
    <h2 class="mb-5 mt-5 text-center">Ajout nouveau contact</h2>
  </div>
  
  <div class="row justify-content-center py-5">
    <div class="col-6">
      <form action="/nouveau-contact" method="post">

        <div class="mb-3">
			    <label for="nom" class="form-label">Nom</label>
			    <input type="text" class="form-control" name="" value="">
		    </div>
        <div class="mb-3">
			    <label for="prenom" class="form-label">Prénom</label>
			    <input type="text" class="form-control" name="" value="">
		    </div>
        <div class="mb-3">
			    <label for="phone" class="form-label">Phone</label>
			    <input type="tel" class="form-control" name="">
		    </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control"  placeholder="name@example.com">
        </div>
		    <div class="mb-3">
			    <label for="société" class="form-label">Société</label>
			    <select class="form-select" name="">
            !--loop--!
				    <option value="2">Société1</option>
				    
			    </select>
		    </div>
        <div class="d-grid  justify-content-end">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>     
      </form>
    </div>
    
  </div>
</div> -->

<?php
$content = ob_get_clean();
require __DIR__ . '/../layout.php';
