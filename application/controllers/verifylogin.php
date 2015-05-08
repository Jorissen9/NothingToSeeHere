<?php
class Verifylogin extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> model('user', '', TRUE);
	}

	function index() {
		//This method will have the credentials validation
		
		$this->load->helper('security');
		$this->load->helper('form');
		
		$this -> form_validation -> set_rules('username', 'Username', 'trim|required|xss_clean');
		$this -> form_validation -> set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

		if ($this -> form_validation -> run() == FALSE) {

			echo json_encode(array('st'=>0,'msg' => validation_errors()));
			
		} else {
			echo json_encode(array('st'=>1,'msg' => "logged in successful"));

		}
		
	}

	function check_database($password) {
		//Field validation succeeded.  Validate against database
		$username = $this -> input -> post('username');

		//query the database
		$result = $this -> user -> auth($username, $password);
		//var_dump($result);

		if ($result) {
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array('UserID' => $row -> UserID, 'Name' => $row -> Name, 'Email' => $row -> Email, 'Photo' => $row -> Photo);
				$this -> form_validation -> set_message('check_database', '');
				$this -> session -> set_userdata('logged_in', $sess_array);
			}
			return TRUE;
		} else {
			$this -> form_validation -> set_message('check_database', 'Invalid username or password');
			return false;
		}
	}

}
?>