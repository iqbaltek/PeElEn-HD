<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Auth_model extends CI_Model {
	public function __construct()
		{
			$this->load->database();
			$this->load->library('session');
			// $this->load->helper("back_handler");
		}
    
//    untuk mengcek jumlah username dan password yang sesuai
    function login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query =  $this->db->get('pegawai');
        return $query->num_rows();
    }
	
//    untuk mengcek aktivasi
    function aktivasi($username,$password,$aktivasi) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('aktivasi', $aktivasi);
        $query =  $this->db->get('pegawai');
        return $query->num_rows();
    }
	    
//    untuk mengambil data hasil login
    function data_login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('pegawai')->row();
    }
	
    function last_login($nip,$date) {
        $data = array(
               'last_login_date' => $date,
            );

		$this->db->where('nip', $nip);
		$this->db->update('pegawai', $data); 
    }
}
 
/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */