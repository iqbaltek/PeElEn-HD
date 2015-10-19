<?php
class Admin extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		// $this->load->helper("url");
		$this->load->library('session');
		$this->load->library('form_validation');
		// $this->load->database('tiket');
	}
 
	 public function dashboard() {
		//ambil data NIP dari Session
		$nip = $this->session->userdata('nip');
		$team = $this->session->userdata('team');
		if($team == NULL){
			$team = "0";
		}
        
		//memanggil model untuk mendapatkan data tiket yang ditugaskan padanya
		$this->load->model('teknisi_model');
		$this->load->model('general_model');
		//variabel untuk filter banyak tiket
		$year = date("Y");
		$month = date("m");
		$date = date("Y-m-d");
		// echo $date;
		
		//menghitung semua tiket tahun ini
		$tahun_ini =  $this->general_model->tahun_ini($year);
		
		//menghitung semua tiket bulan ini
		$bulan_ini = $this->general_model->bulan_ini($month, $year);
		
		//menghitung semua tiket bulan ini
		$hari_ini = $this->general_model->hari_ini($date);

		//menghitung semua tugas milik sendiri
		$new_bulan_ini = $this->teknisi_model->new_bulan_ini($month, $year, $nip,$team);
		
		//menghitung semua tugas milik sendiri yang belum terselesaikan
		$open_bulan_ini = $this->teknisi_model->open_bulan_ini($month, $year, $nip,$team);
		
		//menghitung semua tugas milik sendiri yang sudah terselesaikan
		$close_bulan_ini = $this->teknisi_model->close_bulan_ini($month, $year, $nip,$team);
		
		//menghitung tugas baru, tugas yang akan dilaporkan dan tugas yang perlu dibuatkan tutorial solusi
		$count_tugas_baru = $this->teknisi_model->count_tugas_baru($nip,$team);
		$count_lapor_selesai = $this->teknisi_model->count_lapor_selesai($nip,$team);
		$count_buat_solusi = $this->teknisi_model->count_buat_solusi($nip,$team);

		//daftarkan session
		$data = array(
			'tahun_ini' => $tahun_ini,
			'bulan_ini' => $bulan_ini,
			'hari_ini' => $hari_ini,
			'new_bulan_ini' => $new_bulan_ini,
			'open_bulan_ini' => $open_bulan_ini,
			'close_bulan_ini' => $close_bulan_ini,
			// 'count_tugas_baru' => $count_tugas_baru,
			'count_lapor_selesai' => $count_lapor_selesai,
			'count_buat_solusi' => $count_buat_solusi,
		);
		$this->session->set_userdata($data);
		
		//mengecek previlage pegawai, 7 untuk teknisi
		$data = $this->session->userdata();
		if($data['logged'] == TRUE && $data['level'] == 8){
			$this->load->view('menu/header',$data);
			$this->load->view('menu/admin/dashboard');
			$this->load->view('menu/footer');
			$this->load->view('menu/teknisi/plugin');
		}
		else {
			redirect('login/index');
		}
    }	
	
	public function aktivasi() {
		//ambil data NIP dari Session
		$nip = $this->session->userdata('nip');
		$team = $this->session->userdata('team');
		if($team == NULL){
			$team = "0";
		}
		
		//memanggil model untuk mendapatkan data tiket yang ditugaskan padanya
		$this->load->model('admin_model');
		$aktivasi = $this->admin_model->aktivasi()->result();
		// print_r($aktivasi);
		
		//daftarkan session
		$data = array(
			'aktivasi' => $aktivasi,
		);
		$this->session->set_userdata($data);
		
		//mengecek previlage pegawai, 7 untuk teknisi
		$data = $this->session->userdata();
		if($data['logged'] == TRUE && $data['level'] == 8){
			$this->load->view('menu/header',$data);
			$this->load->view('menu/admin/aktivasi_pegawai');
			$this->load->view('menu/footer');
			$this->load->view('menu/teknisi/plugin');
		}
		else {
			redirect('login/index');
		}
    }
	
	public function update_pegawai(){
		
		$nip = $this->input->post('nip');
		$aktivasi = $this->input->post('aktivasi');		
		$tgl_diedit = date("Y-m-d H:i:s", strtotime('+5 hours'));
		$diedit_oleh = $this->session->userdata('nip');;
		
		//memanggil model untuk melakukan update pada fungsi update_tiket di model
		$this->load->model('admin_model');
		
		if($aktivasi != '0'){
			$this->admin_model->update_pegawai($nip,md5($aktivasi), $tgl_diedit, $diedit_oleh);
		}
		if($aktivasi == '0'){
			$this->admin_model->update_pegawai($nip,'0', $tgl_diedit, $diedit_oleh);
		}
		
		//mengecek previlage dari pegawai, 7 untuk teknisi
		$data = $this->session->userdata();
		if($data['logged'] == TRUE && $data['level'] == 8){
			redirect('admin/aktivasi');
		}
		else {
			redirect('login/index');
		}
		
	}
	
	
	public function edit_jabatan() {
		//ambil data NIP dari Session
		$nip = $this->session->userdata('nip');
		$team = $this->session->userdata('team');
		if($team == NULL){
			$team = "0";
		}
		//memanggil model untuk mendapatkan data tiket yang ditugaskan padanya
		$this->load->model('admin_model');
		$aktivasi = $this->admin_model->aktivasi()->result();
		// print_r($aktivasi);
		
		//daftarkan session
		$data = array(
			'aktivasi' => $aktivasi,
		);
		$this->session->set_userdata($data);
		
		//mengecek previlage pegawai, 7 untuk teknisi
		$data = $this->session->userdata();
		if($data['logged'] == TRUE && $data['level'] == 8){
			$this->load->view('menu/header',$data);
			$this->load->view('menu/admin/edit_jabatan');
			$this->load->view('menu/footer');
			$this->load->view('menu/teknisi/plugin');
		}
		else {
			redirect('login/index');
		}
    }
	
}