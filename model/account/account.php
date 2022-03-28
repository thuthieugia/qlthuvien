<?php
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class Account extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}
		
		public function listAccount(){
			$sqlView = "SELECT maCanBo, tenCanBo, email, matKhau  FROM can_bo_thu_vien";
			$preView = $this->pdo->prepare($sqlView);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function addAccount($name, $email, $matKhau){
			$sqlAdd = "INSERT INTO can_bo_thu_vien(tenCanBo, email, matKhau) VALUES (:name, :email, :matKhau)";
			$preAdd = $this->pdo->prepare($sqlAdd);
			$preAdd->bindParam(':name', $name);
			$preAdd->bindParam(':email', $email);
			$preAdd->bindParam(':matKhau', $matKhau);
			return $preAdd->execute();
		}
		public function updateAccount($id, $name, $email, $matKhau){
			$sqlUpdate = "UPDATE can_bo_thu_vien SET tenCanBo = :name, email = :email, matKhau = :matKhau WHERE maCanBo = :id";
			$preUpdate = $this->pdo->prepare($sqlUpdate);
			$preUpdate->bindParam(':id',$id);
			$preUpdate->bindParam(':name', $name);
			$preUpdate->bindParam(':email', $email);
			$preUpdate->bindParam(':matKhau', $matKhau);
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
        public function accountID($id){
        	$id = $id;
        	$sqlID = "SELECT maCanBo, tenCanBo, email, matKhau  FROM can_bo_thu_vien WHERE maCanBo = :id";
        	$preID = $this->pdo->prepare($sqlID);
        	$preID->bindParam(':id',$id);
        	$preID->execute();
    		return $preID->fetchAll(PDO::FETCH_ASSOC);
        }
        public function accountEmail($email){
        	$sqlID = "SELECT email FROM can_bo_thu_vien WHERE email = :email";
        	$preID = $this->pdo->prepare($sqlID);
        	$preID->bindParam(':email',$email);
        	$preID->execute();
    		return $preID->fetchAll(PDO::FETCH_ASSOC);
        }
	}
?>