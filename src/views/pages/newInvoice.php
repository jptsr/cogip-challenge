<?php ob_start(); ?>

<!-- <h1>New Invoice</h1> -->

<div class="container ">
	<div class="row align-items-center">
		<h2 class="mb-5 mt-5 text-center">Ajout nouvelle facture</h2>
	</div>

	<div class="row justify-content-center py-5">
		<div class="col-6">
			<form action="" method="post">
				<?php
				echo '<pre>';
				print_r($_SESSION['test']);
				echo '</pre>';
				echo '<pre>';
				print_r($_POST['newInvoice']);
				echo '</pre>';
				echo '<pre>';
				print_r($_SESSION['test2']);
				echo '</pre>';
				?>
				<div class="mb-3">
					<label for="numeroFacture" class="form-label">Numéro de facture</label>
					<input type="text" class="form-control" name="factureNum" value="">
					<?php if (!empty($_SESSION['erreurNewCompany']['factureNum'])) {
						echo $_SESSION['erreurNewCompany']['factureNum'];
					} else {
						echo '';
					} ?>
				</div>
				<div class="mb-3">
					<label for="dateFacture" class="form-label">Date de la facture</label>
					<input type="date" class="form-control" name="factureDate" value="">
				</div>
				<div class="mb-3">
					<label for="société" class="form-label">Société</label>
					<select class="form-select fw-light" name="factureCompany">
						<!-- loop -->
						<option value="1">s1</option>
					</select>
				</div>
				<div class="mb-3">
					<label for="personContact" class="form-label">Personne de contact pour la facture</label>
					<select class="form-select fw-light" name="factureContact">

						<option value="1">p1</option>
					</select>
				</div>

				<div class="d-grid  justify-content-end">
					<button type="submit" class="btn btn-primary" name="newInvoice">Submit</button>
				</div>
			</form>
		</div>

	</div>
</div>

<?php
$content = ob_get_clean();
require __DIR__ . '/../layout.php';
