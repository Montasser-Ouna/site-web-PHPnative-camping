<?php 
	class Clubcamping{
		private $idClubcamping =null;
        private $nomclub =null;
        private $logoclub =null;
        private $nomres=null;
        private $contact=null;
        private $nbmembres=null;
        private $siteclub=null;
        private $description=null;

        public function __construct($nomclub,$logoclub,$nomres,$contact,$nbmembres,$siteclub,$description){
            $this->nomclub=$nomclub;
            $this->nomres=$nomres;
            $this->logoclub=$logoclub;
            $this->contact=$contact;
            $this->nbmembres=$nbmembres;
            $this->siteclub=$siteclub;
            $this->description=$description;
        }
        public function getIdClubcamping(){
            return $this->idClubcamping;
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
       

        public function setIdClubcamping($idClubcamping){
            $this->idClubcamping=$idClubcamping;
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
}

?>