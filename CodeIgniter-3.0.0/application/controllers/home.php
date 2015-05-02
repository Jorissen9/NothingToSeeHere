<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

    function index() {
    	
		$this -> load ->model('home_model');
		$posts['fbdata'] = $this->home_model->get_posts();
		
		
		$this -> load -> view('sidebar_view');
		$this -> load -> view('home_view',$posts);
		
		
	}
	
	function logout() {
		$this -> session -> unset_userdata('logged_in');
		session_destroy();
		redirect('home', 'refresh');
	}
	
	

}
