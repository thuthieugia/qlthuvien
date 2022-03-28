<?php
	include_once 'model/nxb/nxb.php';
	/**
	 * 
	 */
	class NXBController extends NXB
	{
		
		private $nxb;
		function __construct()
		{
			$this->nxb = new NXB();
		}
		public function nxb(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}
			else{
				$method = 'dashboard';
			}
			switch ($method) {
				case 'dashboard':
						$result = $this->nxb->listNXB();
					include_once 'views/nxb/list-nxb.php';
					break;
				case 'add':
					if (isset($_POST['btnAdd'])) {
						$this->nxb->addNXB($_POST['name'],$_POST['phone'],$_POST['email'],$_POST['address'],$_POST['note']);
						header('location:index.php?page=list-nxb');
					}
					break;
				case 'add-nxb':
					include_once 'views/nxb/add-nxb.php';
					break;
				case 'update':
					if (isset($_POST['btnUpdate'])) {
							$this->nxb->updateNXB($_POST['id'],$_POST['name'],$_POST['phone'],$_POST['email'],$_POST['address'],$_POST['note']);
						header('location:index.php?page=list-nxb');
					}
					break;
				case 'edit':				
						$result = $this->nxb->nxbID($_GET['id']);
						include_once 'views/nxb/update-nxb.php';
					break;	
				case 'destroy':
					if (isset($_GET['id'])) {
						$nxbID = (int)$_GET['id'];
						$this->nxb->destroy($nxbID);
						//$_SESSION['destroy'] = 1;
						header('location:index.php?page=list-nxb');
					}
					break;
				default:
					# code...
					break;
			}
		}
	}
?>