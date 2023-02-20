<?PHP
require_once "../config.php";
require_once '../Model/Promotion.php';

class PromotionC
{
    public function chercherPromotion($dateD)
    {
        $sql = "SELECT * From Promotion where DateD='" . $dateD . "'";
        $db = config::getConnexion();
        try {

            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur:' . $e->getMessage());
        }


        function chercherpromotion($localisation)
        {
            $sql = "SELECT * From Promotion where localisation='" . $localisation . "'";
            $db = config::getConnexion();
            try {

                $liste = $db->query($sql);
                return $liste;
            } catch (Exception $e) {
                die('Erreur:' . $e->getMessage());
            }
        }
    }
    function ajouterPromotion($Promotion)
    {
        $sql = "INSERT INTO Promotion (localisation, image, description, dateD, dateF, prixact, prix ,iduser)
			VALUES ( :localisation, :image, :description, :dateD, :dateF, :prixact, :prix ,:iduser)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'localisation' => $Promotion->getLocalisation(),
                'image' => $Promotion->getImage(),
                'description' => $Promotion->getDescription(),
                'dateD' => $Promotion->getdateD(),
                'dateF' => $Promotion->getDateF(),
                'prixact' => $Promotion->getprixact(),
                'prix' => $Promotion->getPrix(),
                'iduser' => $Promotion->getIdUser()

            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function afficherPromotions()
    {

        $sql = "SELECT * FROM Promotion";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function supprimerPromotion($id)
    {
        $sql = "DELETE FROM Promotion WHERE id= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function modifierPromotion($Promotion, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE Promotion SET
						localisation = :localisation,
						image = :image,
						description = :description,
						dateD = :dateD,
						dateF = :dateF,
			            prixact = :prixact,
						prix = :prix
					WHERE id = :id'
            );
            $query->execute([
                'localisation' => $Promotion->getLocalisation(),
                'image' => $Promotion->getImage(),
                'description' => $Promotion->getDescription(),
                'dateD' => $Promotion->getDateD(),
                'dateF' => $Promotion->getDateF(),
                'prixact' => $Promotion->getprixact(),
                'prix' => $Promotion->getPrix(),
                'id' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function recupererPromotion($id)
    {
        $sql = "SELECT * from Promotion where id=$id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $user = $query->fetch();
            return $user;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function recupererPromotion1($id)
    {
        $sql = "SELECT * from Promotion where id=$id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $user = $query->fetch(PDO::FETCH_OBJ);
            return $user;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}
