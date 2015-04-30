<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> model('signup_model', '', TRUE);

	}

		public function index() {
        /*
         * Form tutorial
         * http://tutsforweb.blogspot.be/2012/05/user-registration-with-codeigniter.html
         * Date of birth tutorial
         * http://tutsforweb.blogspot.be/2012/03/user-friendly-date-with-codeigniter-and.html
         * Recaptcha for codeigniter
         * https://github.com/Cnordbo/RECaptcha-for-Codeigniter
         */

        $this->load->library('recaptcha');
        //Store the captcha HTML for correct MVC pattern use.
        $data['recaptcha_html'] = $this->recaptcha->recaptcha_get_html();

        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[2]|xss_clean');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[2]|xss_clean');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('passconf', 'Confirm Password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('dob', 'Birthdate', 'callback_date_check');
        $_POST['dob'] = $this->input->post('dob_year') . '-' . $this->input->post('dob_month') . '-' . $this->input->post('dob_day');

        //$this->load->view('include/view_containerStart');
        //$this->load->view('view_login');
        //$this->load->view('ho');

        $this->recaptcha->recaptcha_check_answer();
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('signup_view', $data);
        } else {
            if (/*2!=0*/ !$this->recaptcha->getIsValid()) {
                $this->session->set_flashdata('error', 'Incorrect captcha');
                $this->load->view('signup_view', $data);
                header('location: signup/');
            } else {
                $postdata = array('email' => $this->input->post('email'), 'username' => $this->input->post('username'));
                $email = $this->signup_model->check_existing_email($postdata['email']);
                $username = $this->signup_model->check_existing_username($postdata['username']);
                if (count($username) > 0 || count($email) > 0 ) {
                    $this->session->set_flashdata('error', 'Username or E-mail already in use. ;(');
                    $this->load->view('signup_view', $data);
                    header('location: signup/');
                } else {
                    $this->session->set_flashdata('success', 'Registration Complete!');
                    $this->load->view('signup_view', $data);
                    header('location: signup/');
                    $member = array(
                        'username' => $this->input->post('username'),
                        'firstname' => $this->input->post('firstname'),
                        'lastname' =>$this->input->post('lastname'),
                        'email' => $this->input->post('email'),
                        'password' => md5($this->input->post('password')),
                        'birthdate' => $this->input->post('dob')
                    );
                    $this->signup_model->register($member);
                }
            }
        }
	}

	public function date_check() {
        // Check als er een correcte datum ingevoerd is in ons registretie form
        if (checkdate($this->input->post('dob_month'), $this->input->post('dob_day'), $this->input->post('dob_year'))) {
            return TRUE;
        } else {
            $this->form_validation->set_message('date_check', 'The Birthdate field is required.');
            return FALSE;
        }
    }

}

