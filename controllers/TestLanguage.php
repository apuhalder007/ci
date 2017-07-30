<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class TestLanguage extends CI_Controller {

 	function __construct(){
 		parent::__construct();
 		$this->load->library('form_validation');
 		$this->load->helper('language');
 		$lang_code = $this->uri->segment(1);
 		$this->lang->load('message',$lang_code);
 	}
 	
 	
 	public function index()
 	{
 		echo $this->lang->line('title');
 	}
 
 }
 
 /* End of file Test.php */
 /* Location: ./application/controllers/Test.php */ ?>