<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Teknisi_model extends CI_Model {
	public function __construct()
		{
			$this->load->database();
			$this->load->library('session');
			// $this->load->helper("back_handler");
		}
    
//    untuk mengambil data tugas baru
    function tugas_baru($teknisi) {
        $this->db->select('*');
        $this->db->order_by('dampak', 'asc');
        $this->db->order_by('level_prioritas', 'asc');
        $this->db->order_by('tgl_awal_tiket', 'asc');
		$this->db->where('staf_teknisi', $teknisi);
        return $this->db->get('tiket');
    }
	
    function getData() {
        $this->db->select('*');
        $this->db->order_by('dampak', 'asc');
        $this->db->order_by('level_prioritas', 'asc');
        $this->db->order_by('tgl_awal_tiket', 'asc');
        return $this->db->get('tiket');
    }
}
 
/* End of file teknisi_model.php */
/* Location: ./application/models/teknisi_model.php */