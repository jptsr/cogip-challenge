<?php ob_start(); ?>

<div class="container ">
  <div class="row align-items-center">
    <h2 class="mb-5 mt-5 text-center">Ajout nouvelle facture</h2>
  </div>
  
  <div class="row justify-content-center mx-auto py-5 form_style ">
    <div class="col-6">
      <form action="" method="post">

        <div class="mb-3">
			    <label for="numeroFacture" class="form-label">Numéro de facture</label>
			    <input type="text" class="form-control" name="" value="">
		    </div>
        <div class="mb-3">
			    <label for="dateFacture" class="form-label">Date de la facture</label>
			    <input type="date" class="form-control" name="" value="">
		    </div>       
		    <div class="mb-3">
			    <label for="société" class="form-label">Société</label>
			    <select class="form-select fw-light" name="">
            <!-- loop -->
				    <option value="1">s1</option>
			    </select>
		    </div>
        <div class="mb-3">
			    <label for="personContact" class="form-label">Personne de contact pour la facture</label>
			    <select class="form-select fw-light" name="">
            
				    <option value="1">p1</option>
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