<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends MY_Controller {

	public function __construct() {
		parent::__construct();

	}

	function index() {

		$this -> load -> model('events_model');
		$data["events"] = $this -> events_model -> getEvents();

		$this -> load -> view('templates/navigation_view');
		$this -> load -> view('events_view',$data);

		$Session = Gdn::Session();
		//var_dump($Session -> User);

		// Declare an alias for the user session.
		// Check if the user session is valid and Admin.

		//if ($Session -> IsValid())
		//	if (is_object($Session -> User) && $Session -> User -> Admin)
		$this -> load -> view('events_controlpanel_view');

		$this -> load -> view('templates/footer_view');

	}

	function AddEvent() {
		
		$picture = "";	
		
		$this -> load -> model('events_model');
		$this -> form_validation -> set_rules('date', 'Date', 'callback_date_check');
		$this -> form_validation -> set_rules('title', 'Title', 'trim|required|min_length[2]|max_length[45]|xss_clean');
		$this -> form_validation -> set_rules('street', 'Street', 'trim|min_length[2]|max_length[45]|xss_clean');
		$this -> form_validation -> set_rules('number', 'Number', 'trim|min_length[1]|xss_clean');
		$this -> form_validation -> set_rules('place', 'Place', 'trim|min_length[2]|max_length[45]|xss_clean');
		$this -> form_validation -> set_rules('zipcode', 'Zipcode', 'trim|min_length[2]|max_length[10]|xss_clean');
		$this -> form_validation -> set_rules('description', 'Description', 'trim|required|min_length[10]|xss_clean|max_length[500]');

		$_POST['date'] = $this -> input -> post('date_year') . '-' . $this -> input -> post('date_month') . '-' . $this -> input -> post('date_day');
		
		
		if ($this->form_validation->run() == FALSE) {
            $this->load->view('events_controlpanel_view');
			//redirect('events');
        } 	
		else {
			if (isset($_FILES['picture']) && $_FILES['picture']['size'] > 0) {
				
			$config['upload_path'] = './assets/imgs/Events/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '4000';
			$config['max_width']  = '1024';
			$config['max_height']  = '1024';
		    $config['encrypt_name'] = true;
	
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
	
			
			if ( ! $this->upload->do_upload('picture'))
			{
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('error', $errors[0]);
			}
			else
			{
                $upload_data = $this->upload->data();
                $picture = 'Events/' . $upload_data['file_name'];
			}
		}

		$newEvent = array(
			'Title' => $this -> input -> post('title'), 
			'Date' => $this -> input -> post('date'), 
			'Time' => $this -> input -> post('time'), 
			'Description' => $this -> input -> post('description'),
			'Picture' => $picture
		);
		
			$this -> events_model -> AddEvent($newEvent);
			redirect("events");
		}

	}

	public function date_check() {

		if (checkdate($this -> input -> post('date_month'), $this -> input -> post('date_day'), $this -> input -> post('date_year'))) {
			return TRUE;
		} else {
			$this -> form_validation -> set_message('date_check', 'The date field is required.');
			return FALSE;
		}
	}

}
