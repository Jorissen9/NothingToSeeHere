<?php
Class User extends CI_Model {
	
	function login($Username, $Password) {
//		$UserModel = new UserModel();
//		$User = $UserModel->GetByEmail($Username);
//		
//		if (!$User) {
//		  $User = $UserModel->GetByUsername($Username);
//		}
//		
//		$Result = FALSE;
//		
//		if ($User) {
// 		// Check the password.
//		  $PasswordHash = new Gdn_PasswordHash();
//		  $Result = $PasswordHash->CheckPassword($Password, val('Password', $User), val('HashMethod', $User));
//		}
		
		//echo ($Result) ? 'Success' : 'Failure';
		
		$this -> db -> select('UserID, Name, Email, Photo');
		$this -> db -> from('gdn_user');
		$this -> db -> where('Email', $Username);
		$this -> db -> where('Passport', $Password);
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if ($query -> num_rows() == 1) {
			return $query -> result();
		} else {
			return false;
		}
	}

}
?>