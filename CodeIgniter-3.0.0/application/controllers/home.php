<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	public function index() {
	
		$this -> load -> view('sidebar_view');
		$this -> load -> view('content_view');
	}

	function logout() {
		$this -> session -> unset_userdata('logged_in');
		session_destroy();
		redirect('home', 'refresh');
	}

}
