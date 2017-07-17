<?php 
class MY_Controller extends CI_Controller
{
	public $details;
	public function __construct() 
	{
	     parent::__construct();

	     $this->details['error'] = array();
	     $this->details['sitename'] = 'My Awesome Codeigniter CMS'; 
	     
	}
}
?>