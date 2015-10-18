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
	
	function getTeam() {
        $this->db->select('*');
        $this->db->from('team');
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
	
	function getTiket($id) {
        $this->db->select('*');
		$this->db->join('customer','tiket.customer=customer.id_customer');
        $this->db->join('kode_status','tiket.status=kode_status.id_status');
		$this->db->where('id_tiket', $id);
        $this->db->from('tiket');
        return $this->db->get();
    }
	
	function tiket_baru($data){
		$this->db->insert('tiket',$data); 
	}
	
	//untuk mengambil data tugas baru
    function tugas_baru() {
        $this->db->select('*');
        $this->db->from('tiket');
        $this->db->join('level_prioritas','tiket.level_prioritas=level_prioritas.id_level');
        $this->db->join('dampak','tiket.dampak=dampak.id_dampak');
        $this->db->join('kantor','tiket.kantor=kantor.id_kantor');
        $this->db->join('kategori','tiket.kategori=kategori.id_kategori');
        $this->db->join('pegawai','tiket.staf_teknisi=pegawai.nip');
        $this->db->order_by('dampak', 'asc');
        $this->db->order_by('level_prioritas', 'asc');
        $this->db->order_by('tgl_awal_tiket', 'asc');
		$this->db->where('status', '1');
        return $this->db->get();
    }
	
	//untuk mengambil data tugas yang belum selesai atau proses
    function tugas_belum_selesai() {
        $this->db->select('*');
        $this->db->from('tiket');
        $this->db->join('level_prioritas','tiket.level_prioritas=level_prioritas.id_level');
        $this->db->join('dampak','tiket.dampak=dampak.id_dampak');
        $this->db->join('kantor','tiket.kantor=kantor.id_kantor');
        $this->db->join('kategori','tiket.kategori=kategori.id_kategori');
        $this->db->join('pegawai','tiket.staf_teknisi=pegawai.nip');
        $this->db->order_by('dampak', 'asc');
        $this->db->order_by('level_prioritas', 'asc');
        $this->db->order_by('tgl_awal_tiket', 'asc');
		$this->db->where('status', '2');
        return $this->db->get();
    }
	
    function knowledge_base() {
        $this->db->select('*');
        $this->db->from('solusi');
        return $this->db->get();
    }
	
    function data_solusi($id_solusi) {
        $this->db->select('*');
        $this->db->from('solusi');
		$this->db->where('id_solusi', $id_solusi);
        return $this->db->get();
    }
	
}
 
/* End of file helpdesk_model.php */
/* Location: ./application/models/helpdesk_model.php */