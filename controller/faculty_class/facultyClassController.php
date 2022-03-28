<?php
	include_once 'model/faculty_class/facultyClass.php';
	/**
	 * 
	 */
	class FacultyClassController extends FacultyClass
	{
		private $facultyClass;
		function __construct()
		{
			$this->facultyClass = new FacultyClass();
		}

		public function facultyClass(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}
			else{
				$method = 'dashboard';
			}
			switch ($method) {
				case 'add-reader':
					$result = $this->facultyClass->listClass();
					$resultFaculty = $this->facultyClass->listFaculty();
					include_once 'views/reader/add-reader.php';
					break;
				case 'update':
					$result = $this->class->listClass();
					include_once 'views/reader/add-reader.php';
					break;
				case 'edit':				
						$resultClass = $this->facultyClass->listClass();
					    $resultFaculty = $this->facultyClass->listFaculty();
						//include_once 'views/power/update-reader.php';
					break;	
				case 'destroy':
					if (isset($_GET['id'])) {
						$readerID = (int)$_GET['id'];
						$this->reader->destroy($readerID);
						//$_SESSION['destroy'] = 1;
						header('location:index.php?page=list-readers');
					}
					break;
				default:
					# code...
					break;
			}
		}
	}
?>