<?php
Class User extends CI_Model {
	
	function login($username, $password) {
		$this -> db -> select('UserID, Name, Email, Photo');
		$this -> db -> from('gdn_user');
		$this -> db -> where('Email', $username);
		$this -> db -> where('Passport', $password);
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