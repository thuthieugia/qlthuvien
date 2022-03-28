<?php
	include_once 'model/profile/profile.php';
	/**
	 * 
	 */
	class ProfileController extends Profile
	{
		private $profile;
		function __construct()
		{
			$this->profile = new Profile();
		}
		public function profile(){
			$result = $this->profile->avatar($_SESSION['account']);
			include_once 'layout/profile.php';
		}
	}
?>