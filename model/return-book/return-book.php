<?php
include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class ReturnBook extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function listReturnBook(){
			$sqlView = "SELECT chi_tiet_muon_tra.id, chi_tiet_muon_tra.muonTraID,chi_tiet_muon_tra.tinhTrangMuon,chi_tiet_muon_tra.tinhTrangTra, chi_tiet_muon_tra.maSach, chi_tiet_muon_tra.maCanBoTra, chi_tiet_muon_tra.ngayPhaiTra, chi_tiet_muon_tra.ngayTra, chi_tiet_muon_tra.tinhTrangTra, chi_tiet_muon_tra.thanhToan, chi_tiet_muon_tra.ghiChu, sach.tenSach, muon_tra.maDocGia, doc_gia.hoTen, can_bo_thu_vien.tenCanBo,muon_tra.ngayTao FROM chi_tiet_muon_tra, muon_tra, doc_gia, can_bo_thu_vien, sach WHERE chi_tiet_muon_tra.muonTraID = muon_tra.id AND muon_tra.maDocGia = doc_gia.maThe AND chi_tiet_muon_tra.maSach = sach.maSach AND (chi_tiet_muon_tra.maCanBoMuon = can_bo_thu_vien.maCanBo OR chi_tiet_muon_tra.maCanBoTra = can_bo_thu_vien.maCanBo)";
			$preView = $this->pdo->prepare($sqlView);
			$preView->execute();
			return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function addReturnBook($id, $statusReturn, $dateReturn, $price, $memberID, $note){
			$sqlAdd = "UPDATE chi_tiet_muon_tra SET maCanBoTra = :memberID, tinhTrangTra = :statusReturn, ngayTra = :dateReturn, ghiChu = :note, thanhToan = :price WHERE id = :id";
			$preAdd = $this->pdo->prepare($sqlAdd);
			$preAdd->bindParam(':id', $id);
			$preAdd->bindParam(':price', $price);
			$preAdd->bindParam(':memberID', $memberID);
			$preAdd->bindParam(':statusReturn', $statusReturn);
			$preAdd->bindParam(':dateReturn', $dateReturn);
			$preAdd->bindParam(':note', $note);
			return $preAdd->execute();
		}
		public function destroy($id){
			$sqlDel = "DELETE FROM chi_tiet_muon_tra WHERE id = :id";
			$preDel = $this->pdo->prepare($sqlDel);
			$preDel->bindParam(':id',$id);
			return $preDel->execute();

            // $query = mysqli_query($condb,$sqlDel);

            //  return $result_ID = "Xóa thành công";
		}
		public function returnBookID($id){
			$sqlID = "SELECT chi_tiet_muon_tra.id, chi_tiet_muon_tra.muonTraID,chi_tiet_muon_tra.tinhTrangMuon,chi_tiet_muon_tra.tinhTrangTra, chi_tiet_muon_tra.maSach, chi_tiet_muon_tra.maCanBoTra, chi_tiet_muon_tra.ngayPhaiTra, chi_tiet_muon_tra.ngayTra, chi_tiet_muon_tra.tinhTrangTra, chi_tiet_muon_tra.thanhToan, chi_tiet_muon_tra.ghiChu, sach.tenSach, muon_tra.maDocGia, doc_gia.hoTen, can_bo_thu_vien.tenCanBo,muon_tra.ngayTao FROM chi_tiet_muon_tra, muon_tra, doc_gia, can_bo_thu_vien, sach WHERE chi_tiet_muon_tra.muonTraID = muon_tra.id AND muon_tra.maDocGia = doc_gia.maThe AND chi_tiet_muon_tra.maSach = sach.maSach AND (chi_tiet_muon_tra.maCanBoMuon = can_bo_thu_vien.maCanBo OR chi_tiet_muon_tra.maCanBoTra = can_bo_thu_vien.maCanBo) AND chi_tiet_muon_tra.id = :id";
			$preID = $this->pdo->prepare($sqlID);
			$preID->bindParam(':id',$id);
			$preID->execute();
			return $preID->fetchAll(PDO::FETCH_ASSOC);
		}
		public function listReturnCard(){
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