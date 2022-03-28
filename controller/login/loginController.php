<?php
	include_once 'model/login/login.php';
	/**
	 * 
	 */
	class LoginController extends Login
	{
		private $login;
		function __construct()
		{
			$this->login = new Login();
		}
		public function login(){
			if (isset($_GET['method'])) {
				$login = $_GET['method'];
			}
			else{
				$login = 'login';
			}
			switch ($login) {
				case 'login':
					if (isset($_POST['login']) ) {
						if ($_POST['account'] == '') {
							$_SESSION['error'] = "Vui lòng nhập tài khoản";
						}
						else{
							if ($_POST['pass'] == '') {
								$_SESSION['error'] = "Vui lòng nhập mật khẩu";
							}
							else{
								$result = $this->login->login($_POST['account'], $_POST['pass']);
								if ($result) {
									include_once 'views/login/login.php';
									session_destroy($_SESSION['error']);
								}
								else{
									$_SESSION['error'] = "Tài khoản khoặc mật khẩu không chính xác";
								}
							}
							
						}

					}
					break;
				default:
					# code...
					break;
			}
		}
	}
?>