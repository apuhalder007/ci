<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');
	}

	public function index()
	{
		$data['title']= 'Signin';
		$this->load->view('auth/signinForm', $data);
	}

	public function signin(){
		$this->load->library('form_validation');
		$conig_rules = array(
					array(
						'field'=>'username',
						'label'=>'Username',
						'rules'=>'trim|required'
						),
					array(
						'field'=>'password',
						'label'=>'Password',
						'rules'=>'trim|required'
						)
			);
		$this->form_validation->set_rules($conig_rules);

		if ($this->form_validation->run() == TRUE ) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if($username == 'joestudent@gmail.com' && $password == 'admin'){
				$flashdata = array('loginsucess'=>'Login successful');
				$userdata = array('username'=>$username);
				$this->session->set_flashdata($flashdata);
				$this->session->set_userdata($userdata);
				redirect('dashboard');
			}else{
				$flashdata = array('loginerror'=>'Wrong username/password combination!');
				$this->session->set_flashdata($flashdata);
				redirect('auth');
			}

		} else {
			redirect('auth');

		}

	}

	public function signup(){

	}

	public function signout(){

	}


}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
?>