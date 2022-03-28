<?php
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class Storage extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function listStorage(){
			$sqlView = "SELECT * FROM kho_sach";
			$preView = $this->pdo->prepare($sqlView);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function addStorage($name, $note){
			$sqlAdd = "INSERT INTO kho_sach(tenKho, ghiChu) VALUES (:name, :note)";
			$preAdd = $this->pdo->prepare($sqlAdd);
			$preAdd->bindParam(':name', $name);
			$preAdd->bindParam(':note', $note);
			return $preAdd->execute();
		}
		public function updateStorage($id, $name, $note){
			$sqlUpdate = "UPDATE kho_sach SET tenKho = :name, ghichu = :note WHERE maKho = :id";
			$preUpdate = $this->pdo->prepare($sqlUpdate); 
			$preUpdate->bindParam(':id', $id);
			$preUpdate->bindParam(':name', $name);
			$preUpdate->bindParam(':note', $note);
			return $preUpdate->execute();
		}	
		public function destroy($id){
            $sqlDel = "DELETE FROM kho_sach WHERE maKho = :id";
            $preDel = $this->pdo->prepare($sqlDel);
            $preDel->bindParam(':id',$id);
            return $preDel->execute();

            // $query = mysqli_query($condb,$sqlDel);
             
            //  return $result_ID = "Xóa thành công";
        }
        public function storageID($id){
        	$sqlID = "SELECT* FROM kho_sach WHERE maKho = :id";
        	$preID = $this->pdo->prepare($sqlID);
        	$preID->bindParam(':id',$id);
        	$preID->execute();
    		return $preID->fetchAll(PDO::FETCH_ASSOC);
        }
	}
?>