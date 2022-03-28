<?php
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class Power extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function listPower(){
			$sqlView = "SELECT maCanBo, tenCanBo, email, quyenHan  FROM can_bo_thu_vien";
			$preView = $this->pdo->prepare($sqlView);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function addPower($name, $email, $quyenHan){
			$sqlAdd = "INSERT INTO can_bo_thu_vien(tenCanBo, email, quyenHan) VALUES (:name, :email, :quyenHan)";
			$preAdd = $this->pdo->prepare($sqlAdd);
			$preAdd->bindParam(':name', $name);
			$preAdd->bindParam(':email', $email);
			$preAdd->bindParam(':quyenHan', $quyenHan);
			return $preAdd->execute();
		}
		public function updatePower($id, $name, $email, $quyenHan){
			$sqlUpdate = "UPDATE can_bo_thu_vien SET tenCanBo = :name, email = :email, quyenHan = :quyenHan WHERE maCanBo = :id";
			$preUpdate = $this->pdo->prepare($sqlUpdate);
			$preUpdate->bindParam(':id',$id);
			$preUpdate->bindParam(':name', $name);
			$preUpdate->bindParam(':email', $email);
			$preUpdate->bindParam(':quyenHan', $quyenHan);
			return $preUpdate->execute();
		}
		public function destroy($id){
            $account = $id;
            $sqlDel = "DELETE FROM can_bo_thu_vien WHERE maCanBo = :id";
            $preDel = $this->pdo->prepare($sqlDel);
            $preDel->bindParam(':id',$account);
            return $preDel->execute();

            // $query = mysqli_query($condb,$sqlDel);
             
            //  return $result_ID = "Xóa thành công";;
        }
        public function powerID($id){
        	$id = $id;
        	$sqlID = "SELECT maCanBo, tenCanBo, email, quyenHan  FROM can_bo_thu_vien WHERE maCanBo = :id";
        	$preID = $this->pdo->prepare($sqlID);
        	$preID->bindParam(':id',$id);
        	$preID->execute();
    		return $preID->fetchAll(PDO::FETCH_ASSOC);
        }
         public function searchPower($key){
            $sqlSearch = "SELECT maCanBo, tenCanBo, email, quyenHan FROM can_bo_thu_vien WHERE  maCanBo LIKE '%$key%' OR  tenCanBo LIKE '%$key%' OR  email LIKE '%$key%' OR  quyenHan LIKE '%$key%'";
            $preSearch = $this->pdo->prepare($sqlSearch);
            $preSearch->execute();
            return $preSearch->fetchAll(PDO::FETCH_ASSOC);
		}
		public function powerEmail($email){
        	$sqlID = "SELECT email FROM can_bo_thu_vien WHERE email = :email";
        	$preID = $this->pdo->prepare($sqlID);
        	$preID->bindParam(':email',$email);
        	$preID->execute();
    		return $preID->fetchAll(PDO::FETCH_ASSOC);
        }
	}
?>