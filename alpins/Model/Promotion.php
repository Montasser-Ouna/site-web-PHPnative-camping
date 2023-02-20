<?PHP
	class Promotion{
		private $id ;
		private $localisation ;
		private  $image ;
		private  $description ;
		private  $dateD ;
		private  $dateF ;
		private  $prixact ;
		private $prix ;
		private $iduser;

		function __construct( $localisation,  $image,  $description, $dateD,  $dateF, $prixact, $prix ,$iduser){

			$this->localisation=$localisation;
			$this->image=$image;
			$this->description=$description;
			$this->dateD=$dateD;
			$this->dateF=$dateF;
		    $this->prixact=$prixact;
			$this->prix=$prix;
			$this->iduser=$iduser;

		}

		function getId(){
			return $this->id;
		}
		function getIduser(){
			return $this->iduser;
		}

		function setIduser($iduser){
			$this->iduser=$iduser;
		}
		function getLocalisation(){
			return $this->localisation;
		}
		function getImage(){
			return $this->image;
		}
		function getDescription(){
			return $this->description;
		}
		function getDateD(){
			return $this->dateD;
		}
		function getDateF(){
			return $this->dateF;

		}
		function getPrixact(){
			return $this->prixact;

		}

		function getPrix(){
			return $this->prix;
		}

		function setLocalisation($localisation){
			$this->localisation=$localisation;
		}
		function setImage($image){
			$this->image;
		}
		function setDescription($description){
			$this->description=$description;
		}
		function setDateD($dateD){
			$this->dateD=$dateD;
		}
		function setDateF($dateF){
			$this->dateF=$dateF;

		}
		function setPrixact($prixact){
			$this->prixact=$prixact;
		}
		function setPrix($prix){
			$this->prix=$prix;
		}
	}
?>