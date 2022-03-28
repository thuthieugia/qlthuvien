<?php
	include_once 'model/storage/storage.php';
	/**
	 * 
	 */
	class StorageController extends Storage
	{
		
		private $storage;
		function __construct()
		{
			$this->storage = new Storage();
		}
		public function storage(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}
			else{
				$method = 'dashboard';
			}
			switch ($method) {
				case 'dashboard':
						$result = $this->storage->listStorage();
					include_once 'views/storage/list-storages.php';
					break;
				case 'add':
					if (isset($_POST['btnAdd'])) {
						$this->storage->addStorage($_POST['name'],$_POST['note']);
						header('location:index.php?page=list-storages');
					}
					break;
				case 'add-storage':
					include_once 'views/storage/add-storage.php';
					break;
				case 'update':
					if (isset($_POST['btnUpdate'])) {
							$this->storage->updateStorage($_POST['id'],$_POST['name'],$_POST['note']);
						header('location:index.php?page=list-storages');
					}
					break;
				case 'edit':				
						$result = $this->storage->storageID($_GET['id']);
						include_once 'views/storage/update-storage.php';
					break;	
				case 'destroy':
					if (isset($_GET['id'])) {
						$storageID = (int)$_GET['id'];
						$this->storage->destroy($storageID);
						//$_SESSION['destroy'] = 1;
						header('location:index.php?page=list-storages');
					}
					break;
				default:
					# code...
					break;
			}
		}
	}
?>