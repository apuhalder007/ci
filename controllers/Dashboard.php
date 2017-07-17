<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		if($this->session->flashdata('loginsucess')){
			echo '<p>'. $this->session->flashdata('loginsucess').'</p>';
		}
		echo '<p> Hi, '. $this->session->userdata('username').'</p>';
	}


}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
?>