<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Teknisi_model extends CI_Model {
	public function __construct()
		{
			$this->load->database();
			$this->load->library('session');
			// $this->load->library('url');
			// $this->load->helper("back_handler");
		}
    
	
	//untuk menghitung semua tiket bulan ini
    function new_bulan_ini($month, $year,$teknisi,$team) {
		$where = "(staf_teknisi = '$teknisi' or staf_teknisi = '$team')";
		$this->db->select('*');
		$this->db->from('tiket');
		$this->db->where("YEAR(tgl_awal_tiket)",$year);
		$this->db->where("MONTH(tgl_awal_tiket)",$month);
		$this->db->where('staf_teknisi', $teknisi);
		$this->db->where('status', '1');
		return $this->db->count_all_results();
	}
	
	//untuk menghitung semua tiket bulan ini
    function open_bulan_ini($month, $year,$teknisi,$team) {
		$where = "(staf_teknisi = '$teknisi' or staf_teknisi = '$team')";
		$this->db->select('*');
		$this->db->from('tiket');
		$this->db->where("YEAR(date_open)",$year);
		$this->db->where("MONTH(date_open)",$month);
		$this->db->where($where);
		$this->db->where('status', '2');
		return $this->db->count_all_results();
	}
	//untuk menghitung semua tiket bulan ini
    function close_bulan_ini($month, $year,$teknisi,$team) {
		$where = "(staf_teknisi = '$teknisi' or staf_teknisi = '$team')";
		$this->db->select('*');
		$this->db->from('tiket');
		$this->db->where("YEAR(date_close)",$year);
		$this->db->where("MONTH(date_close)",$month);
		$this->db->where($where);
		$this->db->where('status', '3');
		return $this->db->count_all_results();
	}
		
	//untuk mengambil data tugas baru
    function tugas_baru($teknisi,$team) {
		$where = "(staf_teknisi = '$teknisi' or staf_teknisi = '$team')";
        $this->db->select('*');
        $this->db->from('tiket');
        $this->db->join('level_prioritas','tiket.level_prioritas=level_prioritas.id_level');
        $this->db->join('dampak','tiket.dampak=dampak.id_dampak');
        $this->db->join('kantor','tiket.kantor=kantor.id_kantor');
        $this->db->join('kategori','tiket.kategori=kategori.id_kategori');
        $this->db->order_by('dampak', 'asc');
        $this->db->order_by('level_prioritas', 'asc');
        $this->db->order_by('tgl_awal_tiket', 'asc');
		$this->db->where($where);
		$this->db->where('status', '1');
        return $this->db->get();
    }
	
	//untuk menghitung data tugas baru milik teknisi
    function count_tugas_baru($teknisi,$team) {
        $where = "(staf_teknisi = '$teknisi' or staf_teknisi = '$team')";
        $this->db->select('*');
        $this->db->from('tiket');
        $this->db->join('level_prioritas','tiket.level_prioritas=level_prioritas.id_level');
        $this->db->join('dampak','tiket.dampak=dampak.id_dampak');
        $this->db->join('kantor','tiket.kantor=kantor.id_kantor');
        $this->db->join('kategori','tiket.kategori=kategori.id_kategori');
        $this->db->order_by('dampak', 'asc');
        $this->db->order_by('level_prioritas', 'asc');
        $this->db->order_by('tgl_awal_tiket', 'asc');
		$this->db->where($where);
		$this->db->where('status', '1');
        return $this->db->count_all_results();
    }
	
	//untuk mengambil 1 row data tiket
    function getData($id_tiket) {
        $this->db->select('*');
        $this->db->from('tiket');
        $this->db->join('customer','tiket.customer=customer.id_customer');
        $this->db->join('kode_status','tiket.status=kode_status.id_status');
        // $this->db->join('attachment','tiket.attachment=attachment.id_attachment');
		$this->db->where('tiket.id_tiket', $id_tiket);
        return $this->db->get();
    }
	
	//untuk mengambil attachment
    function getAttachment($id_tiket) {
        $this->db->select('*');
        $this->db->from('attachment');
        $this->db->join('tiket','attachment.id_tiket=tiket.id_tiket');
		$this->db->where('tiket.id_tiket', $id_tiket);
        return $this->db->get();
    }
	
	//fungsi untuk update 1 table pada tiket setelah teknisi mengambil tugasnya dan status di ubah jadi open
	function update_tiket($id_tiket,$tgl_mulai) {
		$data = array(
			   'status' => '2', // 2 = status open
			   'date_open' => $tgl_mulai,
			);

		$this->db->where('id_tiket', $id_tiket);
		$this->db->update('tiket', $data); 
    }
	
	//fungsi untuk mengambil seluruh data yang telah diambil untuk dilaporkan bahwa tugas tersebut telah selesai
	function lapor_selesai($teknisi,$team) {
		$where = "(staf_teknisi = '$teknisi' or staf_teknisi = '$team')";
        $this->db->select('*');
        $this->db->from('tiket');
        $this->db->join('level_prioritas','tiket.level_prioritas=level_prioritas.id_level');
        $this->db->join('dampak','tiket.dampak=dampak.id_dampak');
        $this->db->join('kantor','tiket.kantor=kantor.id_kantor');
		$this->db->join('kategori','tiket.kategori=kategori.id_kategori');
        $this->db->order_by('dampak', 'asc');
        $this->db->order_by('level_prioritas', 'asc');
        $this->db->order_by('tgl_awal_tiket', 'asc');
		$this->db->where($where);
		$this->db->where('status', '2');
        return $this->db->get();
    }
	
	//fungsi untuk menghitung seluruh data yang telah diambil untuk dilaporkan bahwa tugas tersebut telah selesai
	function count_lapor_selesai($teknisi,$team) {
		$where = "(staf_teknisi = '$teknisi' or staf_teknisi = '$team')";        
		$this->db->select('*');
        $this->db->from('tiket');
        $this->db->join('level_prioritas','tiket.level_prioritas=level_prioritas.id_level');
        $this->db->join('dampak','tiket.dampak=dampak.id_dampak');
        $this->db->join('kantor','tiket.kantor=kantor.id_kantor');
		$this->db->join('kategori','tiket.kategori=kategori.id_kategori');
        $this->db->order_by('dampak', 'asc');
        $this->db->order_by('level_prioritas', 'asc');
        $this->db->order_by('tgl_awal_tiket', 'asc');
		$this->db->where($where);
		$this->db->where('status', '2');
        return $this->db->count_all_results();
    }
	
	//fungsi untuk update 1 table pada tiket setelai teknisi melaporkan bahwa tugasnya telah selesai dan status di ubah menjadi close
	function update_selesai($id_tiket,$tutorial,$tgl_selesai,$durasi) {
		$data = array(
				'status' => '3',
				'tutorial' => $tutorial,
				'date_close' => $tgl_selesai,
				'durasi' => $durasi,
			);

		$this->db->where('id_tiket', $id_tiket);
		$this->db->update('tiket', $data); 
    }
	
	function buat_solusi($teknisi,$team){
		$where = "(staf_teknisi = '$teknisi' or staf_teknisi = '$team')";
        $this->db->select('*');
        $this->db->from('tiket');
        $this->db->join('level_prioritas','tiket.level_prioritas=level_prioritas.id_level');
        $this->db->join('dampak','tiket.dampak=dampak.id_dampak');
        $this->db->join('kantor','tiket.kantor=kantor.id_kantor');
		$this->db->join('kategori','tiket.kategori=kategori.id_kategori');
        $this->db->order_by('dampak', 'asc');
        $this->db->order_by('level_prioritas', 'asc');
        $this->db->order_by('tgl_awal_tiket', 'asc');
		$this->db->where($where);
		$this->db->where('status', '3');
		$this->db->where('tutorial', '1');
        return $this->db->get();
    }
	
	// fungsi untuk menghitung semua tugas yang perlu di buat solusinya
	function count_buat_solusi($teknisi,$team){
		$where = "(staf_teknisi = '$teknisi' or staf_teknisi = '$team')";
        $this->db->select('*');
        $this->db->from('tiket');
        $this->db->join('level_prioritas','tiket.level_prioritas=level_prioritas.id_level');
        $this->db->join('dampak','tiket.dampak=dampak.id_dampak');
        $this->db->join('kantor','tiket.kantor=kantor.id_kantor');
		$this->db->join('kategori','tiket.kategori=kategori.id_kategori');
        $this->db->order_by('dampak', 'asc');
        $this->db->order_by('level_prioritas', 'asc');
        $this->db->order_by('tgl_awal_tiket', 'asc');
		$this->db->where($where);
		$this->db->where('status', '3');
		$this->db->where('tutorial', '1');
        return $this->db->count_all_results();
    }
	
	function form_solusi($id_tiket){
        $this->db->select('*');
        $this->db->from('tiket');
		$this->db->where('id_tiket', $id_tiket);
        return $this->db->get();
    }
	
	function update_tiket_tutorial($id_tiket) {
		$data = array(
			   'tutorial' => '2', // 2 = status open
			);

		$this->db->where('id_tiket', $id_tiket);
		$this->db->update('tiket', $data); 
    }
	
	
	function rekap_tugas($teknisi,$team) {
		$where = "(staf_teknisi = '$teknisi' or staf_teknisi = '$team')";
        $this->db->select('*');
        $this->db->from('tiket');
        $this->db->join('level_prioritas','tiket.level_prioritas=level_prioritas.id_level');
        $this->db->join('dampak','tiket.dampak=dampak.id_dampak');
        $this->db->join('kantor','tiket.kantor=kantor.id_kantor');
		$this->db->join('kategori','tiket.kategori=kategori.id_kategori');
        $this->db->order_by('dampak', 'asc');
        $this->db->order_by('level_prioritas', 'asc');
        $this->db->order_by('tgl_awal_tiket', 'asc');
		$this->db->where($where);
		$this->db->where('status', '3');
        return $this->db->get();
    }
	
	
}
 
/* End of file teknisi_model.php */
/* Location: ./application/models/teknisi_model.php */