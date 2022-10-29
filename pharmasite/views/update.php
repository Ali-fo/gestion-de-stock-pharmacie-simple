<?php
	if (isset($_POST['id']))
	{
		$exitMedoc = new medoccontroller();
		$medoc = $exitMedoc->getOneMedoc();
 	}else{
 		Redirect::to('home');
 	}

 	if (isset($_POST['submit']))
	{
		$exitMedoc = new medoccontroller();
		$exitMedoc->updateMedoc();
 	}
?>

<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Modifier un médicament</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
							<label for="Nom_medicament">Nom médicament*</label>
							<input type="text" name="Nom_medicament" class="form-control" placeholder="Nom médicament"
							value="<?php echo $medoc->Nom_medicament; ?>" 
							required="required">
						</div>

						<div class="form-group">
							<label for="Nom_molecule">Nom_molecule*</label>
							<input type="text" name="Nom_molecule" class="form-control" placeholder="Nom_molecule"
							value="<?php echo $medoc->Nom_molecule; ?>" required="required">
						</div>
						<div class="form-group">
							<label for="Grammage">Grammage&nbsp;(mg)*</label>
							<input type="text" name="Grammage" class="form-control" placeholder="Grammage" value="<?php echo $medoc->Grammage;?>" required="required">
						</div>

						<div class="form-group">
							<label for="Type_medicament">Type_medicament*</label>
							<input type="text" name="Type_medicament" class="form-control" placeholder="Type_medicament" value="<?php echo $medoc->Type_medicament; ?>" required="required">
							<input type="hidden" name="id" value="<?php echo $medoc->id;?>">
						</div>

						<div class="form-group">
							<label for="Conseil_utilisation">Conseil_utilisation*</label>
							<input type="text" name="Conseil_utilisation" class="form-control" placeholder="Conseil_utilisation"
							value="<?php echo $medoc->Conseil_utilisation;?>" 
							required="required">
						</div>

						<div class="form-group">
							<label for="Effets_secondaires">Effets_secondaires*</label>
							<input type="text" name="Effets_secondaires" class="form-control" placeholder="Effets_secondaires"
							value="<?php echo $medoc->Effets_secondaires; ?>" 
							required="required">
						</div>

						<div class="form-group">
							<select class="form-control" name="status">
								<option value="1" <?php echo $medoc->status ? 'selected' : '' ?> >Disponible</option>
								<option value="0" <?php echo !$medoc->status ? 'selected' : '' ?> >Non Disponible</option>
							</select>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Valider</button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>