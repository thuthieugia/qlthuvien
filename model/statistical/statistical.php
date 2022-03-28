<?php
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class Statistical extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function borrowBookDate($startDate, $finishDate){
				$sqlView = "SELECT ngayMuon,COUNT(ngayMuon) AS soLuong FROM chi_tiet_muon_tra WHERE ngayMuon BETWEEN :startDate AND :finishDate GROUP BY ngayMuon";
				$preView = $this->pdo->prepare($sqlView);
				$preView->bindParam(':startDate', $startDate);
				$preView->bindParam(':finishDate', $finishDate);
	            $preView->execute();
	            return $preView->fetchAll(PDO::FETCH_ASSOC);
			}
			public function returnBookDate($startDate, $finishDate){
				$sqlView = "SELECT ngayTra,COUNT(ngayTra) AS soLuong FROM chi_tiet_muon_tra WHERE ngayTra BETWEEN :startDate AND :finishDate GROUP BY ngayTra";
				$preView = $this->pdo->prepare($sqlView);
				$preView->bindParam(':startDate', $startDate);
				$preView->bindParam(':finishDate', $finishDate);
	            $preView->execute();
	            return $preView->fetchAll(PDO::FETCH_ASSOC);
			}
			public function borrowBookMonth($startMonth, $finishMonth){
				$sqlView = "SELECT month(ngayMuon) AS thangMuon, year(ngayMuon) AS namMuon, COUNT(month(ngayMuon)) AS soLuong FROM chi_tiet_muon_tra WHERE year(ngayMuon) BETWEEN :startMonth AND :finishMonth GROUP BY month(ngayMuon)";
				$preView = $this->pdo->prepare($sqlView);
				$preView->bindParam(':startMonth', $startMonth);
				$preView->bindParam(':finishMonth', $finishMonth);
	            $preView->execute();
	            return $preView->fetchAll(PDO::FETCH_ASSOC);
			}
			public function returnBookMonth($startMonth, $finishMonth){
				$sqlView = "SELECT month(ngayTra) AS thangTra, year(ngayTra) AS namTra,COUNT(month(ngayTra)) AS soLuong FROM chi_tiet_muon_tra WHERE year(ngayTra) BETWEEN :startMonth AND :finishMonth GROUP BY month(ngayTra)";
				$preView = $this->pdo->prepare($sqlView);
				$preView->bindParam(':startMonth', $startMonth);
				$preView->bindParam(':finishMonth', $finishMonth);
	            $preView->execute();
	            return $preView->fetchAll(PDO::FETCH_ASSOC);
			}
			public function borrowBookYear($startYear, $finishYear){
				$sqlView = "SELECT year(ngayMuon) AS namMuon, COUNT(year(ngayMuon)) AS soLuong FROM chi_tiet_muon_tra WHERE year(ngayMuon) BETWEEN :startYear AND :finishYear GROUP BY year(ngayMuon)";
				$preView = $this->pdo->prepare($sqlView);
				$preView->bindParam(':startYear', $startYear);
				$preView->bindParam(':finishYear', $finishYear);
	            $preView->execute();
	            return $preView->fetchAll(PDO::FETCH_ASSOC);
			}
			public function returnBookYear($startYear, $finishYear){
				$sqlView = "SELECT year(ngayTra) AS namTra,COUNT(year(ngayTra)) AS soLuong FROM chi_tiet_muon_tra WHERE year(ngayTra) BETWEEN :startYear AND :finishYear GROUP BY year(ngayTra)";
				$preView = $this->pdo->prepare($sqlView);
				$preView->bindParam(':startYear', $startYear);
				$preView->bindParam(':finishYear', $finishYear);
	            $preView->execute();
	            return $preView->fetchAll(PDO::FETCH_ASSOC);
			}

			//
			public function borrowReaderDate($startDate, $finishDate){
				$sqlView = "SELECT ngayMuon, muon_tra.maDocGia, COUNT( DISTINCT muon_tra.maDocGia) AS soLuong FROM chi_tiet_muon_tra, muon_tra WHERE chi_tiet_muon_tra.muonTraID = muon_tra.id AND ngayMuon BETWEEN :startDate AND :finishDate GROUP BY ngayMuon";
				$preView = $this->pdo->prepare($sqlView);
				$preView->bindParam(':startDate', $startDate);
				$preView->bindParam(':finishDate', $finishDate);
	            $preView->execute();
	            return $preView->fetchAll(PDO::FETCH_ASSOC);
			}
			public function returnReaderDate($startDate, $finishDate){
				$sqlView = "SELECT ngayTra, muon_tra.maDocGia, COUNT( DISTINCT muon_tra.maDocGia) AS soLuong FROM chi_tiet_muon_tra, muon_tra WHERE chi_tiet_muon_tra.muonTraID = muon_tra.id AND ngayTra BETWEEN :startDate AND :finishDate GROUP BY ngayTra";
				$preView = $this->pdo->prepare($sqlView);
				$preView->bindParam(':startDate', $startDate);
				$preView->bindParam(':finishDate', $finishDate);
	            $preView->execute();
	            return $preView->fetchAll(PDO::FETCH_ASSOC);
			}
			public function borrowReaderMonth($startMonth, $finishMonth){
				$sqlView = "SELECT month(ngayMuon) AS thangMuon, year(ngayMuon) AS namMuon, muon_tra.maDocGia, COUNT( DISTINCT muon_tra.maDocGia) AS soLuong FROM chi_tiet_muon_tra, muon_tra WHERE chi_tiet_muon_tra.muonTraID = muon_tra.id AND year(ngayMuon) BETWEEN :startMonth AND :finishMonth GROUP BY year(ngayMuon)";
				$preView = $this->pdo->prepare($sqlView);
				$preView->bindParam(':startMonth', $startMonth);
				$preView->bindParam(':finishMonth', $finishMonth);
	            $preView->execute();
	            return $preView->fetchAll(PDO::FETCH_ASSOC);
			}
			public function returnReaderMonth($startMonth, $finishMonth){
				$sqlView = "SELECT month(ngayTra) AS thangTra, year(ngayTra) AS namTra, muon_tra.maDocGia, COUNT(DISTINCT muon_tra.maDocGia) AS soLuong FROM chi_tiet_muon_tra, muon_tra WHERE chi_tiet_muon_tra.muonTraID = muon_tra.id AND year(ngayTra) BETWEEN :startMonth AND :finishMonth GROUP BY year(ngayTra)";
				$preView = $this->pdo->prepare($sqlView);
				$preView->bindParam(':startMonth', $startMonth);
				$preView->bindParam(':finishMonth', $finishMonth);
	            $preView->execute();
	            return $preView->fetchAll(PDO::FETCH_ASSOC);
			}
			public function borrowReaderYear($startYear, $finishYear){
				$sqlView = "SELECT year(ngayMuon) AS namMuon, muon_tra.maDocGia, COUNT( DISTINCT muon_tra.maDocGia) AS soLuong FROM chi_tiet_muon_tra, muon_tra WHERE chi_tiet_muon_tra.muonTraID = muon_tra.id AND year(ngayMuon) BETWEEN :startYear AND :finishYear GROUP BY year(ngayMuon)";
				$preView = $this->pdo->prepare($sqlView);
				$preView->bindParam(':startYear', $startYear);
				$preView->bindParam(':finishYear', $finishYear);
	            $preView->execute();
	            return $preView->fetchAll(PDO::FETCH_ASSOC);
			}
			public function returnReaderYear($startYear, $finishYear){
				$sqlView = "SELECT year(ngayTra) AS namTra, muon_tra.maDocGia, COUNT( DISTINCT muon_tra.maDocGia) AS soLuong FROM chi_tiet_muon_tra, muon_tra WHERE chi_tiet_muon_tra.muonTraID = muon_tra.id AND year(ngayTra) BETWEEN :startYear AND :finishYear GROUP BY year(ngayTra)";
				$preView = $this->pdo->prepare($sqlView);
				$preView->bindParam(':startYear', $startYear);
				$preView->bindParam(':finishYear', $finishYear);
	            $preView->execute();
	            return $preView->fetchAll(PDO::FETCH_ASSOC);
			}
	}
?>