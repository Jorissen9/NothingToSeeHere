<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	public function index() {
	
		$this -> load -> view('content_view');

		if ($this -> session -> userdata('logged_in')) {
			$session_data = $this -> session -> userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['loggedIn'] = TRUE;
			$this -> load -> view('navigation_view', $data);
		} else {

			//If no session, redirect to login page
			//redirect('http://localhost:6969/NothingToSeeHere/CodeIgniter-3.0.0/index.php/login','auto');
			//$this -> load -> view('navigation_view.php');
			//$this->load->view('Navigation_View');
		}
		
		$this -> load -> view('sidebar_view');
	}

	function logout() {
		$this -> session -> unset_userdata('logged_in');
		session_destroy();
		redirect('home', 'refresh');
	}

}
