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
		$new_bulan_ini = $this->teknisi_model->new_bulan_ini($month, $year, $nip ,$team);
		
		//menghitung semua tugas milik sendiri yang belum terselesaikan
		$open_bulan_ini = $this->teknisi_model->open_bulan_ini($month, $year, $nip ,$team);
		
		//menghitung semua tugas milik sendiri yang sudah terselesaikan
		$close_bulan_ini = $this->teknisi_model->close_bulan_ini($month, $year, $nip ,$team);
		
		//menghitung tugas baru, tugas yang akan dilaporkan dan tugas yang perlu dibuatkan tutorial solusi
		$count_tugas_baru = $this->teknisi_model->count_tugas_baru($nip,$team);
		$count_lapor_selesai = $this->teknisi_model->count_lapor_selesai($nip,$team);
		$count_buat_solusi = $this->teknisi_model->count_buat_solusi($nip,$team);

		
		$year = date("Y");
		$month = date("m");
        
		//memanggil model untuk mendapatkan data tiket yang ditugaskan padanya
		$this->load->model('kepala_model');
		$tiket_kategori = $this->kepala_model->tiket_kategori($month,$year)->result();
		$tiket_prioritas = $this->kepala_model->tiket_prioritas($month,$year)->result();
		$rata2durasi = $this->kepala_model->rata2durasi($month,$year)->result();
		
		//memanggil model untuk melihat jumlah dampak dalam 1 tahun
		$tiket_dampak = $this->kepala_model->tiket_dampak($year);
		
		
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
			'tiket_kategori' => $tiket_kategori,
			'tiket_prioritas' => $tiket_prioritas,
			'rata2durasi' => $rata2durasi,
			'tiket_dampak' => $tiket_dampak,
		);
		$this->session->set_userdata($data);
		
		//mengecek previlage pegawai, 4 untuk kepala
		$data = $this->session->userdata();
		if($data['logged'] == TRUE && $data['level'] == 4){
			$this->load->view('menu/kepala/header',$data);
			$this->load->view('menu/kepala/dashboard');
			$this->load->view('menu/kepala/footer',$data);
		}
		else {
			redirect('login/index');
		}
    }	
	
	public function tiket_kategori(){
		//ambil data NIP dari Session
		$nip = $this->session->userdata('nip');

		$year = date("Y");
		$month = date("m");
        
		//memanggil model untuk mendapatkan data tiket yang ditugaskan padanya
		$this->load->model('kepala_model');
		$tiket_kategori = $this->kepala_model->tiket_kategori($month,$year)->result();
		
		
		// echo "<pre>";
		// var_dump($tiket_kategori);
		// echo "</pre>";
		
		$data = array(
			'tiket_kategori' => $tiket_kategori,
		);
		
		$this->session->set_userdata($data);
		
		//mengecek previlage pegawai, 4 untuk kepala
		$data = $this->session->userdata();
		if($data['logged'] == TRUE && $data['level'] == 4){
			$this->load->view('menu/header',$data);
			$this->load->view('menu/kepala/tiket_kategori');
			$this->load->view('menu/footer');
			$this->load->view('menu/teknisi/plugin');
		}
		else {
			redirect('login/index');
		}
		
	}
	
}