<?php
Class Events_Model extends CI_Model {

	
	function AddEvent($newmember) {
		$this -> db -> insert('gdn_user', $newmember);
	}

	function check_existing_email($postdata) {
		
		$this -> db -> select('Email');
		$this -> db -> from('gdn_user');
		$this -> db -> where('Email', $postdata);
		
		$query = $this -> db -> get();
		
		$data = $query -> row();
		return $data;
	}

	function check_existing_username($postdata) {
		
		$this -> db -> select('username');
		$this -> db -> from('users');
		$this -> db -> where('username', $postdata);
		
		$query = $this -> db -> get();
		
		$data = $query -> row();
		return $data;
	}

}
?>