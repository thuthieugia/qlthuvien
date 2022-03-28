<?php
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class Login extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function login($user, $passwd){
			$sqlView = "SELECT *  FROM can_bo_thu_vien WHERE maCanBo = :user AND matKhau = :passwd";
			$preView = $this->pdo->prepare($sqlView);
			$preView->bindParam(':user', $user);
			$preView->bindParam(':passwd', $passwd);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
	}

?>