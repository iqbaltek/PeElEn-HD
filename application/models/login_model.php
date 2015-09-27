<?php
class Login_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
		$this->load->library('session');
		// $this->load->helper("back_handler");
	}
 
	public function login() {
 
		$username = $data['username'];
		$password = $data['password'];
		$data = $this->db->query("SELECT * from user where username='$username' and password='$password' LIMIT 1 ");
		return $data->row();
	}
 
}