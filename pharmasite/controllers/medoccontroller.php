<?php 


class medoccontroller{
	public function getAllmedoc()
	{
		$medoc = medoc::getAll();
		return $medoc;
	}

	public function getOneMedoc()
	{
		if (isset($_POST['id']))
		{
			$data = array(
				'id' => $_POST['id'],
			);
			$medoc = Medoc::getmedoc($data);
			return $medoc ;

		}
		
	}

	public function findMedoc()
	{
		if(isset($_POST['search']))
		{
			$data = array('search' => $_POST['search']);
		}
		$medoc = Medoc::searchMedoc($data);
		return $medoc ;
	}







	public function addMedoc()
	{
		if(isset($_POST['submit'])){
			$data = array(
				'Nom_medicament' =>$_POST['Nom_medicament'],
				'Nom_molecule'	=> $_POST['Nom_molecule'],
				'Grammage' => $_POST['Grammage'],
				'Type_medicament' => $_POST['Type_medicament'],
				'Conseil_utilisation' => $_POST['Conseil_utilisation'],
				'Effets_secondaires' => $_POST['Effets_secondaires'],
				'status' => $_POST['status'],
			);
			$result = medoc::add($data);
			if($result === 'ok')
			{
				Session::set('success','Médicament Ajouté');
				Redirect::to('home');
			}else{
				echo $result;
			}
		}
	}




	public function updateMedoc()
	{
			if(isset($_POST['submit']))
			{
				$data = array(
					'id' => $_POST['id'],
					'Nom_medicament' =>$_POST['Nom_medicament'],
					'Nom_molecule'	=> $_POST['Nom_molecule'],
					'Grammage' => $_POST['Grammage'],
					'Type_medicament' => $_POST['Type_medicament'],
					'Conseil_utilisation' => $_POST['Conseil_utilisation'],
					'Effets_secondaires' => $_POST['Effets_secondaires'],
					'status' => $_POST['status'],
				);
				$result = medoc::update($data);
				if($result === 'ok')
				{
					Session::set('success','Médicament modifié');
					Redirect::to('home');
				}else{
					echo $result;
				}
			}
	}

	public function deleteMedoc()
	{
		if(isset($_POST['id']))
		{
			$data['id'] = $_POST['id'];
			$result = Medoc::delete($data);
			if($result === 'ok')
			{
			 Session::set('error','Médicament Supprimé');
			 Redirect::to('home');
			}else{
					echo $result;
				}
		}
	}




}

?>