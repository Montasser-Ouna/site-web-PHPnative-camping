<?PHP
	require_once "../config.php";
	require_once '../Model/Utilisateur.php';

	class UtilisateurC {

		function lastid(){
			$sql="SELECT * FROM Utilisateur where idutilisateur=(SELECT MAX(idutilisateur) FROM Utilisateur)";
			$db = config::getConnexion();
			try{
				$l=$db->query($sql);
				return $l;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	

		}
		
		function afficherUtilisateurs(){
			
			$sql="SELECT * FROM Utilisateur";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
	
			public function ajouterUtilisateur($Utilisateur){
			$sql="insert into Utilisateur (nom,prenom,email,datedenais,motdepasse,cmotdepasse,ville,tel,accesstype,keyconfirmation) 
			values (:nom,:prenom,:email,:datedenais,:motdepasse,:cmotdepasse,:ville,:tel,:accesstype,:keyconfirmation)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);
			
			$nom=$Utilisateur->getNom();
		
			$prenom=$Utilisateur->getPrenom();
				
			$email=$Utilisateur->getEmail();
			
			$datedenais=$Utilisateur->getDatedenais();
			$motdepasse=$Utilisateur->getMotdepasse();
			$cmotdepasse=$Utilisateur->getCmotdepasse();
			$ville=$Utilisateur->getVille();
			 $tel=$Utilisateur->getTel();
			 $accesstype=$Utilisateur->getAccesstype();
			 $keyconfirmation=$Utilisateur->getKeyconfirmation();
			$req->bindValue(':nom',$nom);
			$req->bindValue(':prenom',$prenom);
			$req->bindValue(':email',$email);
			$req->bindValue(':datedenais',$datedenais);
			$req->bindValue(':motdepasse',$motdepasse);
			$req->bindValue(':cmotdepasse',$cmotdepasse);
			$req->bindValue(':ville',$ville);
			$req->bindValue(':tel',$tel);
			$req->bindValue(':accesstype',$accesstype);
			$req->bindValue(':keyconfirmation',$keyconfirmation);
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}	
			}	
			function modifierUtilisateur($Utilisateur){
			$sql="UPDATE Utilisateur SET nom= :nom,prenom= :prenom,email= :email,datedenais= :datedenais ,motdepasse= :motdepasse,cmotdepasse= :cmotdepasse,ville= :ville,tel= :tel,accesstype=:accesstype WHERE idutilisateur=:idutilisateur";
			$db = config::getConnexion();
			try{
						$req=$db->prepare($sql);
			$idutilisateur=$Utilisateur->getIdutilisateur();
			$nom=$Utilisateur->getNom();
		
			$prenom=$Utilisateur->getPrenom();
				
			$email=$Utilisateur->getEmail();
			
			$datedenais=$Utilisateur->getDatedenais();
			$motdepasse=$Utilisateur->getMotdepasse();
			$cmotdepasse=$Utilisateur->getCmotdepasse();
			$ville=$Utilisateur->getVille();
			 $tel=$Utilisateur->getTel();
			 $accesstype=$Utilisateur->getAccesstype();
			$req->bindValue(':nom',$nom);
			$req->bindValue(':idutilisateur',$idutilisateur);
			$req->bindValue(':prenom',$prenom);
			$req->bindValue(':email',$email);
			$req->bindValue(':datedenais',$datedenais);
			$req->bindValue(':motdepasse',$motdepasse);
			$req->bindValue(':cmotdepasse',$cmotdepasse);
			$req->bindValue(':ville',$ville);
			$req->bindValue(':tel',$tel);
			$req->bindValue(':accesstype',$accesstype);
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}		
		}
	
	function recupererUtilisateur($idutilisateur){
			
			$sql="SELECT * FROM Utilisateur where idutilisateur=".$idutilisateur."";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
			function recupererUtilisateurlog($email,$motdepasse){
			
			$sql="SELECT * FROM Utilisateur where email='".$email."' AND motdepasse='".$motdepasse."' ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function recupererUtilisateurloge($email){
			
			$sql="SELECT * FROM Utilisateur where email='".$email."'";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function supprimerUtilisateur($idutilisateur)
		{
          
         $sql="DELETE FROM Utilisateur where idutilisateur=:idutilisateur";
            $db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
			$req->bindValue(':idutilisateur',$idutilisateur);
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}		


		}

		/*function rechercherUtilisateur($titre){
			
			$sql="SELECT * FROM Utilisateur where titre='".$titre."'";
			$db = config::getConnexion();
			try{
				$liste1 = $db->query($sql);
				return $liste1;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}*/
		
}
?>