<?php ob_start(); ?>

<h1>Login</h1>
<div class="container ">
  <div class="row align-items-center">
    <h2 class="mb-5 mt-5 text-center">Bienvenue à la COGIP</h2>
  </div>
  <div class="row align-items-center">
    <h3 class="mb-5 mt-3 text-center"> Bienvenue dans l’espace de connexion de la COGIP</h3>
  </div>
  <div class="row justify-content-center">
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
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    
  </div>
</div>

<?php 
$content = ob_get_clean();
require __DIR__. '/../layout.php';