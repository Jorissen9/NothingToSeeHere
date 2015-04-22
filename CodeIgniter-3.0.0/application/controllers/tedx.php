<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tedx extends CI_Controller {

    public function __construct() {
        parent::__construct();

  	    $this->load->database();
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
	

    public function CreateUserpanel() {
        global $user_info;
        if ($user_info['id'] > 0) {
            $this->load->view('Userpanel_LoggedIn_View');
        } else {
            $this->load->view('Userpanel_LoggedOut_View');
        }
    }

	
	public function index()
	{
		$this->load->view('Navigation_View');
	}
}
