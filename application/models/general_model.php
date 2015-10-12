<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class General_model extends CI_Model {
	public function __construct()
		{
			$this->load->database();
			$this->load->library('session');
			// $this->load->library('url');
			// $this->load->helper("back_handler");
		}
    
	//untuk menghitung semua tiket tahun ini
    function tahun_ini($year) {
		$this->db->select('*');
		$this->db->from('tiket');
		$this->db->where("YEAR(tgl_awal_tiket)",$year);
		return $this->db->count_all_results();
	}
	
	//untuk menghitung semua tiket bulan ini
    function bulan_ini($month, $year) {
		$this->db->select('*');
		$this->db->from('tiket');
		$this->db->where("YEAR(tgl_awal_tiket)",$year);
		$this->db->where("MONTH(tgl_awal_tiket)",$month);
		return $this->db->count_all_results();
	}
	
	//untuk menghitung semua tiket bulan ini
    function hari_ini($date) {
		$this->db->select('*');
		$this->db->from('tiket');
		$this->db->where("DATE(tgl_awal_tiket)",$date);
		return $this->db->count_all_results();
	}
	
	
}
 
/* End of file general_model.php */
/* Location: ./application/models/general_model.php */