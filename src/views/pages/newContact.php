<?php ob_start(); ?>

<!-- <h1>New Contact add</h1> -->

<div class="container ">
  <div class="row align-items-center">
    <h2 class="mb-5 mt-5 text-center">Ajout nouveau contact</h2>
  </div>
  
  <div class="row justify-content-center py-5">
    <div class="col-6">
      <form action="" method="post">

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
			    <select class="form-select fw-light" name="">
            <!-- loop -->
				    <option value="2">Société1</option>
				    
			    </select>
		    </div>
        <div class="d-grid  justify-content-end">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>     
      </form>
    </div>
    
  </div>
</div>

<div class="container ">
  <div class="row align-items-center">
    <h2 class="mb-5 mt-5 text-center">Ajout nouveau contact</h2>
  </div>
  
  <div class="row justify-content-center py-5">
    <div class="col-6">
      <form action="" method="post">

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
            <!-- loop -->
				    <option value="2">Société1</option>
				    
			    </select>
		    </div>
        <div class="d-grid  justify-content-end">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>     
      </form>
    </div>
    
  </div>
</div>

<?php 
$content = ob_get_clean();
require __DIR__. '/../layout.php';