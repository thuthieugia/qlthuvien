<?php
	include_once 'model/category/category.php';
	/**
	 * 
	 */
	class CategoryController extends Category
	{
		
		private $category;
		function __construct()
		{
			$this->category = new Category();
		}
		public function category(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}
			else{
				$method = 'dashboard';
			}
			switch ($method) {
				case 'dashboard':
						$result = $this->category->listCategory();
					include_once 'views/category/list-categorys.php';
					break;
				case 'add':
					if (isset($_POST['btnAdd'])) {
						$this->category->addCategory($_POST['name'],$_POST['note']);
						header('location:index.php?page=list-categorys');
					}
					break;
				case 'add-category':
					include_once 'views/category/add-category.php';
					break;
				case 'update':
					if (isset($_POST['btnUpdate'])) {
							$this->category->updateCategory($_POST['id'],$_POST['name'],$_POST['note']);
						header('location:index.php?page=list-categorys');
					}
					break;
				case 'edit':				
						$result = $this->category->categoryID($_GET['id']);
						include_once 'views/category/update-category.php';
					break;	
				case 'destroy':
					if (isset($_GET['id'])) {
						$categoryID = (int)$_GET['id'];
						$this->category->destroy($categoryID);
						//$_SESSION['destroy'] = 1;
						header('location:index.php?page=list-categorys');
					}
					break;
				default:
					# code...
					break;
			}
		}
	}
?>