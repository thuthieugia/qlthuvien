<?php
	include_once 'model/borrow-book/borrow-book.php';
	/**
	 * 
	 */
	class BorrowBookController extends BorrowBook
	{
		
		private $borrowBook;
		function __construct()
		{
			$this->borrowBook = new BorrowBook();
		}
		public function borrowBook(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}
			else{
				$method = 'dashboard';
			}
			switch ($method) {
				case 'dashboard':
						$result = $this->borrowBook->listBorrowBook();
					include_once 'views/borrow-book/list-borrow-books.php';
					break;
				case 'add':
					if (isset($_POST['btnAdd'])) {
						$resultNumber = $this->borrowBook->numberBook($_POST['bookID']);
						if ($resultNumber['0']['soluong'] > 0) {			
							$this->borrowBook->subNumberBook($_POST['bookID']);
							$this->borrowBook->addBorrowBook($_POST['cardID'],$_POST['bookID'],$_POST['memberID'],$_POST['status-borrow'],$_POST['dateBorrow'],$_POST['deadline'],$_POST['note']);
							header('location:index.php?page=list-borrow-books');
						}
						else{
							$_SESSION['errorBorrowBook'] = "Sách không có sẵn trong thư viện. Vui lòng chọn sách khác!";
							header('location:index.php?page=add-borrow-book&method=add-borrow-book');				
						}
					}
					break;
				case 'add-borrow-book':
					$resultBorrowCard = $this->borrowBook->listBorrowCard();
					$resultBook = $this->borrowBook->listBook();
					include_once 'views/borrow-book/add-borrow-book.php';
					break;
				case 'update':
					if (isset($_POST['btnUpdate'])) {
						if ($_SESSION['oldBorrowBook'] != $_POST['bookID']) {
							$this->borrowBook->updateBorrowBook($_POST['id'], $_POST['cardID'],$_POST['bookID'],$_POST['memberID'],$_POST['status-borrow'],$_POST['dateBorrow'],$_POST['deadline'],$_POST['note']);
							$this->borrowBook->subNumberBook($_POST['bookID']);
							$this->borrowBook->sumNumberBook($_SESSION['oldBorrowBook']);
						}
						else{
							$this->borrowBook->updateBorrowBook($_POST['id'], $_POST['cardID'],$_POST['bookID'],$_POST['memberID'],$_POST['status-borrow'],$_POST['dateBorrow'], $_POST['deadline'],$_POST['note']);
						}
						header('location:index.php?page=list-borrow-books');
					}
					break;
				case 'edit':				
						$result = $this->borrowBook->borrowBookID($_GET['id']);
						$resultBorrowCard = $this->borrowBook->listBorrowCard();
						$resultBook = $this->borrowBook->listBook();
						include_once 'views/borrow-book/update-borrow-book.php';
					break;
				case 'destroy':
					if (isset($_GET['id'])) {
						$borrowBookID = (int)$_GET['id'];
						$this->borrowBook->destroy($borrowBookID);
						$this->borrowBook->sumNumberBook($_GET['idBook']);
						//$_SESSION['destroy'] = 1;
						header('location:index.php?page=list-borrow-books');
					}
					break;
				default:
					# code...
					break;
			}
		}
	}
?>