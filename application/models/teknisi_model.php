<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Teknisi_model extends CI_Model {
	public function __construct()
		{
			$this->load->database();
			$this->load->library('session');
			// $this->load->helper("back_handler");
		}
    
//    untuk mengambil data hasil login
    function tugas_baru() {
        $this->db->select('*');
        $this->db->order_by('level_prioritas', 'asc');
        return $this->db->get('tiket');
    }
}
 
/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */