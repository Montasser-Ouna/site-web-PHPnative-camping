<?php
 class noter{
     private $idn;
      private $iduser;
	 private $id;
	  private $note;
	  
	    
 
    public function __construct(){
		
	
		
		}
		
		
 
      
		public function setIdn($idn)
		{
			$this->idn=$idn;
		}
		
		public function setIduser($iduser)
		{
			$this->iduser=$iduser;
		}
		
		
		public function setId($id)
		{
			$this->id=$id;
		}
		
		
	
		public function setNote($note)
		{
			$this->note=$note;
		}
		
		public function getIdn(){
			return $this->idn;
		}
	public function getIduser()
		{
			return $this->iduser;
		}
		public function getId(){
			return $this->id;
		}
		
		
		
	public function getNote(){
			return $this->note;
		}
		
		
}

?>