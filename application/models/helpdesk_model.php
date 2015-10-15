<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Helpdesk_model extends CI_Model {
	public function __construct()
		{
			$this->load->database();
			$this->load->library('session');
			// $this->load->library('url');
			// $this->load->helper("back_handler");
		}
    
//    untuk mengambil data tugas baru
    function getId($time) {
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->where('time', $time);
        return $this->db->get();
    }
	
	function getTeknisi($j) {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->where('jabatan', $j);
        return $this->db->get();
    }
	
    function getData($id_tiket) {
        $this->db->select('*');
        $this->db->from('tiket');
        $this->db->join('customer','tiket.customer=customer.id_customer');
        $this->db->join('kode_status','tiket.status=kode_status.id_status');
        // $this->db->join('attachment','tiket.attachment=attachment.id_attachment');
		$this->db->where('tiket.id_tiket', $id_tiket);
        return $this->db->get();
    }
	
	function getKategori() {
        $this->db->select('*');
        $this->db->from('kategori');
        return $this->db->get();
    }
	
	function getLevel() {
        $this->db->select('*');
        $this->db->from('level_prioritas');
        return $this->db->get();
    }
	
	function getDampak() {
        $this->db->select('*');
        $this->db->from('dampak');
        return $this->db->get();
    }
	
	function getKantor() {
        $this->db->select('*');
        $this->db->from('kantor');
        return $this->db->get();
    }
	
	function update_lampiran($id,$lampiran) {
        $data = array(
               'lampiran' => $lampiran,
            );

		$this->db->where('id_tiket', $id);
		$this->db->update('tiket', $data); 
    }
	
	
	function getTanggal($id){
        $this->db->select('*');
		$this->db->where('id_tiket', $id);
        $this->db->from('tiket');
        return $this->db->get();
    }
	
	function update_date($id, $date){
		$data = array(
				'date_open' => $date,
				'date_close' => $date,
				'durasi' => 0,
				'tutorial' => 0,
			);
		$this->db->where('id_tiket', $id);
		$this->db->update('tiket', $data);
	}
}
 
/* End of file teknisi_model.php */
/* Location: ./application/models/teknisi_model.php */