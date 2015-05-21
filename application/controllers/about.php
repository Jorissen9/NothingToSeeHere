<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller {

	public function __construct() {
		
		parent::__construct();
	}

    function index() {
		$this -> load -> template('tedxpxl_view');
	}
	
	function tedxpxl()
	{
		$this -> load -> template('tedxpxl_view');
	}
	
	function team()
	{
		$this -> load -> template('team_view');
	}
	
	function partners()
	{
		$this -> load -> template('partners_view');
	}
}