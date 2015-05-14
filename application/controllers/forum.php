<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	function index() {

		$this -> load -> view('templates/navigation_view');
		$this -> load -> view('forum_view');
		$this -> load -> view('templates/footer_view');
		

	}
	
}
