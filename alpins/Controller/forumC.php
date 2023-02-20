<?PHP
	require_once "../config.php";
	require_once "../Model/forum.php";

class ForumC
{
	public function afficherThreads()
	{
		$sql = "SELECT * FROM threads";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	public function afficherThread($id)
	{
		$sql = "SELECT * FROM threads WHERE ID =".$id;
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	public function nombreUtilisateur()
	{
		$sql = "SELECT utilisateur, COUNT(utilisateur) as 'userCount' FROM threads ORDER BY 'userCount' DESC ";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	public function nombrePosts()
	{
		$sql = "SELECT ID, COUNT(ID) as 'IDcount' FROM threads ";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	public function ajouterThread($thread)
	{
		$sql = "insert into threads (utilisateur,titre,contenu)
			values (:utilisateur,:titre,:contenu)";
		$db = config::getConnexion();
		try {
			$req = $db->prepare($sql);
			$utilisateur = $thread->getUtilisateur();
			$titre = $thread->getTitre();
			$contenu = $thread->getContenu();
			$req->bindValue(':utilisateur', $utilisateur);
			$req->bindValue(':titre', $titre);
			$req->bindValue(':contenu', $contenu);
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}

	function supprimerThread($ID)
	{

		$sql = "DELETE FROM threads where ID=:ID";
		$db = config::getConnexion();
		try {
			$req = $db->prepare($sql);
			$req->bindValue(':ID', $ID);
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}


	public function updateThread($thread, $id) {
		try {
			$db = config::getConnexion();
			$sql = "UPDATE threads SET utilisateur = :utilisateur, titre = :titre, contenu = :contenu WHERE id = :ID";
			$req = $db->prepare($sql);
			$req->bindValue(':ID', $id);
			$utilisateur = $thread->getUtilisateur();
			$titre = $thread->getTitre();
			$contenu = $thread->getContenu();
			$req->bindValue(':utilisateur', $utilisateur);
			$req->bindValue(':titre', $titre);
			$req->bindValue(':contenu', $contenu);
			$req->execute();
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}
}
