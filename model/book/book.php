<?php
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class Book extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function listBook(){
			$sqlView = "SELECT * FROM kho_sach,nha_xuat_ban,the_loai_sach,sach WHERE sach.maTheLoai = the_loai_sach.maTheLoai AND sach.maNXB = nha_xuat_ban.maNXB AND sach.maKho = kho_sach.maKho";
			$preView = $this->pdo->prepare($sqlView);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function addBook($name,$avatar,$author,$category,$NXB,$number,$price,$store){
			$anh="";
				$target_dir="assets/img/books/";
				$target_file = $target_dir.basename($_FILES["avatar"]["name"]);
				//upload hinh anh
					move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
					$anh=$_FILES["avatar"]["name"];
			$sqlAdd = "INSERT INTO sach(tenSach, anh, tenTacGia, maTheLoai, maNXB, soluong, giaTien, maKho) VALUES (:name, :anh, :tenTacGia, :maTheLoai, :maNXB, :soluong, :giaTien, :maKho)";
			$preAdd = $this->pdo->prepare($sqlAdd);
			$preAdd->bindParam(':name', $name);
			$preAdd->bindParam(':anh', $anh);
			$preAdd->bindParam(':tenTacGia', $author);
			$preAdd->bindParam(':maTheLoai', $category);
			$preAdd->bindParam(':maNXB', $NXB);
			$preAdd->bindParam(':soluong', $number);
			$preAdd->bindParam(':giaTien', $price);
			$preAdd->bindParam(':maKho', $store);
			return $preAdd->execute();
		}
		public function updateBook($id, $name,$author,$category,$NXB,$number,$price,$store){
			$anh="";
				$target_dir="assets/img/books/";
				$target_file = $target_dir.basename($_FILES["avatar"]["name"]);
				//upload hinh anh
				if($_FILES["avatar"]["error"]!=0)
				{
					$sqlUpdate = "UPDATE sach SET tenSach = :name, tenTacGia = :tenTacGia, maTheLoai = :maTheLoai, maNXB = :maNXB, soluong = :soluong, giaTien = :giaTien, maKho = :maKho WHERE maSach = :id";
					$preUpdate = $this->pdo->prepare($sqlUpdate); 
				}
				else
				{
					move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
					$anh=$_FILES["avatar"]["name"];
					$sqlUpdate = "UPDATE sach SET tenSach = :name, anh = :anh, tenTacGia = :tenTacGia, maTheLoai = :maTheLoai, maNXB = :maNXB, soluong = :soluong, giaTien = :giaTien, maKho = :maKho WHERE maSach = :id";
					$preUpdate = $this->pdo->prepare($sqlUpdate); 
					$preUpdate->bindParam(':anh', $anh);
				}
			$preUpdate->bindParam(':id', $id);
			$preUpdate->bindParam(':name', $name);
			$preUpdate->bindParam(':tenTacGia', $author);
			$preUpdate->bindParam(':maTheLoai', $category);
			$preUpdate->bindParam(':maNXB', $NXB);
			$preUpdate->bindParam(':soluong', $number);
			$preUpdate->bindParam(':giaTien', $price);
			$preUpdate->bindParam(':maKho', $store);
			return $preUpdate->execute();
		}
		
		public function destroy($id){
            //$account = $id;
            $sqlDel = "DELETE FROM sach WHERE maSach = :id";
            $preDel = $this->pdo->prepare($sqlDel);
            $preDel->bindParam(':id',$id);
            return $preDel->execute();

            // $query = mysqli_query($condb,$sqlDel);
             
            //  return $result_ID = "Xóa thành công";
        }
        public function bookID($id){
        	//$id = $id;
        	$sqlID = "SELECT* FROM sach WHERE maSach = :id";
        	$preID = $this->pdo->prepare($sqlID);
        	$preID->bindParam(':id',$id);
        	$preID->execute();
    		return $preID->fetchAll(PDO::FETCH_ASSOC);
        }
        public function listCategory(){
        	$sqlViewCategory = "SELECT * FROM the_loai_sach";
			$preViewCategory = $this->pdo->prepare($sqlViewCategory);
            $preViewCategory->execute();
            return $preViewCategory->fetchAll(PDO::FETCH_ASSOC);
        }
        public function listNXB(){
        	$sqlViewNXB = "SELECT * FROM nha_xuat_ban";
			$preViewNXB = $this->pdo->prepare($sqlViewNXB);
            $preViewNXB->execute();
            return $preViewNXB->fetchAll(PDO::FETCH_ASSOC);
        }
        public function listStore(){
        	$sqlViewStore = "SELECT * FROM kho_sach";
			$preViewStore = $this->pdo->prepare($sqlViewStore);
            $preViewStore->execute();
            return $preViewStore->fetchAll(PDO::FETCH_ASSOC);
        }

  //       public function searchBook($key){
  //           $sqlSearch = "SELECT * FROM doc_gia WHERE  maThe LIKE '%$key%' OR  hoTen LIKE '%$key%' OR  ngaySinh LIKE '%$key%' OR  gioiTinh LIKE '%$key%' OR  diaChi LIKE '%$key%' OR  anh LIKE '%$key%' OR  SDT LIKE '%$key%' OR  email LIKE '%$key%' OR  trinhDo LIKE '%$key%' OR  maLop LIKE '%$key%' OR  maKhoa LIKE '%$key%' OR  khoaHoc LIKE '%$key%' OR  ngayCapThe LIKE '%$key%' OR  hanDungThe LIKE '%$key%''";
  //           $preSearch = $this->pdo->prepare($sqlSearch);
  //           $preSearch->execute();
  //           return $preSearch->fetchAll(PDO::FETCH_ASSOC);
		// }
	}
?>