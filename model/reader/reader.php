<?php
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class Reader extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function listReader(){
			$sqlView = "SELECT maThe, hoTen, ngaySinh, gioiTinh, doc_gia.diaChi, anh, doc_gia.SDT, doc_gia.email, trinhDo, maLop, khoa.tenKhoa, khoaHoc, ngayCapThe, hanDungThe FROM doc_gia LEFT OUTER JOIN khoa ON doc_gia.maKhoa = khoa.maKhoa";
			$preView = $this->pdo->prepare($sqlView);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function addReader($id, $name, $dOB, $gender, $address, $avatar, $phone, $email, $level, $classID, $facultyID, $timeStudy, $timeStart, $timeFinish){
			$anh="";
				$target_dir="assets/img/readers/";
				$target_file = $target_dir.basename($_FILES["avatar"]["name"]);
				//upload hinh anh
					move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
					$anh=$_FILES["avatar"]["name"];
			$sqlAdd = "INSERT INTO doc_gia(maThe, hoTen, ngaySinh, gioiTinh, diaChi, anh, SDT, email, trinhDo, maLop, maKhoa, khoaHoc, ngayCapThe, hanDungThe) VALUES (:id, :name, :dOB, :gender,:address, :avatar, :phone, :email, :level, :classID, :facultyID, :timeStudy, :timeStart, :timeFinish)";
			$preAdd = $this->pdo->prepare($sqlAdd);
			$preAdd->bindParam(':id', $id);
			$preAdd->bindParam(':name', $name);
			$preAdd->bindParam(':dOB', $dOB);
			$preAdd->bindParam(':gender', $gender);
			$preAdd->bindParam(':address', $address);
			$preAdd->bindParam(':avatar', $anh);
			$preAdd->bindParam(':phone', $phone);
			$preAdd->bindParam(':email', $email);
			$preAdd->bindParam(':level', $level);
			$preAdd->bindParam(':classID', $classID);
			$preAdd->bindParam(':facultyID', $facultyID);
			$preAdd->bindParam(':timeStudy', $timeStudy);
			$preAdd->bindParam(':timeStart', $timeStart);
			$preAdd->bindParam(':timeFinish', $timeFinish);
			return $preAdd->execute();
		}
		public function updateReader($id, $name, $dOB, $gender, $address, $phone, $email, $level, $facultyID, $classID, $timeStudy, $timeStart, $timeFinish){
			$anh="";
				$target_dir="assets/img/readers/";
				$target_file = $target_dir.basename($_FILES["avatar"]["name"]);
				//upload hinh anh
				if($_FILES["avatar"]["error"]!=0)
				{
					$sqlUpdate = "UPDATE doc_gia SET hoTen = :name, ngaySinh = :dOB, gioiTinh = :gender, diaChi = :address,  SDT = :phone, email = :email, trinhDo = :level, maLop = :classID, maKhoa = :facultyID, khoaHoc = :timeStudy, ngayCapThe = :timeStart, hanDungThe = :timeFinish WHERE maThe = :id";
					$preUpdate = $this->pdo->prepare($sqlUpdate);
				}
				else
				{
					move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
					$anh=$_FILES["avatar"]["name"];
					$sqlUpdate = "UPDATE doc_gia SET hoTen = :name, ngaySinh = :dOB, gioiTinh = :gender, diaChi = :address, anh = :avatar, SDT = :phone, email = :email, trinhDo = :level, maLop = :classID, maKhoa = :facultyID, khoaHoc = :timeStudy, ngayCapThe = :timeStart, hanDungThe = :timeFinish WHERE maThe = :id";
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
			$preUpdate->bindParam(':level', $level);
			$preUpdate->bindParam(':classID', $classID);
			$preUpdate->bindParam(':facultyID', $facultyID);
			$preUpdate->bindParam(':timeStudy', $timeStudy);
			$preUpdate->bindParam(':timeStart', $timeStart);
			$preUpdate->bindParam(':timeFinish', $timeFinish);
			return $preUpdate->execute();
		}
		public function destroy($id){
            //$account = $id;
            $sqlDel = "DELETE FROM doc_gia WHERE maThe = :id";
            $preDel = $this->pdo->prepare($sqlDel);
            $preDel->bindParam(':id',$id);
            return $preDel->execute();

            // $query = mysqli_query($condb,$sqlDel);
             
            //  return $result_ID = "Xóa thành công";
        }
        public function readerID($id){
        	//$id = $id;
        	$sqlID = "SELECT maThe, hoTen, ngaySinh, gioiTinh, doc_gia.diaChi, anh, doc_gia.SDT, doc_gia.email, trinhDo, maLop,khoa.maKhoa, khoa.tenKhoa, khoaHoc, ngayCapThe, hanDungThe FROM doc_gia,khoa  WHERE doc_gia.maKhoa = khoa.maKhoa AND maThe = :id";
        	$preID = $this->pdo->prepare($sqlID);
        	$preID->bindParam(':id',$id);
        	$preID->execute();
    		return $preID->fetchAll(PDO::FETCH_ASSOC);
        }

        public function searchReader($key){
            $sqlSearch = "SELECT * FROM doc_gia WHERE  maThe LIKE '%$key%' OR  hoTen LIKE '%$key%' OR  ngaySinh LIKE '%$key%' OR  gioiTinh LIKE '%$key%' OR  diaChi LIKE '%$key%' OR  anh LIKE '%$key%' OR  SDT LIKE '%$key%' OR  email LIKE '%$key%' OR  trinhDo LIKE '%$key%' OR  maLop LIKE '%$key%' OR  maKhoa LIKE '%$key%' OR  khoaHoc LIKE '%$key%' OR  ngayCapThe LIKE '%$key%' OR  hanDungThe LIKE '%$key%''";
            $preSearch = $this->pdo->prepare($sqlSearch);
            $preSearch->execute();
            return $preSearch->fetchAll(PDO::FETCH_ASSOC);
		}
		public function listClass(){
			$sqlView = "SELECT *  FROM lop";
			$preView = $this->pdo->prepare($sqlView);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function listFaculty(){
			$sqlViewFaculty = "SELECT * FROM khoa";
			$preViewFaculty = $this->pdo->prepare($sqlViewFaculty);
			$preViewFaculty->execute();
			return $preViewFaculty->fetchAll(PDO::FETCH_ASSOC);
		}
		public function readerEmail($email){
        	$sqlID = "SELECT email FROM doc_gia WHERE email = :email";
        	$preID = $this->pdo->prepare($sqlID);
        	$preID->bindParam(':email',$email);
        	$preID->execute();
    		return $preID->fetchAll(PDO::FETCH_ASSOC);
        }
	}
?>