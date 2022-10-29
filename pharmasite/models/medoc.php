<?php 

class medoc
{

	static public function getAll()
	{
		$stmt = DB::connect()->prepare('SELECT * FROM ali ');
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
		$stmt= null;
	}


	static public function getmedoc($data)
	{
		$id = $data['id'];
		try
		{
			$query = 'SELECT * FROM ali WHERE id = :id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			$medoc = $stmt->fetch(PDO::FETCH_OBJ);
			return $medoc; 
		}catch(PDOException $ex){
			echo 'erreur'.$ex->getMessage();

		}

	}



	static public function add($data)
	{
		$stmt = DB::connect()->prepare('INSERT INTO ali (Nom_medicament,Nom_molecule,Grammage,Type_medicament,Conseil_utilisation,Effets_secondaires,status) VALUES (:Nom_medicament,:Nom_molecule,:Grammage,:Type_medicament,:Conseil_utilisation,:Effets_secondaires,:status) ');

		$stmt->bindParam(':Nom_medicament',$data['Nom_medicament']);
		$stmt->bindParam(':Nom_molecule',$data['Nom_molecule']);
		$stmt->bindParam(':Grammage',$data['Grammage']);
		$stmt->bindParam(':Type_medicament',$data['Type_medicament']);
		$stmt->bindParam(':Conseil_utilisation',$data['Conseil_utilisation']);
		$stmt->bindParam(':Effets_secondaires',$data['Effets_secondaires']);
		$stmt->bindParam(':status',$data['status']);

		if($stmt->execute()){
			return 'ok' ;
		}else{
			return 'error';
		}
		$stmt->close();
		$stmt = null;
	}



	static public function update($data)
	{
			$stmt = DB::connect()->prepare('UPDATE ali SET 
				Nom_medicament =:Nom_medicament,
				Nom_molecule = :Nom_molecule,
				Grammage = :Grammage,
				Type_medicament =:Type_medicament,
				Conseil_utilisation =:Conseil_utilisation,
				Effets_secondaires =:Effets_secondaires,
				status = :status WHERE id =:id');
			
			$stmt->bindParam('id',$data['id']);
			$stmt->bindParam(':Nom_medicament',$data['Nom_medicament']);
			$stmt->bindParam(':Nom_molecule',$data['Nom_molecule']);
			$stmt->bindParam(':Grammage',$data['Grammage']);
			$stmt->bindParam(':Type_medicament',$data['Type_medicament']);
			$stmt->bindParam(':Conseil_utilisation',$data['Conseil_utilisation']);
			$stmt->bindParam(':Effets_secondaires',$data['Effets_secondaires']);
			$stmt->bindParam(':status',$data['status']);

			if($stmt->execute()){
				return 'ok' ;
			}else{
				return 'error';
			}
			$stmt->close();
			$stmt = null;
	}

	static public function delete($data)
	{
		$id = $data['id'];
		try{
			$query = 'DELETE FROM ali WHERE id = :id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id)); 
			if($stmt->execute()){
				return 'ok' ;
			}
		}catch(PDOException $ex){
			echo 'erreur'.$ex->getMessage();

		}

	}

	static public function searchMedoc($data)
	{
		$search = $data['search'];
		try{
			$query = 'SELECT * FROM ali WHERE Nom_medicament LIKE ? OR Nom_molecule LIKE ?';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array('%'.$search.'%','%'.$search.'%'));
			$medoc = $stmt->fetchAll();
			return $medoc; 
		}catch(PDOException $ex){
			echo 'erreur'.$ex->getMessage();

		}

	}



}
?>