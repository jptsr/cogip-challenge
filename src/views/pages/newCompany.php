<?php ob_start(); ?>

<!-- <h1>New Company</h1> -->

<div class="container ">
  <div class="row align-items-center">
    <h2 class="mb-5 mt-5 text-center">Ajout nouvelle société</h2>
  </div>
  
  <div class="row justify-content-center py-5">
    <div class="col-6">
      <form action="" method="post">
		<?php
		echo '<pre>';
		print_r($_POST['newCompany']);
		echo '</pre>';
		?>
        <div class="mb-3">
			    <label for="nomSociete" class="form-label">Nom de la société</label>
			    <input type="text" class="form-control" name="nom" value="">
		    </div>
        <div class="mb-3">
			    <label for="tva" class="form-label">N° de TVA</label>
			    <input type="text" class="form-control" name="tva" value="">
		    </div>
        <div class="mb-3">
			    <label for="phone" class="form-label">Phone</label>
			    <input type="tel" class="form-control" name="phone">
		    </div>
        
		    <div class="mb-3">
			    <label for="typeSociété" class="form-label">Type de société</label>
			    <select class="form-select fw-light" name="type">
				    <option value="fournisseur">Fournisseur</option>
				    <option value="fournisseur">Client</option>
			    </select>
		    </div>
        <div class="d-grid  justify-content-end">
          <button type="submit" name="newCompany" class="btn btn-primary">Submit</button>
        </div>     
      </form>
    </div>
    
  </div>
</div>

<?php
$content = ob_get_clean();
require __DIR__. '/../layout.php';