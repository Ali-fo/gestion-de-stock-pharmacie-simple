<?php
	if(isset($_POST['find'])){
		$data = new medoccontroller();
		$medoc = $data->findMedoc();
	}else{
			$data = new medoccontroller();
			$medoc = $data->getAllmedoc();
		}
?>

<div class="container">
	<div class="row my-4">
		<div class="col-md-12 mx-auto">
			<?php include('./views/includes/alerts.php');?>
			<div class="card">
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>add" class="btn btn-sm btn-primary mr-2 mb-2">
						<i class="fas fa-plus"></i>
					</a>

					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>

					<a href="<?php echo BASE_URL;?>logout" title="Déconnexion" class="btn btn-link mr-2 mb-2">
						<i class="fas fa-user mr-2"><?php echo $_SESSION['username'];?></i>
					</a>
					<form method="post" class="float-right mb-2 d-flex flex-row">
						<input type="text" name="search" class="form-control" placeholder="Recherche">
						<button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
					</form>
					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">Nom médicament</th>
					      <th scope="col">Nom molecule</th>
					      <th scope="col">Grammage &nbsp;(mg)</th>
					      <th scope="col">Type médicament</th>
					      <th scope="col">Conseil d'utilisation</th>
					      <th scope="col">Effets Secondaires</th>
					      <th scope="col">Status</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					    <?php foreach ($medoc as $medo):?>
						    <tr>
						      <th scope="row"><?php echo $medo['Nom_medicament'];?></th>
						      <td><?php echo $medo['Nom_molecule'];?></td>
						      <td><?php echo $medo['Grammage'];?></td>
						      <td><?php echo $medo['Type_medicament'];?></td>
						      <td><?php echo $medo['Conseil_utilisation'];?></td>
						      <td><?php echo $medo['Effets_secondaires'];?></td>
						      <td>
						      	<?php echo $medo['status']
						      		?
						      		'<span class="badge badge-success">Disponible</span>'
						      		:
						      			'<span class="badge badge-danger">Non Disponible</span>';
						      ;?></td>
						      <td class="d-flex flex-row">
						      	<form method="post" class="mr-1" action="update">
						      		<input type="hidden" name="id" value="<?php echo $medo['id'];?>" >
						      		<button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
						      	</form>

						      	<form method="post" class="mr-1" action="delete">
						      		<input type="hidden" name="id" value="<?php echo $medo['id'];?>" >
						      		<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						      	</form>

						      </td>
						    </tr>
						<?php endforeach;?>
					  </tbody>
					</table>
				</div>
				
			</div>
		</div>
	</div>
</div>