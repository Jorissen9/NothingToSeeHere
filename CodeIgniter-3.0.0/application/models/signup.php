<?php
class signup extends CI_model {

	function register($newmember) {
		$this -> db -> insert('smf_members', $newmember);
	}

	function check_existing_email($postdata) {
		$this -> db -> select('email_address');
		$this -> db -> from('smf_members');
		$this -> db -> where('email_address', $postdata);
		$query = $this -> db -> get();
		$data = $query -> row();
		return $data;
	}

	function check_existing_membername($postdata) {
		$this -> db -> select('member_name');
		$this -> db -> from('smf_members');
		$this -> db -> where('member_name', $postdata);
		$query = $this -> db -> get();
		$data = $query -> row();
		return $data;
	}

}
?>