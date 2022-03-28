<?php
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class NXB extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function listNXB(){
			$sqlView = "SELECT * FROM nha_xuat_ban";
			$preView = $this->pdo->prepare($sqlView);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function addNXB($name, $phone, $email, $address, $note){
			$sqlAdd = "INSERT INTO nha_xuat_ban(tenNXB, dienthoai, email, diachi, ghiChu) VALUES (:name, :phone, :email, :address, :note)";
			$preAdd = $this->pdo->prepare($sqlAdd);
			$preAdd->bindParam(':name', $name);
			$preAdd->bindParam(':phone', $phone);
			$preAdd->bindParam(':email', $email);
			$preAdd->bindParam(':address', $address);
			$preAdd->bindParam(':note', $note);
			return $preAdd->execute();
		}
		public function updateNXB($id, $name, $phone, $email, $address, $note){
			$sqlUpdate = "UPDATE nha_xuat_ban SET tenNXB = :name, dienthoai = :phone, email = :email, diachi = :address, ghichu = :note WHERE maNXB = :id";
			$preUpdate = $this->pdo->prepare($sqlUpdate); 
			$preUpdate->bindParam(':id', $id);
			$preUpdate->bindParam(':name', $name);
			$preUpdate->bindParam(':phone', $phone);
			$preUpdate->bindParam(':email', $email);
			$preUpdate->bindParam(':address', $address);
			$preUpdate->bindParam(':note', $note);
			return $preUpdate->execute();
		}	
		public function destroy($id){
            $sqlDel = "DELETE FROM nha_xuat_ban WHERE maNXB = :id";
            $preDel = $this->pdo->prepare($sqlDel);
            $preDel->bindParam(':id',$id);
            return $preDel->execute();

            // $query = mysqli_query($condb,$sqlDel);
             
            //  return $result_ID = "Xóa thành công";
        }
        public function NXBID($id){
        	$sqlID = "SELECT* FROM nha_xuat_ban WHERE maNXB = :id";
        	$preID = $this->pdo->prepare($sqlID);
        	$preID->bindParam(':id',$id);
        	$preID->execute();
    		return $preID->fetchAll(PDO::FETCH_ASSOC);
        }
	}
?>