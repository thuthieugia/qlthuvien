<?php
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class Header extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function avatar($id){
    	$sqlID = "SELECT maCanBo, tenCanBo, anh FROM can_bo_thu_vien WHERE maCanBo = :id";
    	$preID = $this->pdo->prepare($sqlID);
    	$preID->bindParam(':id',$id);
    	$preID->execute();
		return $preID->fetchAll(PDO::FETCH_ASSOC);
    }
	}
	
?>