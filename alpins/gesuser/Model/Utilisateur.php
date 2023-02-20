<?php
	class Utilisateur{
		private $idutilisateur =null;
        private $nom =null;
        private $prenom =null;
        private $email=null;
        private $datedenais=null;
        private $motdepasse=null;
        private $cmotdepasse=null;
        private $tel=null;
        private $accesstype=null;
        private $keyconfirmation=null;


        public function __construct($nom,$prenom, $email,$datedenais,$motdepasse,$cmotdepasse,$ville,$tel,$accesstype){
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->email=$email;
            $this->datedenais=$datedenais;
            $this->motdepasse=$motdepasse;
            $this->cmotdepasse=$cmotdepasse;
            $this->ville=$ville;
            $this->tel=$tel;
            $this->accesstype=$accesstype;
        }
        public function getIdutilisateur(){
            return $this->idutilisateur;
        }
        public function getKeyconfirmation(){
            return $this->keyconfirmation;
        }
        public function getNom(){
            return $this->nom;
        }
        public function getPrenom(){
            return $this->prenom;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getDatedenais(){
            return $this->datedenais;
        }
        public function getMotdepasse(){
            return $this->motdepasse;
        }
         public function getCmotdepasse(){
            return $this->cmotdepasse;
        }
        public function getVille(){
            return $this->ville;
        }
        public function getTel(){
            return $this->tel;
        }
        public function getAccesstype(){
            return $this->accesstype;
        }

        public function setIdutilisateur($idutilisateur){
            $this->idutilisateur=$idutilisateur;
        }
        public function setKeyconfirmation($keyconfirmation){
            $this->keyconfirmation=$keyconfirmation;
        }
        public function setNom($nom){
            $this->nom=$nom;
        }
        public function setPrenom($prenom){
            $this->prenom;
        }
        public function setEmail($email){
            $this->email=$email;
        }
        public function setDatedenais($datedenais){
            $this->datedenais=$datedenais;
        }
        public function setMotdepasse($motdepasse){
            $this->motdepasse=$motdepasse;
        }
        public function setCmotdepasse($cmotdepasse){
            $this->cmotdepasse=$cmotdepasse;
        }
        public function setgetVille($ville){
            $this->ville=$ville;
        }
        public function setTel($tel){
            $this->tel=$tel;
        }
        public function setAccesstype($accesstype){
            $this->accesstype=$accesstype;
        }
		
}

?>