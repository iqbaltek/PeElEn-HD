<?php
class Teknisi extends CI_Controller {
 
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
			'count_tugas_baru' => $count_tugas_baru,
			'count_lapor_selesai' => $count_lapor_selesai,
			'count_buat_solusi' => $count_buat_solusi,
		);
		$this->session->set_userdata($data);
		
		//mengecek previlage pegawai, 7 untuk teknisi
		$data = $this->session->userdata();
		if($data['logged'] == TRUE && $data['level'] == 7){
			$this->load->view('menu/header',$data);
			$this->load->view('menu/teknisi/dashboard');
			$this->load->view('menu/footer');
			$this->load->view('menu/teknisi/plugin');
		}
		else {
			redirect('login/index');
		}
    }
	 
	public function tugas_baru() {
		//ambil data NIP dari Session
		$nip = $this->session->userdata('nip');
		$team = $this->session->userdata('team');
        
		if($team == NULL){
			$team = "0";
		}
		
		//memanggil model untuk mendapatkan data tiket yang ditugaskan padanya
		$this->load->model('teknisi_model');
		$tugas_baru = $this->teknisi_model->tugas_baru($nip,$team)->result();
				
		//menghitung tugas baru, tugas yang akan dilaporkan dan tugas yang perlu dibuatkan tutorial solusi
		$count_tugas_baru = $this->teknisi_model->count_tugas_baru($nip,$team);
		$count_lapor_selesai = $this->teknisi_model->count_lapor_selesai($nip,$team);
		$count_buat_solusi = $this->teknisi_model->count_buat_solusi($nip,$team);

		//daftarkan session
		$data = array(
			'tugas_baru' => $tugas_baru,
			'count_tugas_baru' => $count_tugas_baru,
			'count_lapor_selesai' => $count_lapor_selesai,
			'count_buat_solusi' => $count_buat_solusi,
		);
		$this->session->set_userdata($data);
		
		//mengecek previlage pegawai, 7 untuk teknisi
		$data = $this->session->userdata();
		if($data['logged'] == TRUE && $data['level'] == 7){
			$this->load->view('menu/header',$data);
			$this->load->view('menu/teknisi/tugas_baru');
			$this->load->view('menu/footer');
			$this->load->view('menu/teknisi/plugin');
		}
		else {
			redirect('login/index');
		}
    }
	
		function download_file(){
		$this->load->helper('download');
		$data = file_get_contents('file/'.$this->uri->segment(3).'/'.$this->uri->segment(4)); // Read the file's contents
		$name = $this->uri->segment(4);
		force_download($name, $data);
	}
	
	public function getData(){
		//mengambil id_tiket dari form
		$id_tiket = $this->input->post('id');
		
		//memanggil model untuk mengambil data tiket dan attachmet
		$this->load->model('teknisi_model');
        $getData = $this->teknisi_model->getData($id_tiket)->row();
		$getAttachment = $this->teknisi_model->getAttachment($id_tiket)->row();
		
		//bagian ini akan dilemparkan ke datatables.js
		$sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;" class="inner-table">';
		$sOut .= '<tr><td>Customer</td><td>:</td><td>'.$getData->nama_customer.'</td></tr>';
		$sOut .= '<tr><td>Status Tiket</td><td>:</td><td>'.$getData->nama_status.'</td></tr>';
		$sOut .= '<tr><td>Deskripsi Tiket</td><td>:</td><td>'.$getData->deskripsi_masalah.'</td></tr>';
		if($getAttachment != NULL){
			$sOut .= '<tr><td>Attachment</td><td>:</td><td><a href="'.base_url().'teknisi/download_file/'.$getAttachment->id_tiket.'/'.$getAttachment->file_name.'" target="_blank">'.$getAttachment->file_name.'</td></tr>';
		}
		$sOut .= '</table>';
		
		echo $sOut;
	}
	
	public function update_tiket(){	
		//menentukan tanggal saat pegawai mengklik 'kerjakan'
		$tanggal_mulai = date("Y-m-d H:i:s", strtotime('+5 hours'));
		
		//memanggil model untuk melakukan update pada fungsi update_tiket di model
		$this->load->model('teknisi_model');
		$this->teknisi_model->update_tiket($this->input->post('id_tiket'), $tanggal_mulai);
		
		//mengecek previlage dari pegawai, 7 untuk teknisi
		$data = $this->session->userdata();
		if($data['logged'] == TRUE && $data['level'] == 7){
			redirect('teknisi/tugas_baru');
		}
		else {
			redirect('login/index');
		}
		
	}
	
	//fungsi untuk menentukan durasi waktu
	function durasi($diff){
		$durasi = '';
		if($diff->i >=1){
			$durasi =  $diff->i." menit ".$durasi;
		}
		if($diff->h >=1){
			$durasi =  $diff->h." jam ".$durasi;
		}
		if($diff->d >=1){
			$durasi =  $diff->d." hari ".$durasi;
		}
		if($diff->m >=1){
			$durasi =  $diff->m." bulan ".$durasi;
		}
		if($diff->y >=1){
			$durasi = $diff->y." tahun ".$durasi ;
		}
		
		return $durasi;
			
	}
	
	public function update_selesai(){		
		$id_tiket = $this->input->post('id_tiket');
		
		if($this->input->post('tutorial') != NULL){
			$tutorial = $this->input->post('tutorial');
		}else{
			$tutorial = '0';
		}
		
		//variable untuk masuk ke update selesai
		$date_close = date("Y-m-d H:i:s", strtotime('+5 hours'));
		
		//memanggil fungsi durasi waktu
		$open = strtotime($this->input->post('date_open'));
		$close = strtotime(date("Y-m-d H:i:s", strtotime('+5 hours')));
		
		$durasi = $close - $open;
		
		//memasukkan ke dalam database
		$this->load->model('teknisi_model');
		$this->teknisi_model->update_selesai($this->input->post('id_tiket'),$tutorial, $date_close, $durasi);
		
		//mengecek previlage pengguna
		$data = $this->session->userdata();
		if($data['logged'] == TRUE && $data['level'] == 7){
			redirect('teknisi/tugas_selesai');
		}
		else {
			redirect('login/index');
		}
		
	}
	
	public function tugas_selesai(){
		$nip = $this->session->userdata('nip');
		$team = $this->session->userdata('team');
		if($team == NULL){
			$team = "0";
		}
		
		$this->load->model('teknisi_model');
        
		//memanggil model untuk mendapatkan data tiket yang ditugaskan padanya
		$lapor_tugas = $this->teknisi_model->lapor_selesai($nip,$team)->result();
		
		//menghitung tugas baru, tugas yang akan dilaporkan dan tugas yang perlu dibuatkan tutorial solusi
		$count_tugas_baru = $this->teknisi_model->count_tugas_baru($nip,$team);
		$count_lapor_selesai = $this->teknisi_model->count_lapor_selesai($nip,$team);
		$count_buat_solusi = $this->teknisi_model->count_buat_solusi($nip,$team);
		
			//daftarkan session
            $data = array(
                'lapor_tugas' => $lapor_tugas,
				'count_tugas_baru' => $count_tugas_baru,
				'count_lapor_selesai' => $count_lapor_selesai,
				'count_buat_solusi' => $count_buat_solusi,
            );
            $this->session->set_userdata($data);
			
			// $this->load->view('tampil_tugas_baru', $teknisi);
			$data = $this->session->userdata();
			if($data['logged'] == TRUE && $data['level'] == 7){
				$this->load->view('menu/header',$data);
				$this->load->view('menu/teknisi/lapor_tugas');
				$this->load->view('menu/footer');
				$this->load->view('menu/teknisi/plugin');
			}
			else {
				redirect('login/index');
			}
	}
	
	public function buat_solusi(){
		$nip = $this->session->userdata('nip');
		$team = $this->session->userdata('team');
		if($team == NULL){
			$team = "0";
		}
		$this->load->model('teknisi_model');
        
		//memanggil model untuk mendapatkan data tiket yang ditugaskan padanya
		$buat_solusi = $this->teknisi_model->buat_solusi($nip,$team)->result();
		
		
		//menghitung tugas baru, tugas yang akan dilaporkan dan tugas yang perlu dibuatkan tutorial solusi
		$count_tugas_baru = $this->teknisi_model->count_tugas_baru($nip,$team);
		$count_lapor_selesai = $this->teknisi_model->count_lapor_selesai($nip,$team);
		$count_buat_solusi = $this->teknisi_model->count_buat_solusi($nip,$team);
		
			//daftarkan session
            $data = array(
                'buat_solusi' => $buat_solusi,
				'count_tugas_baru' => $count_tugas_baru,
				'count_lapor_selesai' => $count_lapor_selesai,
				'count_buat_solusi' => $count_buat_solusi,
            );
            $this->session->set_userdata($data);
			
			// $this->load->view('tampil_tugas_baru', $teknisi);
			$data = $this->session->userdata();
			if($data['logged'] == TRUE && $data['level'] == 7){
				$this->load->view('menu/header',$data);
				$this->load->view('menu/teknisi/buat_solusi');
				$this->load->view('menu/footer');
				$this->load->view('menu/teknisi/plugin');
			}
			else {
				redirect('login/index');
			}
	}
	
	public function form_solusi(){
		$nip = $this->session->userdata('nip');
		$team = $this->session->userdata('team');
		if($team == NULL){
			$team = "0";
		}
		
        $id_tiket = $this->input->post('id_tiket');
		
		$this->load->model('teknisi_model');
        
		//memanggil model untuk mendapatkan data tiket yang ditugaskan padanya
		$form_solusi = $this->teknisi_model->form_solusi($id_tiket)->result();
		
			//daftarkan session
            $data = array(
                'form_solusi' => $form_solusi
            );
            $this->session->set_userdata($data);
			
			// $this->load->view('tampil_tugas_baru', $teknisi);
			$data = $this->session->userdata();
			if($data['logged'] == TRUE && $data['level'] == 7){
				$this->load->view('menu/header',$data);
				$this->load->view('menu/teknisi/form_solusi');
				$this->load->view('menu/footer');
				$this->load->view('menu/teknisi/plugin');
			}
			else {
				redirect('login/index');
			}
	}
	
	public function terbitkan_solusi(){
		$this->load->model('teknisi_model');
		
		$id_tiket = $this->input->post('id_tiket');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$nip = $this->session->userdata('nip');
		
		$data = array(
			'judul_solusi' => $judul,
			'id_tiket' => $id_tiket,
			'nip' => $nip,
			'deskripsi_solusi' => $deskripsi
		);
		
		$this->db->insert('solusi',$data);
		
		$this->teknisi_model->update_tiket_tutorial($this->input->post('id_tiket'));
		
		$data = $this->session->userdata();
		if($data['logged'] == TRUE && $data['level'] == 7){
			redirect('teknisi/buat_solusi');
		}
		else {
			redirect('login/index');
		}
	}
	
	public function rekap_tugas(){
		$nip = $this->session->userdata('nip');
		$team = $this->session->userdata('team');
		if($team == NULL){
			$team = "0";
		}
		$this->load->model('teknisi_model');
        
		//memanggil model untuk mendapatkan data tiket yang ditugaskan padanya
		$rekap_tugas = $this->teknisi_model->rekap_tugas($nip,$team)->result();
		
		
			//daftarkan session
            $data = array(
                'rekap_tugas' => $rekap_tugas
            );
            $this->session->set_userdata($data);
			
			// $this->load->view('tampil_tugas_baru', $teknisi);
			$data = $this->session->userdata();
			if($data['logged'] == TRUE && $data['level'] == 7){
				$this->load->view('menu/header',$data);
				$this->load->view('menu/teknisi/rekap_tugas');
				$this->load->view('menu/footer');
				$this->load->view('menu/teknisi/plugin');
			}
			else {
				redirect('login/index');
			}
	}
	
	
}