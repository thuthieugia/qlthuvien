<?php
	include_once 'model/book/book.php';
	/**
	 * 
	 */
	class BookController extends Book
	{
		private $book;
		function __construct()
		{
			$this->book = new Book();
		}
		public function book(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}
			else{
				$method = 'dashboard';
			}
			switch ($method) {
				case 'dashboard':
						$result = $this->book->listBook();
					include_once 'views/book/list-books.php';
					break;
				case 'add':
					if (isset($_POST['btnAdd'])) {
						$this->book->addBook($_POST['name'],$_POST['avatar'],$_POST['author'],$_POST['category'],$_POST['NXB'],$_POST['number'],$_POST['price'],$_POST['store']);
						header('location:index.php?page=list-books');
					}
					break;
				case 'add-book':
					$resultCategory = $this->book->listCategory();
					$resultNXB = $this->book->listNXB();
					$resultStore = $this->book->listStore();
					include_once 'views/book/add-book.php';
					break;
				case 'update':
					if (isset($_POST['btnUpdate'])) {
							$this->book->updateBook($_POST['id'],$_POST['name'],$_POST['author'],$_POST['category'],$_POST['NXB'],$_POST['number'],$_POST['price'],$_POST['store']);
						header('location:index.php?page=list-books');
					}
					break;
				case 'edit':				
						$result = $this->book->bookID($_GET['id']);
						$resultCategory = $this->book->listCategory();
						$resultNXB = $this->book->listNXB();
						$resultStore = $this->book->listStore();
						include_once 'views/book/update-book.php';
					break;	
				case 'destroy':
					if (isset($_GET['id'])) {
						$bookID = (int)$_GET['id'];
						$this->book->destroy($bookID);
						//$_SESSION['destroy'] = 1;
						header('location:index.php?page=list-books');
					}
					break;
				default:
					# code...
					break;
			}
		}
	}
?>