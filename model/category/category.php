<?php
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class Category extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function listCategory(){
			$sqlView = "SELECT * FROM the_loai_sach";
			$preView = $this->pdo->prepare($sqlView);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function addCategory($name,  $note){
			$sqlAdd = "INSERT INTO the_loai_sach(tenTheLoai, ghiChu) VALUES (:name, :note)";
			$preAdd = $this->pdo->prepare($sqlAdd);
			$preAdd->bindParam(':name', $name);
			$preAdd->bindParam(':note', $note);
			return $preAdd->execute();
		}
		public function updateCategory($id, $name, $note){
			$sqlUpdate = "UPDATE the_loai_sach SET tenTheLoai = :name, ghichu = :note WHERE maTheLoai = :id";
			$preUpdate = $this->pdo->prepare($sqlUpdate); 
			$preUpdate->bindParam(':id', $id);
			$preUpdate->bindParam(':name', $name);
			$preUpdate->bindParam(':note', $note);
			return $preUpdate->execute();
		}	
		public function destroy($id){
            $sqlDel = "DELETE FROM the_loai_sach WHERE maTheLoai = :id";
            $preDel = $this->pdo->prepare($sqlDel);
            $preDel->bindParam(':id',$id);
            return $preDel->execute();

            // $query = mysqli_query($condb,$sqlDel);
             
            //  return $result_ID = "Xóa thành công";
        }
        public function categoryID($id){
        	$sqlID = "SELECT* FROM the_loai_sach WHERE maTheLoai = :id";
        	$preID = $this->pdo->prepare($sqlID);
        	$preID->bindParam(':id',$id);
        	$preID->execute();
    		return $preID->fetchAll(PDO::FETCH_ASSOC);
        }
	}
?>