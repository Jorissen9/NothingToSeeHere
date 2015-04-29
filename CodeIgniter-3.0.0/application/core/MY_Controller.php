<?php
class MY_Controller extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this -> load -> view('header_view');
		
		if ($this -> session -> userdata('logged_in')) {
			$session_data = $this -> session -> userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['loggedIn'] = $this -> load -> view('signout_view', $data, true);
			$this -> load -> view('Navigation_View', $data);

		} else {

			//If no session, redirect to login page
			//redirect('http://localhost:6969/NothingToSeeHere/CodeIgniter-3.0.0/index.php/login','auto');
			//$this -> load -> view('navigation_view.php');
			$data['loggedIn'] = $this -> load -> view('signin_view', null, true);
			$this -> load -> view('Navigation_View', $data);
		}

	}

}
