<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

    function index() {
    	
		$this -> load -> view('sidebar_view');
		$this -> load -> view('team_view');	
		
	}
}