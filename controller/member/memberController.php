<?php
	include_once 'model/member/member.php';
	/**
	 * 
	 */
	class MemberController extends Member
	{
		private $member;
		function __construct()
		{
			$this->member = new Member();
		}
		public function member(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}
			else{
				$method = 'dashboard';
			}
			switch ($method) {
				case 'dashboard':
						$result = $this->member->listMember();
					include_once 'views/member/list-members.php';
					break;
				case 'add':
					if (isset($_POST['btnAdd'])) {
						$resultEmail = $this->member->memberEmail($_POST['email']);
						if($resultEmail){
							$_SESSION['error-email'] = "Email đã được sử dụng, vui lòng chọn email khác";
						}
						else{
							if (isset($_SESSION['error-email'])) {
								session_destroy($_SESSION['error-email']);
							}
							$this->member->addMember($_POST['name'],$_POST['gender'],$_POST['dOB'],$_POST['address'],$_POST['avatar'],$_POST['phone'],$_POST['email']);
						header('location:index.php?page=list-members');
						}
						
					}
					break;
				case 'update':
					if (isset($_POST['btnUpdate'])) {
							$this->member->updateMember($_POST['id'],$_POST['name'],$_POST['gender'],$_POST['dOB'],$_POST['address'],$_POST['phone'],$_POST['email']);
						header('location:index.php?page=list-members');
					}
					break;
				case 'edit':				
						$result = $this->member->memberID($_GET['id']);
						include_once 'views/member/update-member.php';
					break;	
				case 'destroy':
					if (isset($_GET['id'])) {
						$memberID = (int)$_GET['id'];
						$this->member->destroy($memberID);
						//$_SESSION['destroy'] = 1;
						header('location:index.php?page=list-members');
					}
					break;
				default:
					# code...
					break;
			}
		}
	}
?>