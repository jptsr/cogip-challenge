<?php

use app\src\core\show\ShowCompaniesType;

ob_start(); ?>

<div class="container ">

	<div class="row align-items-center">
		<h2 class="mb-5 mt-5 text-center">Ajout nouvelle société</h2>
	</div>

	<div class="row justify-content-center mx-auto py-5 form_style  ">
		<div class="col-6">
			<form action="" method="post">
				<div class="mb-3">
					<label for="nomSociete" class="form-label">Nom de la société</label>
					<input type="text" class="form-control" name="nom" value="">
					<?php if (!empty($_SESSION['erreurNewCompany']['nom'])) {
						echo $_SESSION['erreurNewCompany']['nom'];
					} else {
						echo '';
					} ?>
				</div>
				<div class="mb-3">
					<label for="tva" class="form-label">N° de TVA</label>
					<input type="text" class="form-control" name="tva" value="">
					<?php if (!empty($_SESSION['erreurNewCompany']['tva'])) {
						echo $_SESSION['erreurNewCompany']['tva'];
					} else {
						echo '';
					} ?>
				</div>
				<div class="mb-3">
					<label for="tva" class="form-label">Pays</label>
					<input type="text" class="form-control" name="pays" value="">
					<?php if (!empty($_SESSION['erreurNewCompany']['pays'])) {
						echo $_SESSION['erreurNewCompany']['pays'];
					} else {
						echo '';
					} ?>
				</div>
				<div class="mb-3">
					<label for="typeSociété" class="form-label">Type de société</label>
					<select class="form-select fw-light" name="type">
						<?php
						ShowCompaniesType::listTypeCompanies('Fournisseur', 1, $_SESSION['actual_company'][0]['id_type']);
						ShowCompaniesType::listTypeCompanies('Client', 2, $_SESSION['actual_company'][0]['id_type']);
						?>

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
require __DIR__ . '/../layout.php';
