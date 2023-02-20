<?PHP
	require_once "../config.php";
	require_once '../Model/Clubcamping.php';

	class ClubcampingC {



		function afficherClubcampings(){

			$sql="SELECT * FROM Clubcamping";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				echo "cc";
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

			public function ajouterClubcamping($Clubcamping){
			$sql="insert into Clubcamping (nomclub,logoclub,nomres,contact,nbmembres,siteclub,description,iduser)
			values (:nomc,:logoclub,:nomres,:contact,:nbmembres,:siteclub,:description,:iduser)";
			$db=config::getConnexion();
			try{
			$req=$db->prepare($sql);

			$nomclub=$Clubcamping->getNomclub();

			$logoclub=$Clubcamping->getLogoclub();

			$nomres=$Clubcamping->getNomres();

			$contact=$Clubcamping->getContact();
			$nbmembres=$Clubcamping->getNbmembres();
			$siteclub=$Clubcamping->getSiteclub();
				$description=$Clubcamping->getDescription();
				$iduser=$Clubcamping->getIduser();

			$req->bindValue(':nomc',$nomclub);
			$req->bindValue(':logoclub',$logoclub);
			$req->bindValue(':nomres',$nomres);
			$req->bindValue(':contact',$contact);
			$req->bindValue(':nbmembres',$nbmembres);
			$req->bindValue(':siteclub',$siteclub);
			$req->bindValue(':description',$description);
			$req->bindValue(':iduser',$iduser);
			echo $logoclub;
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
			}
			function modifierClubcamping($Clubcamping){
			$sql="UPDATE Clubcamping SET nomclub= :nomclub,logoclub=:logoclub,nomres=:nomres,contact=:contact,nbmembres=:nbmembres,siteclub=:siteclub, description=:description WHERE idClubcamping=:idClubcamping";
			$db = config::getConnexion();
						try{
			$req=$db->prepare($sql);
			$idClubcamping=$Clubcamping->getIdClubcamping();
			$nomclub=$Clubcamping->getNomclub();

			$logoclub=$Clubcamping->getLogoclub();

			$nomres=$Clubcamping->getNomres();

			$contact=$Clubcamping->getContact();
			$nbmembres=$Clubcamping->getNbmembres();
			$siteclub=$Clubcamping->getSiteclub();
			$description=$Clubcamping->getDescription();
			$req->bindValue(':idClubcamping',$idClubcamping);
			$req->bindValue(':nomclub',$nomclub);
			$req->bindValue(':logoclub',$logoclub);
			$req->bindValue(':nomres',$nomres);
			$req->bindValue(':contact',$contact);
			$req->bindValue(':nbmembres',$nbmembres);
			$req->bindValue(':siteclub',$siteclub);
			$req->bindValue(':description',$description);

			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}
		}

	function recupererClubcamping($idClubcamping){

			$sql="SELECT * FROM Clubcamping where idClubcamping='".$idClubcamping."'";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function recupererClubcampingi($iduser){

			$sql="SELECT * FROM Clubcamping where iduser='".$iduser."'";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function recupererClubcampingn($nomclub){

			$sql="SELECT * FROM Clubcamping where nomclub= '".$nomclub."' ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function supprimerClubcamping($idClubcamping)
		{

         $sql="DELETE FROM Clubcamping where idClubcamping=:idClubcamping";
            $db = config::getConnexion();
			try{
				$req=$db->prepare($sql);
			$req->bindValue(':idClubcamping',$idClubcamping);
			$req->execute();
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}


		}

		function rechercherClubcamping($nomclub){

			$sql="SELECT * FROM Clubcamping where nomclub='".$nomclub."'";
			$db = config::getConnexion();
			try{
				$liste1 = $db->query($sql);
				return $liste1;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function tri2Clubcampings(){

			$sql="SELECT * FROM Clubcamping ORDER BY nbmembres DESC";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function triClubcampings(){

			$sql="SELECT * FROM Clubcamping ORDER BY nomclub";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
}
?>