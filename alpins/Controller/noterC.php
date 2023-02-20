<?php 
require_once "../config.php";
class noteC{


public function existe($id,$iduser){
			$sql="SELECT COUNT(*) AS nb_note FROM noter WHERE id=".$id." and iduser=".$iduser;
			$db=config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute();
				$result = $query->fetch();
				$note = (int) $result['nb_note'];
				return $note;
			}
			catch(Exception $e){
				//die('Erreur:' .$e->getMessage());
			}
}

public function sommenote($id){
			$sql="SELECT SUM(note) AS nb_note FROM noter WHERE id=".$id;
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
			$query->execute();
			$result = $query->fetch();
			$nbnote = (int) $result['nb_note'];
			return $nbnote;
			}
			catch(Exception $e){
				//die('Erreur:' .$e->getMessage());
			}
}
public function countt($id){ 
			$sql="SELECT COUNT(*) AS nb_note FROM noter where note=1 and id=".$id." ";
			$db=config::getConnexion();
			try{
			$query = $db->prepare($sql);
			$query->execute();
			$result = $query->fetch();
			$nb_note = (int) $result['nb_note'];
			return $nb_note;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
}
public function countt2($id){ 
	$sql="SELECT COUNT(*) AS nb_note FROM noter where note=2 and id=".$id." ";
	$db=config::getConnexion();
	try{
	$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$nb_note = (int) $result['nb_note'];
	return $nb_note;
	}
	catch(Exception $e){
		die('Erreur:' .$e->getMessage());
	}
}
public function countt3($id){ 
	$sql="SELECT COUNT(*) AS nb_note FROM noter where note=3 and id=".$id;
	$db=config::getConnexion();
	try{
	$query = $db->prepare($sql);
$query->execute();
$result = $query->fetch();
$nb_note = (int) $result['nb_note'];
	return $nb_note;
	}
	catch(Exception $e){
		//die('Erreur:' .$e->getMessage());
	}
}


public function ajouternote1($iduser ,$id){
			$sql="INSERT INTO `noter`( `id`, `iduser`,  `note`) VALUES (".$id.",".$iduser.",1)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);	
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}


public function ajouternote3($iduser ,$id){
			$sql="INSERT INTO noter( id, iduser,  note) VALUES (".$id.",".$iduser.",3)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);	
			$req->execute();
			}
			catch(Exception $e){
				//die('Erreur:' .$e->getMessage());
			}
			
}


public function ajouternote2($iduser ,$id){
			$sql="INSERT INTO `noter`( `id`, `iduser`,  `note`) VALUES (".$id.",".$iduser.",2)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);	
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}

public function ajouternote4($iduser ,$id){
			$sql="INSERT INTO `noter`( `id`, `iduser`,  `note`) VALUES (".$id.",".$iduser.",4)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);	
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}
public function ajouternote5($iduser ,$id){
			$sql="INSERT INTO `noter`( `id`, `iduser`,  `note`) VALUES (".$id.",".$iduser.",5)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);	
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			
}
public function updatenote($id, $nb)
			{
			$sql="UPDATE noter SET note=".$nb." where id=".$id;
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
		
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
		
}











}
?>