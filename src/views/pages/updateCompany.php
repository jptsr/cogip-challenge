<?php ob_start(); ?>

<div class="container ">
  <div class="row align-items-center">
    <h2 class="mb-5 mt-5 text-center">Modification de la société</h2>
  </div>
  
  <div class="row justify-content-center mx-auto py-5 form_style ">
    <div class="col-6">
      <form action="" method="post">

        <div class="mb-3">
			    <label for="nomSociete" class="form-label">Nom de la société</label>
			    <input type="text" class="form-control" name="" value="">
		    </div>
        <div class="mb-3">
			    <label for="tva" class="form-label">N° de TVA</label>
			    <input type="text" class="form-control" name="" value="">
		    </div>
        <div class="mb-3">
			    <label for="phone" class="form-label">Phone</label>
			    <input type="tel" class="form-control" name="">
		    </div>
        <div class="mb-3">
			    <label for="tva" class="form-label">Pays</label>
			    <input type="text" class="form-control" name="" value="">
		    </div>
		    <div class="mb-3">
			    <label for="typeSociété" class="form-label">Société</label>
			    <select class="form-select fw-light" name="">
				    <option value="fournisseur">Fournisseur</option>
				    <option value="fournisseur">Client</option>
			    </select>
		    </div>
        <div class="d-grid  justify-content-end">
          <button type="submit" class="btn btn-primary forme_btn ">Submit</button>
        </div>     
      </form>
    </div>
    
  </div>
</div>

<?php
$content = ob_get_clean();
require __DIR__. '/../layout.php';