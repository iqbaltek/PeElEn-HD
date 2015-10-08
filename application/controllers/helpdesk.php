<?php
class Helpdesk extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		// $this->load->helper("url");
		$this->load->library('session');
		$this->load->library('form_validation');
	}
 
 
	 public function tiket_baru() {
		$nip = $this->session->userdata('nip');
        $this->load->model('teknisi_model');
        $tugas_baru = $this->teknisi_model->tugas_baru($nip)->result();

// teknisi
		$this->load->model('helpdesk_model');
		$x = 7;
        $Teknisi = $this->helpdesk_model->getTeknisi($x)->result();
		
//          daftarkan session
		$data = array(
			'tugas_baru' => $tugas_baru,
			'teknisi' => $Teknisi
		);
		// $data2 = array(
		// );
		$this->session->set_userdata($data);
		// $this->session->set_userdata($data);
		
		// $this->load->view('tampil_tugas_baru', $teknisi);
		$data = $this->session->userdata();
		if($data['logged'] == TRUE){
			$this->load->view('menu/header',$data);
			$this->load->view('menu/helpdesk/tiket_baru', $data);
			$this->load->view('menu/footer');
			$this->load->view('menu/teknisi/plugin');
		}
		else {
			redirect('login/index');
		}
    }
	
	public function addTiket(){		
		$this->load->model('helpdesk_model');

		$nama = $_POST['nama'];
		$nomor_hp = $_POST['nomor_hp'];
		$email = $_POST['email'];
		$other = $_POST['other'];
		
		$date = time();
		echo $date . "--";
		
		$data1 = array(
			'nama_customer' => $nama,
			'no_hp_customer' => $nomor_hp,
			'email_customer' => $email,
			'other' => $other,
			'time' => $date,
		);
		
		//	insert to DB
		// $this->db->insert('customer', $data1);
		
		
		$get_id = $this->helpdesk_model->getId($date)->result();
		
		foreach ($get_id as $row){
		   echo $row->id_customer;
		}
		
		$judul_tiket = $_POST['judul_tiket'];
		$detail_masalah = $_POST['detail_masalah'];
		$staf_helpdesk = $this->session->userdata('nip');
		$teknisi = $_POST['teknisi'];
		echo $nama;
		
		$data = array(
			'id_tiket' => '1',
			'judul_tiket' => $judul_tiket,
			'deskripsi_masalah' => $detail_masalah,
			'staf_helpdesk' => $staf_helpdesk,
		);

		//	insert to DB
		// $this->db->insert('tiket', $data);
		// redirect('helpdesk/tiket_baru');
		
		
	}
	
	public function getData(){
		$id_tiket = $this->input->post('id_tiket');
		// $id_tiket = 'TIK-1';
		$this->load->model('teknisi_model');
        $getData = $this->teknisi_model->getData($id_tiket)->row();
		
		$sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;" class="inner-table">';
		$sOut .= '<tr><td>Customer</td><td>:</td><td>'.$getData->nama_customer.'</td></tr>';
		$sOut .= '<tr><td>Status Tiket</td><td>:</td><td>'.$getData->nama_status.'</td></tr>';
		$sOut .= '<tr><td>Deskripsi Tiket</td><td>:</td><td>'.$getData->deskripsi_masalah.'</td></tr>';
		$sOut .= '</table>';
		
		echo $sOut;
	}
}