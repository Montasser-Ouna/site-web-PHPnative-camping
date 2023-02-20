<?php
	class Annonce{
		private $id =null;
        private $nom =null;
        private $description =null;
        private $prix=null;
        private $difficulté=null;
        private $image=null;
        private $nombrePersonnes=null;
        private $ville=null;
        private $jours=null;

        public function __construct($nom,$description,$prix,$difficulté,$image,$nombrePersonnes,$ville,$jours){
            $this->nom=$nom;
            $this->description=$description;
            $this->prix=$prix;
            $this->difficulté=$difficulté;
            $this->image=$image;
            $this->nombrePersonnes=$nombrePersonnes;
            $this->ville=$ville;
            $this->jours=$jours;
        }
        public function getId(){
            return $this->id;
        }

        public function getNomclub(){
            return $this->nomclub;
        }
        public function getLogoclub(){
           return $this->logoclub;
        }
        public function getNomres(){
            return $this->nomres;
        }
        public function getContact(){
            return $this->contact;
        }
        public function getNbmembres(){
            return $this->nbmembres;
        }

        public function getSiteclub(){
            return $this->siteclub;
        }
         public function getDescription(){
            return $this->description;
        }


        public function setId($idClubcamping){
            $this->id=$idClubcamping;
        }

        public function setNomclub($nomclub){
            $this->nomclub=$nomclub;
        }
         public function setLogoclub($logoclub){
            $this->logoclub=$logoclub;
        }
        public function setNomres($nomres){
            $this->nomres;
        }
        public function setContact($contact){
            $this->contact=$contact;
        }
        public function setNbmembres($nbmembres){
            $this->nbmembres=$nbmembres;
        }

        public function setSiteclub($siteclub){
            $this->siteclub=$siteclub;
        }
         public function setDescription($description){
            $this->description=$description;
        }
        public function setIduser($iduser){
            $this->iduser=$iduser;
        }

        public function getIduser(){
            return $this->iduser;
        }
}

?>