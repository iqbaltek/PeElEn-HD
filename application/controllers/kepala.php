<?php
class Kepala extends CI_Controller {
 
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
		$new_bulan_ini = $this->teknisi_model->new_bulan_ini($month, $year, $nip);
		
		//menghitung semua tugas milik sendiri yang belum terselesaikan
		$open_bulan_ini = $this->teknisi_model->open_bulan_ini($month, $year, $nip);
		
		//menghitung semua tugas milik sendiri yang sudah terselesaikan
		$close_bulan_ini = $this->teknisi_model->close_bulan_ini($month, $year, $nip);
		
		//menghitung tugas baru, tugas yang akan dilaporkan dan tugas yang perlu dibuatkan tutorial solusi
		$count_tugas_baru = $this->teknisi_model->count_tugas_baru($nip);
		$count_lapor_selesai = $this->teknisi_model->count_lapor_selesai($nip);
		$count_buat_solusi = $this->teknisi_model->count_buat_solusi($nip);

		//daftarkan session
		$data = array(
			'tahun_ini' => $tahun_ini,
			'bulan_ini' => $bulan_ini,
			'hari_ini' => $hari_ini,
			'new_bulan_ini' => $new_bulan_ini,
			'open_bulan_ini' => $open_bulan_ini,
			'close_bulan_ini' => $close_bulan_ini,
			'count_tugas_baru' => $count_tugas_baru,
			'count_lapor_selesai' => $count_lapor_selesai,
			'count_buat_solusi' => $count_buat_solusi,
		);
		$this->session->set_userdata($data);
		
		//mengecek previlage pegawai, 7 untuk teknisi
		$data = $this->session->userdata();
		if($data['logged'] == TRUE && $data['level'] == 4){
			$this->load->view('menu/header',$data);
			$this->load->view('menu/kepala/dashboard');
			$this->load->view('menu/footer');
			$this->load->view('menu/teknisi/plugin');
		}
		else {
			redirect('login/index');
		}
    }	
	
}