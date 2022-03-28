<?php
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class BorrowCard extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function listBorrowCard(){
			$sqlView = "SELECT muon_tra.id, muon_tra.maDocGia, muon_tra.ngayTao, doc_gia.hoTen FROM muon_tra,doc_gia WHERE muon_tra.maDocGia =doc_gia.maThe";
			$preView = $this->pdo->prepare($sqlView);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function addBorrowCard($name, $date){
			$sqlAdd = "INSERT INTO muon_tra(maDocGia, ngayTao) VALUES (:name, :create_at)";
			$preAdd = $this->pdo->prepare($sqlAdd);
			$preAdd->bindParam(':name', $name);
			$preAdd->bindParam(':create_at', $date);
			return $preAdd->execute();
		}
		public function updateBorrowCard($id, $name, $date){
			$sqlUpdate = "UPDATE muon_tra SET maDocGia = :name, ngayTao = :create_at WHERE id = :id";
			$preUpdate = $this->pdo->prepare($sqlUpdate); 
			$preUpdate->bindParam(':id', $id);
			$preUpdate->bindParam(':name', $name);
			$preUpdate->bindParam(':create_at', $date);
			return $preUpdate->execute();
		}	
		public function destroy($id){
            $sqlDel = "DELETE FROM muon_tra WHERE id = :id";
            $preDel = $this->pdo->prepare($sqlDel);
            $preDel->bindParam(':id',$id);
            return $preDel->execute();

            // $query = mysqli_query($condb,$sqlDel);
             
            //  return $result_ID = "Xóa thành công";
        }
        public function borrowCardID($id){
        	$sqlID = "SELECT* FROM muon_tra WHERE id = :id";
        	$preID = $this->pdo->prepare($sqlID);
        	$preID->bindParam(':id',$id);
        	$preID->execute();
    		return $preID->fetchAll(PDO::FETCH_ASSOC);
        }
        public function listReader(){
			$sqlView = "SELECT maThe, hoTen FROM doc_gia";
			$preView = $this->pdo->prepare($sqlView);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
	}
?>