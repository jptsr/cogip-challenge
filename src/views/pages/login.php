<?php ob_start(); ?>

<div class="container ">
  <div class="row align-items-center">
    <h1 class="mb-5 mt-5 text-center">Bienvenue à la COGIP</h1>
  </div>
  <div class="row align-items-center">
    <p  class="mb-5 mt-3 text-center login_text"> Bienvenue dans l’espace de connexion de la COGIP</p>
  </div>
  <div class="row justify-content-center mx-auto py-5 form_style ">
    <div class="col-6">
      <form action="" method="post">
        <div class="mb-3">
          <label for="identifiant" class="form-label">Votre identifiant</label>
          <input type="text" class="form-control" id="" name="" aria-describedby="identifiant" placeholder="Jean-Christian">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Votre mot de passe</label>
          <input type="password" class="form-control" id="password" name="">
        </div>
        <div class="d-grid  justify-content-end">
          <button type="submit" class="btn btn-primary forme_btn">Submit</button>
        </div>  
    </form>
    </div>
    
  </div>
</div>

<?php 
$content = ob_get_clean();
require __DIR__. '/../layout.php';