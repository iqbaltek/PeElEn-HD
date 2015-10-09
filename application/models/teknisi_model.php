<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Teknisi_model extends CI_Model {
	public function __construct()
		{
			$this->load->database();
			$this->load->library('session');
			// $this->load->library('url');
			// $this->load->helper("back_handler");
		}
    
//    untuk mengambil data tugas baru
    function tugas_baru($teknisi) {
        $this->db->select('*');
        $this->db->from('tiket');
        $this->db->join('level_prioritas','tiket.level_prioritas=level_prioritas.id_level');
        $this->db->join('dampak','tiket.dampak=dampak.id_dampak');
        $this->db->join('kantor','tiket.kantor=kantor.id_kantor');
        $this->db->order_by('dampak', 'asc');
        $this->db->order_by('level_prioritas', 'asc');
        $this->db->order_by('tgl_awal_tiket', 'asc');
		$this->db->where('staf_teknisi', $teknisi);
		$this->db->where('status', '1');
        return $this->db->get();
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
	
	function update_tiket($id_tiket,$status) {
        // echo "helo";
		$data = array(
			   'status' => $status,
			);

		$this->db->where('id_tiket', $id_tiket);
		$this->db->update('tiket', $data); 
    }
	
}
 
/* End of file teknisi_model.php */
/* Location: ./application/models/teknisi_model.php */