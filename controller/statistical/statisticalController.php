<?php
	include_once 'model/statistical/statistical.php';
	/**
	 * 
	 */
	class StatisticalController extends Statistical
	{
		private $statistical;
		function __construct()
		{
			$this->statistical = new Statistical();
		}
		public function statistical(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}
			else{
				$method = 'dashboard';
			}
			switch ($method) {
				case 'book-date':
					if (isset($_POST['btnBookDate'])) {
						$resultBDate = $this->statistical->borrowBookDate($_POST['startDate'],$_POST['finishDate']);
						$resultRDate = $this->statistical->returnBookDate($_POST['startDate'],$_POST['finishDate']);
						include_once 'views/statistical/statistical-book/book-date.php';
					}
					break;
				case 'book-month':
					if (isset($_POST['btnBookMonth'])) {
						$resultBMonth = $this->statistical->borrowBookMonth($_POST['startMonth'],$_POST['finishMonth']);
						$resultRMonth = $this->statistical->returnBookMonth($_POST['startMonth'],$_POST['finishMonth']);
						include_once 'views/statistical/statistical-book/book-month.php';
					}
					break;
				case 'book-year':
					if (isset($_POST['btnBookYear'])) {
						$resultBYear = $this->statistical->borrowBookYear($_POST['startYear'],$_POST['finishYear']);
						$resultRYear = $this->statistical->returnBookYear($_POST['startYear'],$_POST['finishYear']);
						include_once 'views/statistical/statistical-book/book-year.php';
					}
					break;
				//
					case 'reader-date':
					if (isset($_POST['btnReaderDate'])) {
						$resultBDate = $this->statistical->borrowReaderDate($_POST['startDate'],$_POST['finishDate']);
						$resultRDate = $this->statistical->returnReaderDate($_POST['startDate'],$_POST['finishDate']);
						include_once 'views/statistical/statistical-reader/reader-date.php';
					}
					break;
				case 'reader-month':
					if (isset($_POST['btnReaderMonth'])) {
						$resultBMonth = $this->statistical->borrowReaderMonth($_POST['startMonth'],$_POST['finishMonth']);
						$resultRMonth = $this->statistical->returnReaderMonth($_POST['startMonth'],$_POST['finishMonth']);
						include_once 'views/statistical/statistical-reader/reader-month.php';
					}
					break;
				case 'reader-year':
					if (isset($_POST['btnReaderYear'])) {
						$resultBYear = $this->statistical->borrowReaderYear($_POST['startYear'],$_POST['finishYear']);
						$resultRYear = $this->statistical->returnReaderYear($_POST['startYear'],$_POST['finishYear']);
						include_once 'views/statistical/statistical-reader/reader-year.php';
					}
					break;
				default:
					# code...
					break;
			}
		}
	}
?>