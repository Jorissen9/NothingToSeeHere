<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

  	  //  $this->load->database();
		//$this->load->helper('url');
		
      /*   $this->load->helper('url');

        $this->load->library('grocery_CRUD');
        $this->load->library('image_CRUD');

   
          $config = array(
          'config' => array(
          'appId' => '407495896054501',
          'secret' => 'f540a4fc0d61821cf08b794462c0a817')
          );
          $this->load->library('facebook', $config['config']);
    

        $this->load->model('model_tedx');      */
    }
	
	
	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('navigation_view');
		$this->load->view('content_view');
		
	   if($this->session->userdata('logged_in'))
	   {
	     $session_data = $this->session->userdata('logged_in');
	     $data['username'] = $session_data['username'];
	     $this->load->view('home_view', $data);
	   }
	   else
	   {
	     //If no session, redirect to login page
	     //redirect('http://localhost:6969/NothingToSeeHere/CodeIgniter-3.0.0/index.php/login','auto');
		 $this->load->view('userpanel_loggedout_view.php');
		 //$this->load->view('Navigation_View');
	   }
		$this->load->view('sidebar_view');
	}
	
	 function logout()
	 {
		   $this->session->unset_userdata('logged_in');
		   session_destroy();
		   redirect('home','refresh');
	 }
}
