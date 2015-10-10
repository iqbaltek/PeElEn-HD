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
		
		$date = time();
		// echo $date . "--";
		
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
		
		echo $customer;
		

		// attackment
		// $errors= array();
		// $file_name = $_FILES['image']['name'];
		// $file_size =$_FILES['image']['size'];
		// $file_tmp =$_FILES['image']['tmp_name'];
		// $file_type=$_FILES['image']['type'];
		// $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

		// $expensions= array("jpeg","jpg","png");

		// if(in_array($file_ext,$expensions)=== false){
			// $errors[]="extension not allowed, please choose a JPEG or PNG file.";
		// }

		// if($file_size > 2097152){
			// $errors[]='File size must be excately 2 MB';
		// }

		// if(empty($errors)==true){
		// move_uploaded_file($file_tmp,"images/".$file_name);
			// echo "Success";
		// }
		// else{
			// print_r($errors);
		// }
		
		$file_name = 1111;
		
		// == tes echo ==
		
		
		// $data = array(
			// 'id_tiket' => $file_name,
			// 'judul_tiket' => $judul_tiket,
			// 'deskripsi_masalah' => $detail_masalah,
			// 'staf_helpdesk' => $staf_helpdesk,
			// 'customer' => $customer,
		// );
		// insert DB
		// $this->db->insert('tiket', $data);
		// redirect('helpdesk/tiket_baru');
	}
	
	function upload(){
		if(isset($_FILES['image'])){
			$errors= array();
			$file_name = $_FILES['image']['name'];
			$file_size =$_FILES['image']['size'];
			$file_tmp =$_FILES['image']['tmp_name'];
			$file_type=$_FILES['image']['type'];
			$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

			$expensions= array("jpeg","jpg","png");

			if(in_array($file_ext,$expensions)=== false){
			$errors[]="extension not allowed, please choose a JPEG or PNG file.";
			}

			if($file_size > 2097152){
			$errors[]='File size must be excately 2 MB';
			}

			if(empty($errors)==true){
			move_uploaded_file($file_tmp,"images/".$file_name);
			echo "Success";
			}
			else{
			print_r($errors);
			}
		}
	}
}
