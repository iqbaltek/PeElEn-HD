<?php
class Helpdesk extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->library('form_validation');
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
		if($data['logged'] == TRUE && $data['level'] == 6){
			$this->load->view('menu/header',$data);
			$this->load->view('menu/teknisi/dashboard');
			$this->load->view('menu/footer');
			$this->load->view('menu/teknisi/plugin');
		}
		else {
			redirect('login/index');
		}
    }
	 public function tiket_baru() {
		$nip = $this->session->userdata('nip');
        $this->load->model('teknisi_model');
        $tugas_baru = $this->teknisi_model->tugas_baru($nip)->result();

// teknisi
		$this->load->model('helpdesk_model');
		$x = 7;
        $Teknisi = $this->helpdesk_model->getTeknisi($x)->result();
// kategori
        $kategori = $this->helpdesk_model->getKategori()->result();		
// level
        $level_prioritas = $this->helpdesk_model->getLevel()->result();
// dampak
        $dampak = $this->helpdesk_model->getDampak()->result();
        $kantor = $this->helpdesk_model->getKantor()->result();
		
//          daftarkan session
		$data = array(
			'tugas_baru' => $tugas_baru,
			'teknisi' => $Teknisi,
			'kategori' => $kategori,
			'level_prioritas' => $level_prioritas,
			'dampak' => $dampak,
			'kantor' => $kantor,
		);
		
		$this->session->set_userdata($data);
		
		// $this->load->view('tampil_tugas_baru', $teknisi);
		$data = $this->session->userdata();
		if($data['logged'] == TRUE && $data["level"]==6){
			$this->load->view('menu/header',$data);
			$this->load->view('menu/helpdesk/tiket_baru');
			$this->load->view('menu/footer');
			$this->load->view('menu/helpdesk/plugin');
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
		
		$date = time("Y-m-d H:i:s");
		// echo "-----" . $date . "-----";
		
		$data1 = array(
			'nama_customer' => $nama,
			'no_hp_customer' => $nomor_hp,
			'email_customer' => $email,
			'other' => $other,
			'time' => $date,
		);
		
		//	insert to DB
		$this->db->insert('customer', $data1);
		
		$get_id = $this->helpdesk_model->getId($date)->result();
		
		foreach ($get_id as $row){
		   $id_customer = $row->id_customer;
		}
		
  		$judul_tiket = $_POST['judul_tiket'];
		$detail_masalah = $_POST['detail_masalah'];
		$staf_helpdesk = $this->session->userdata('nip');
		$teknisi = $_POST['teknisi'];
		$customer = $id_customer;
		$kantor = $_POST['kantor'];
		$kategori = $_POST['kategori'];
		$level_prioritas = $_POST['level_prioritas'];
		$status = 1;
		$dampak = $_POST['dampak'];
		$status_tiket = $_POST['status_tiket'];
		
		// echo "lalalalalal->" . $kategori;
		

		// echo base_url();
		
		$data = array(
			'judul_tiket' => $judul_tiket,
			'deskripsi_masalah' => $detail_masalah,
			// 'tgl_awal_tiket' => $date,
			'staf_helpdesk' => $staf_helpdesk,
			'staf_teknisi' => $teknisi,
			'customer' => $customer,
			'kantor' => $kantor,
			'kategori' => $kategori,
			'level_prioritas' => $level_prioritas,
			'status' => $status_tiket,
			'dampak' => $dampak,
		);			
				
		
		// insert DB
		$this->db->insert('tiket', $data);
		$namafilenew = $this->db->insert_id();
		$this->helpdesk_model->update_lampiran($namafilenew,$namafilenew);
		
		// isi date_open dkk jika status 2 / close
		$tgl = $this->helpdesk_model->getTanggal($namafilenew)->result();
		foreach ($tgl as $row){
		   $get_tgl = $row->tgl_awal_tiket;
		}
		$this->helpdesk_model->update_date($namafilenew,$get_tgl);
		
		
		// attackment
		$nama_file = basename( $_FILES["namafile"]["name"]);
		$extension = pathinfo($nama_file, PATHINFO_EXTENSION);
		$folder_name = $namafilenew;
		$target_dir = "C:/xampp/htdocs/PeElEn-HD/file/";
		$new_folder=mkdir($target_dir."/".$folder_name, 0777, true);
		$target_dir = "C:/xampp/htdocs/PeElEn-HD/file/". $folder_name ."/";
		$target_file = $target_dir . $namafilenew . "." . $extension;
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		// Check if image file is a actual image or fake image
		
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["namafile"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		
		// Check file size
		if ($_FILES["namafile"]["size"] > 200000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		
		
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		
		// if everything is ok, try to upload file
		
		} else {
			if (move_uploaded_file($_FILES["namafile"]["tmp_name"], $target_file)) {
				// echo "The file ". basename( $_FILES["namafile"]["name"]). " has been uploaded.";
				
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
		
		echo "ini-----" . $nama_file;
		echo "itu-----" . $extension;
		
		// data buat attachment
		$data3 = array(
			'id_tiket' => $namafilenew,
			'file_name' => $namafilenew.".".$extension,
			'file_size' => $_FILES["namafile"]["size"],
		);
		$this->db->insert('attachment', $data3);

		echo "<script type='text/javascript'>alert('hey berhasil!');</script>";
		redirect('helpdesk/tiket_baru');
	}
}
