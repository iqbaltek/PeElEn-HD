<?php
class Daftar extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->library('form_validation');
		
			//men-disable back setelah logout
			$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
			$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
			$this->output->set_header('Pragma: no-cache');
		
	}
 
	public function index() 
	{
		$this->load->view('daftar');
		
		$this->load->model('daftar_model');
	}
	
}