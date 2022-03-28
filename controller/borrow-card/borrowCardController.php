<?php
	include_once 'model/borrow-card/borrow-card.php';
	/**
	 * 
	 */
	class BorrowCardController extends BorrowCard
	{
		
		private $borrowCard;
		function __construct()
		{
			$this->borrowCard = new BorrowCard();
		}
		public function borrowCard(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}
			else{
				$method = 'dashboard';
			}
			switch ($method) {
				case 'dashboard':
						$result = $this->borrowCard->listBorrowCard();
					include_once 'views/borrow-card/list-borrow-cards.php';
					break;
				case 'add':
					if (isset($_POST['btnAdd'])) {
						$this->borrowCard->addBorrowCard($_POST['name'],$_POST['date']);
						header('location:index.php?page=list-borrow-cards');
					}
					break;
				case 'add-borrow-card':
					include_once 'views/borrow-card/add-borrow-card.php';
					$result = $this->borrowCard->listReader();
					include_once 'views/borrow-card/add-borrow-card.php';
					break;
				case 'update':
					if (isset($_POST['btnUpdate'])) {
							$this->borrowCard->updateBorrowCard($_POST['id'],$_POST['name'],$_POST['date']);
						header('location:index.php?page=list-borrow-cards');
					}
					break;
				case 'edit':				
						$result = $this->borrowCard->borrowCardID($_GET['id']);
						$resultReader = $this->borrowCard->listReader();
						include_once 'views/borrow-card/update-borrow-card.php';
					break;	
				case 'destroy':
					if (isset($_GET['id'])) {
						$borrowCardID = (int)$_GET['id'];
						$this->borrowCard->destroy($borrowCardID);
						//$_SESSION['destroy'] = 1;
						header('location:index.php?page=list-borrow-cards');
					}
					break;
				default:
					# code...
					break;
			}
		}
	}
?>