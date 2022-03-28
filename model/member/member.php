<?php
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class Member extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function listMember(){
			$sqlView = "SELECT maCanBo, tenCanBo, gioiTinh, namSinh, diaChi, anh, SDT, email, quyenHan FROM can_bo_thu_vien";
			$preView = $this->pdo->prepare($sqlView);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function addMember($name, $gender, $dOB, $address, $avatar, $phone, $email){
			$anh="";
				$target_dir="assets/img/members/";
				$target_file = $target_dir.basename($_FILES["avatar"]["name"]);
				//upload hinh anh
					move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
					$anh=$_FILES["avatar"]["name"];
			$sqlAdd = "INSERT INTO can_bo_thu_vien(tenCanBo, gioiTinh, namSinh, diaChi, anh, SDT, email) VALUES (:name, :gender,:dOB, :address, :avatar, :phone, :email)";
			$preAdd = $this->pdo->prepare($sqlAdd);
			$preAdd->bindParam(':name', $name);
			$preAdd->bindParam(':gender', $gender);
			$preAdd->bindParam(':dOB', $dOB);
			$preAdd->bindParam(':address', $address);
			$preAdd->bindParam(':avatar', $anh);
			$preAdd->bindParam(':phone', $phone);
			$preAdd->bindParam(':email', $email);
			return $preAdd->execute();
		}
		public function updateMember($id, $name, $gender, $dOB, $address, $phone, $email){
			$anh="";
				$target_dir="assets/img/members/";
				$target_file = $target_dir.basename($_FILES["avatar"]["name"]);
				//upload hinh anh
				if($_FILES["avatar"]["error"]!=0)
				{
					$sqlUpdate = "UPDATE can_bo_thu_vien SET tenCanBo = :name, namSinh = :dOB, gioiTinh = :gender, diaChi = :address, SDT = :phone, email = :email WHERE maCanBo = :id";
					$preUpdate = $this->pdo->prepare($sqlUpdate);
				}
				else
				{
					move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
					$anh=$_FILES["avatar"]["name"];
					$sqlUpdate = "UPDATE can_bo_thu_vien SET tenCanBo = :name, namSinh = :dOB, gioiTinh = :gender, diaChi = :address, anh = :avatar, SDT = :phone, email = :email WHERE maCanBo = :id";
					$preUpdate = $this->pdo->prepare($sqlUpdate);
					$preUpdate->bindParam(':avatar', $anh);
				}
			
			$preUpdate->bindParam(':id', $id);
			$preUpdate->bindParam(':name', $name);
			$preUpdate->bindParam(':dOB', $dOB);
			$preUpdate->bindParam(':gender', $gender);
			$preUpdate->bindParam(':address', $address);
			$preUpdate->bindParam(':phone', $phone);
			$preUpdate->bindParam(':email', $email);
			return $preUpdate->execute();
		}
		public function destroy($id){
            //$account = $id;
            $sqlDel = "DELETE FROM can_bo_thu_vien WHERE maCanBo = :id";
            $preDel = $this->pdo->prepare($sqlDel);
            $preDel->bindParam(':id',$id);
            return $preDel->execute();

            // $query = mysqli_query($condb,$sqlDel);
             
            //  return $result_ID = "Xóa thành công";
        }
        public function memberID($id){
        	//$id = $id;
        	$sqlID = "SELECT* FROM can_bo_thu_vien WHERE maCanBo = :id";
        	$preID = $this->pdo->prepare($sqlID);
        	$preID->bindParam(':id',$id);
        	$preID->execute();
    		return $preID->fetchAll(PDO::FETCH_ASSOC);
        }
        public function memberEmail($email){
        	$sqlID = "SELECT email FROM can_bo_thu_vien WHERE email = :email";
        	$preID = $this->pdo->prepare($sqlID);
        	$preID->bindParam(':email',$email);
        	$preID->execute();
    		return $preID->fetchAll(PDO::FETCH_ASSOC);
        }

  //       public function searchMember($key){
  //           $sqlSearch = "SELECT * FROM doc_gia WHERE  maThe LIKE '%$key%' OR  hoTen LIKE '%$key%' OR  ngaySinh LIKE '%$key%' OR  gioiTinh LIKE '%$key%' OR  diaChi LIKE '%$key%' OR  anh LIKE '%$key%' OR  SDT LIKE '%$key%' OR  email LIKE '%$key%' OR  trinhDo LIKE '%$key%' OR  maLop LIKE '%$key%' OR  maKhoa LIKE '%$key%' OR  khoaHoc LIKE '%$key%' OR  ngayCapThe LIKE '%$key%' OR  hanDungThe LIKE '%$key%''";
  //           $preSearch = $this->pdo->prepare($sqlSearch);
  //           $preSearch->execute();
  //           return $preSearch->fetchAll(PDO::FETCH_ASSOC);
		// }
	}
?>