<?php
include_once 'model/return-book/return-book.php';
	/**
	 * 
	 */
	class ReturnBookController extends ReturnBook
	{
		private $returnBook;
		function __construct()
		{
			$this->returnBook = new ReturnBook();
		}
		public function returnBook(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}
			else{
				$method = 'dashboard';
			}
			switch ($method) {
				case 'dashboard':
					$result = $this->returnBook->listReturnBook();
					include_once 'views/return-book/list-return-books.php';
				break;
				case 'add':
					if (isset($_POST['btnAdd'])) {
						$this->returnBook->addReturnBook($_POST['id'], $_POST['status-return'], $_POST['dateReturn'], $_POST['price'], $_POST['memberID'], $_POST['note']);
						$this->returnBook->sumNumberBook($_POST['bookID']);
						header('location:index.php?page=list-return-books');
					}
				break;
				case 'add-return':
					$result = $this->returnBook->returnBookID($_GET['id']);
					$resultReturnCard = $this->returnBook->listReturnCard();
					$resultBook = $this->returnBook->listBook();
					include_once 'views/return-book/add-return-book.php';
				break;
				case 'update':
					if (isset($_POST['btnUpdate'])) {
						$this->returnBook->addReturnBook($_POST['id'], $_POST['status-return'], $_POST['dateReturn'], $_POST['price'], $_POST['memberID'], $_POST['note']);
						header('location:index.php?page=list-return-books');
					}
				break;
				case 'edit':				
					$result = $this->returnBook->returnBookID($_GET['id']);
					$resultReturnCard = $this->returnBook->listReturnCard();
					$resultBook = $this->returnBook->listBook();
					include_once 'views/return-book/update-return-book.php';
				break;	
				case 'destroy':
					if (isset($_GET['id'])) {
						$returnBookID = (int)$_GET['id'];
						$this->returnBook->destroy($returnBookID);
							//$_SESSION['destroy'] = 1;
						header('location:index.php?page=list-return-books');
					}
				break;
				default:
					# code...
				break;
			}
		}
	}
	?>