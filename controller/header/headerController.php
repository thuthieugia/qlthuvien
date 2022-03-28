<?php
	include_once 'model/header/header.php';
	/**
	 * 
	 */
	class HeaderController extends Header
	{
		private $header;
		function __construct()
		{
			$this->header = new Header();
		}
		public function header(){
			$result = $this->header->avatar($_SESSION['account']);
			include_once 'layout/header.php';
		}
	}
?>