<?php
	include_once 'model/account/account.php';
	/**
	 * 
	 */
	class AccountController extends Account
	{
		private $account;
		function __construct()
		{
			$this->account = new Account();
		}

		public function account(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}
			else{
				$method = 'dashboard';
			}
			switch ($method) {
				case 'dashboard':
					if (isset($_POST['btnSearch']) ) {
						$result = $this->account->searchAccount($_POST['key']);
					}
					else{
						$result = $this->account->listAccount();
					}
					include_once 'views/account/list-accounts.php';
					break;
				case 'add':	
					if (isset($_POST['btnAdd'])) {
						$resultEmail = $this->account->accountEmail($_POST['email']);
						if($resultEmail){
							$_SESSION['error-email'] = "Email đã được sử dụng, vui lòng chọn email khác";
						}
						else{
							$result = $this->account->listAccount();
							$this->account->addAccount($_POST['name'],$_POST['email'],$_POST['passwd']);
							if (isset($_SESSION['error-email'])) {
								session_destroy($_SESSION['error-email']);
							}
							header('location:index.php?page=list-accounts');
						}
						
					}
					break;
				case 'update':
					if (isset($_POST['btnUpdate'])) {
						$this->account->updateAccount($_POST['id'],$_POST['name'],$_POST['email'],$_POST['passwd']);
						header('location:index.php?page=list-accounts');
					}
					break;
				case 'edit':				
						$result = $this->account->accountID($_GET['id']);
						include_once 'views/account/update-account.php';
					break;	
				case 'destroy':
					if (isset($_GET['id'])) {
						$accountID = (int)$_GET['id'];
						$this->account->destroy($accountID);
						//$_SESSION['destroy'] = 1;
						header('location:index.php?page=list-accounts');
					}
					break;
				default:
					# code...
					break;
			}
		}
	}
?>