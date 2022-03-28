<?php
	include_once 'model/power/power.php';
	/**
	 * 
	 */
	class PowerController extends Power
	{
		private $power;
		function __construct()
		{
			$this->power = new Power();
		}

		public function power(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}
			else{
				$method = 'dashboard';
			}
			switch ($method) {
				case 'dashboard':
					if (isset($_POST['btnSearch']) ) {
						$result = $this->power->searchPower($_POST['key']);
					}
					else{
						$result = $this->power->listPower();
					}
					include_once 'views/power/list-powers.php';
					break;
				case 'add':	
					if (isset($_POST['btnAdd'])) {
						$resultEmail = $this->power->powerEmail($_POST['email']);
						if($resultEmail){
							$_SESSION['error-email'] = "Email đã được sử dụng, vui lòng chọn email khác";
						}
						else{
							$result = $this->power->listPower();
							$this->power->addPower($_POST['name'],$_POST['email'],$_POST['power']);
						
							if (isset($_SESSION['error-email'])) {
								session_destroy($_SESSION['error-email']);
							}
							header('location:index.php?page=list-powers');
						}
						
					}
					break;
				case 'update':
					if (isset($_POST['btnUpdate'])) {
						$this->power->updatePower($_POST['id'],$_POST['name'],$_POST['email'],$_POST['power']);
						header('location:index.php?page=list-powers');
					}
					break;
				case 'edit':				
						$result = $this->power->powerID($_GET['id']);
						include_once 'views/power/update-power.php';
					break;	
				case 'destroy':
					if (isset($_GET['id'])) {
						$powerID = (int)$_GET['id'];
						$this->power->destroy($powerID);
						//$_SESSION['destroy'] = 1;
						header('location:index.php?page=list-powers');
					}
					break;
				default:
					# code...
					break;
			}
		}
	}
?>