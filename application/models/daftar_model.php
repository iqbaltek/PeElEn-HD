<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Daftar_model extends CI_Model {
	public function __construct()
		{
			$this->load->database();
			$this->load->library('session');
			// $this->load->library('url');
			// $this->load->helper("back_handler");
		}
    
	public function getKantor(){
        $this->db->select('*');
        $this->db->from('kantor');
        return $this->db->get();
    }
	public function getJabatan(){
        $this->db->select('*');
        $this->db->from('jabatan');
        return $this->db->get();
    }
	public function getSubDivisi(){
        $this->db->select('*');
        $this->db->from('sub_divisi');
        return $this->db->get();
    }
	public function getTeam(){
        $this->db->select('*');
        $this->db->from('team');
        return $this->db->get();
    }
		
}
 
/* End of file daftar_model.php */
/* Location: ./application/models/admin_model.php */