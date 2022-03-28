<?php
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class BorrowBook extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function listBorrowBook(){
			$sqlView = "SELECT chi_tiet_muon_tra.id, chi_tiet_muon_tra.muonTraID, muon_tra.maDocGia,chi_tiet_muon_tra.ngayMuon, chi_tiet_muon_tra.ngayTra, doc_gia.hoTen, chi_tiet_muon_tra.maSach, sach.tenSach,chi_tiet_muon_tra.maCanBoMuon, can_bo_thu_vien.tenCanBo, tinhTrangMuon, ngayPhaiTra, ghiChu FROM chi_tiet_muon_tra, can_bo_thu_vien, doc_gia, muon_tra, sach WHERE chi_tiet_muon_tra.muonTraID = muon_tra.id AND chi_tiet_muon_tra.maCanBoMuon = can_bo_thu_vien.maCanBo AND muon_tra.maDocGia =doc_gia.maThe AND chi_tiet_muon_tra.maSach = sach.maSach";
			$preView = $this->pdo->prepare($sqlView);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function addBorrowBook($cardID, $bookID, $memberID, $statusBorrow, $dateBorrow , $deadline, $note){
			$sqlAdd = "INSERT INTO chi_tiet_muon_tra(muonTraID , maSach, maCanBoMuon , tinhTrangMuon, ngayMuon, ngayPhaiTra, ghiChu) VALUES (:cardID, :bookID, :memberID, :statusBorrow,:dateBorrow ,:deadline, :note)";
			$preAdd = $this->pdo->prepare($sqlAdd);
			$preAdd->bindParam(':cardID', $cardID);
			$preAdd->bindParam(':bookID', $bookID);
			$preAdd->bindParam(':memberID', $memberID);
			$preAdd->bindParam(':statusBorrow', $statusBorrow);
			$preAdd->bindParam(':dateBorrow', $dateBorrow);
			$preAdd->bindParam(':deadline', $deadline);
			$preAdd->bindParam(':note', $note);
			return $preAdd->execute();
		}
		public function updateBorrowBook($id, $cardID, $bookID, $memberID, $statusBorrow, $dateBorrow, $deadline, $note){
			$sqlUpdate = "UPDATE chi_tiet_muon_tra SET muonTraID = :cardID, maSach = :bookID, maCanBoMuon = :memberID, tinhTrangMuon = :statusBorrow, ngayMuon = :dateBorrow,ngayPhaiTra = :deadline, ghiChu = :note WHERE id = :id";
			$preUpdate = $this->pdo->prepare($sqlUpdate); 
			$preUpdate->bindParam(':id', $id);
			$preUpdate->bindParam(':cardID', $cardID);
			$preUpdate->bindParam(':bookID', $bookID);
			$preUpdate->bindParam(':memberID', $memberID);
			$preUpdate->bindParam(':statusBorrow', $statusBorrow);
			$preUpdate->bindParam(':dateBorrow', $dateBorrow);
			$preUpdate->bindParam(':deadline', $deadline);
			$preUpdate->bindParam(':note', $note);
			return $preUpdate->execute();
		}	
		public function destroy($id){
            $sqlDel = "DELETE FROM chi_tiet_muon_tra WHERE id = :id";
            $preDel = $this->pdo->prepare($sqlDel);
            $preDel->bindParam(':id',$id);
            return $preDel->execute();

            // $query = mysqli_query($condb,$sqlDel);
             
            //  return $result_ID = "Xóa thành công";
        }
        public function borrowBookID($id){
        	$sqlID = "SELECT* FROM chi_tiet_muon_tra WHERE id = :id";
        	$preID = $this->pdo->prepare($sqlID);
        	$preID->bindParam(':id',$id);
        	$preID->execute();
    		return $preID->fetchAll(PDO::FETCH_ASSOC);
        }
        public function listBorrowCard(){
			$sqlView = "SELECT id, maDocGia, hoTen, ngayTao FROM muon_tra, doc_gia WHERE muon_tra.maDocGia = doc_gia.maThe";
			$preView = $this->pdo->prepare($sqlView);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function listBook(){
			$sqlView = "SELECT * FROM sach";
			$preView = $this->pdo->prepare($sqlView);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function listMember($id){
			$sqlView = "SELECT * FROM can_bo_thu_vien WHERE maCanBo = :id";
			$preView = $this->pdo->prepare($sqlView);
			$preView->bindParam(':id', $id);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function numberBook($id){
			$sqlView = "SELECT soluong FROM sach WHERE maSach = :id";
			$preView = $this->pdo->prepare($sqlView);
			$preView->bindParam(':id', $id);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function subNumberBook($bookID){
			$sqlUpdate = "UPDATE sach SET soluong = soluong - 1 WHERE maSach = :bookID";
			$preUpdate = $this->pdo->prepare($sqlUpdate); 
			$preUpdate->bindParam(':bookID', $bookID);	
			return $preUpdate->execute();
		}
		public function sumNumberBook($bookID){
			$sqlUpdate = "UPDATE sach SET soluong = soluong + 1 WHERE maSach = :bookID";
			$preUpdate = $this->pdo->prepare($sqlUpdate); 
			$preUpdate->bindParam(':bookID', $bookID);	
			return $preUpdate->execute();
		}	
	}
?>