<?php
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class FacultyClass extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function listClass(){
			$sqlView = "SELECT *  FROM lop";
			$preView = $this->pdo->prepare($sqlView);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function listFaculty(){
			$sqlViewFaculty = "SELECT *  FROM khoa";
			$preViewFaculty = $this->pdo->prepare($sqlViewFaculty);
            $preViewFaculty->execute();
            return $preViewFaculty->fetchAll(PDO::FETCH_ASSOC);
		}
	}
?>