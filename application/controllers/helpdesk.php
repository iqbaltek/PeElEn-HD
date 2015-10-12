<?php
class Helpdesk extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
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
			'status' => $status,
			'dampak' => $dampak,
		);
		
		// insert DB
		$this->db->insert('tiket', $data);
		$namafilenew = $this->db->insert_id();
		$this->helpdesk_model->update_lampiran($namafilenew,$namafilenew);
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
		
		redirect('helpdesk/tiket_baru');
	}
}
