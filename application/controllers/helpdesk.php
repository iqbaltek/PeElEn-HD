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
	 public function tiket_baru($ex=0) {
			
		if($ex==1){
			echo "<script type='text/javascript'>alert('Laporan berhasil ditambahkan!');</script>";
		}
			
		$nip = $this->session->userdata('nip');
		$team = $this->session->userdata('team');
		if($team == NULL){
			$team = "0";
		}
		
		$this->load->model('helpdesk_model');
        

// teknisi
		$this->load->model('helpdesk_model');
		$x = 7;
        $Teknisi = $this->helpdesk_model->getTeknisi($x)->result();
        $Team = $this->helpdesk_model->getTeam()->result();
// kategori
        $kategori = $this->helpdesk_model->getKategori()->result();		
// level
        $level_prioritas = $this->helpdesk_model->getLevel()->result();
// dampak
        $dampak = $this->helpdesk_model->getDampak()->result();
        $kantor = $this->helpdesk_model->getKantor()->result();
		
//          daftarkan session
		$data = array(
			'teknisi' => $Teknisi,
			'kategori' => $kategori,
			'level_prioritas' => $level_prioritas,
			'dampak' => $dampak,
			'kantor' => $kantor,
			'team' => $Team,
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
		$tgl = date("Y-m-d H:i:s", strtotime('+5 hours'));
		$date_open = NULL;
		$date_close = NULL;
		
		// echo "lalalalalal->" . $kategori;
		

		// echo base_url();
		
		$data = array(
			'judul_tiket' => $judul_tiket,
			'deskripsi_masalah' => $detail_masalah,
			'tgl_awal_tiket' => date("Y-m-d H:i:s", strtotime('+5 hours')),
			'date_open' => NULL,
			'date_close' => NULL,
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
		//$this->db->insert('tiket', $data);
		$insert = $this->helpdesk_model->tiket_baru($data);
		$namafilenew = $this->db->insert_id();
		
		// isi date_open dkk jika status 3 / close
		if($status_tiket == 3){
			$tgl = $this->helpdesk_model->getTanggal($namafilenew)->result();
			foreach ($tgl as $row){
			   $get_tgl = $row->tgl_awal_tiket;
			}
			$this->helpdesk_model->update_date($namafilenew,$get_tgl);
		}

		//cek apakah attachment diisi
		if($_POST['namafile'] != NULL){
			$this->helpdesk_model->update_lampiran($namafilenew,$namafilenew);
		}
		
		
			// attachment
			$nama_file = basename( $_FILES["namafile"]["name"]);
			$extension = pathinfo($nama_file, PATHINFO_EXTENSION);
			$folder_name = $namafilenew;
			if($nama_file != NULL){
				$target_dir = "C:/xampp/htdocs/PeElEn-HD/file/";
				$new_folder=mkdir($target_dir."/".$folder_name, 0777, true);
				$target_dir = "C:/xampp/htdocs/PeElEn-HD/file/". $folder_name ."/";
				$target_file = $target_dir . $namafilenew . "." . $extension;
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			}
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
				if($nama_file != NULL){		
					if (move_uploaded_file($_FILES["namafile"]["tmp_name"], $target_file)) {
						// echo "The file ". basename( $_FILES["namafile"]["name"]). " has been uploaded.";
						
					} else {
						echo "Sorry, there was an error uploading your file.";
					}
				}
			}
		
			
			// echo "ini-----" . $nama_file;
			// echo "itu-----" . $extension;
		
		
			// data buat attachment
		if($nama_file != NULL){	
			$data3 = array(
				'id_tiket' => $namafilenew,
				'file_name' => $namafilenew.".".$extension,
				'file_size' => $_FILES["namafile"]["size"],
			);
			$this->db->insert('attachment', $data3);
		}
		
		redirect('helpdesk/tiket_baru/1');
	}
	
	
	public function tracking() {	
	
		
		
		$nip = $this->session->userdata('nip');
		$team = $this->session->userdata('team');
		if($team == NULL){
			$team = "0";
		}
		$this->load->model('helpdesk_model');

		
		
		$data = $this->session->userdata();
			
		
		$data1['track']="";
		
		// $this->load->view('tampil_tugas_baru', $teknisi);
		if($data['logged'] == TRUE && $data["level"]==6){
			if(isset($_POST["id_tiket"])){
				// ambil data tiket
				$id_tiket = $_POST['id_tiket'];
				$get_data_tiket = $this->helpdesk_model->getTiket($id_tiket)->row();
				
				$id_tiket = $get_data_tiket->id_tiket;
				$judul_tiket = $get_data_tiket->judul_tiket;
				$nama = $get_data_tiket->nama_customer;
				$tgl = $get_data_tiket->tgl_awal_tiket;
				$status = $get_data_tiket->nama_status;
				$tgl_open = $get_data_tiket->date_open;
				if($tgl_open != NULL){
					$open = date('d-m-Y H:i',strtotime(date($tgl_open)));
				}else{
					$open = "-";
				}
				$tgl_close = $get_data_tiket->date_close;
				if($tgl_close != NULL){
					$close = date('d-m-Y H:i',strtotime(date($tgl_close)));
				}else{
					$close = "-";
				}
				
			
				// tabel data tiket
				$data1['track'] = '
					<div class="row-fluid">
				<div class="span12">
					<div class="grid simple ">
						<div class="grid-title">
							<h4><span class="semi-bold">Hasil Tracking</span></h4>
						</div>
						<div class="grid-body ">
							<table class="table" id="example3" >
								<tbody>
									<tr class="odd gradeA">
										<th class="col-md-3">ID TIKET</th>
										<td><b> : </b></td>
										<td>'. $id_tiket .'</td>
									</tr>
										<tr class="even gradeA">
										<th class="col-md-3">JUDUL TIKET</th>
										<td><b> : </b></td>
										<td>'. $judul_tiket .'</td>
									</tr>
										<tr class="odd gradeA">
										<th class="col-md-3">NAMA PELAPOR</th>
										<td><b> : </b></td>
										<td>'. $nama .'</td>
									</tr>
										<tr class="odd gradeA">
										<th class="col-md-3">TANGGAL LAPOR</th>
										<td><b> : </b></td>
										<td>'. date('d-m-Y H:i',strtotime(date($tgl))) .'</td>
									</tr>
										<tr class="odd gradeA">
										<th class="col-md-3">TANGGAL MULAI KERJA</th>
										<td><b> : </b></td>
										<td>'. $open .'</td>
									</tr>
										<tr class="odd gradeA">
										<th class="col-md-3">TANGGAL SELESAI KERJA</th>
										<td><b> : </b></td>
										<td>'. $close .'</td>
									</tr>
										<tr class="odd gradeA">
										<th class="col-md-3">STATUS</th>
										<td><b> : </b></td>
										<td>'. $status .'</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
				';
			}
			$this->load->view('menu/header',$data);
			$this->load->view('menu/helpdesk/tracking',$data1);
			$this->load->view('menu/footer');
			$this->load->view('menu/helpdesk/plugin');
			
		}
		else{
			redirect('login/index');
		}
		
    }
	
	public function tugas_belum_selesai() {	
		$nip = $this->session->userdata('nip');
		$team = $this->session->userdata('team');
		if($team == NULL){
			$team = "0";
		}
		$this->load->model('teknisi_model');
        $this->load->model('helpdesk_model');
        $tugas_belum_selesai = $this->helpdesk_model->tugas_belum_selesai()->result();
		
		// echo "<pre>";
			// var_dump($tugas_new);
		// echo "</pre>";
		
		//  daftarkan session
		$data = array(
			'tugas_belum_selesai' => $tugas_belum_selesai,
		);
		$this->session->set_userdata($data);

		$data = $this->session->userdata();		
		// $this->load->view('tampil_tugas_baru', $teknisi);
		if($data['logged'] == TRUE && $data["level"]==6){
			$this->load->view('menu/header',$data);
			$this->load->view('menu/helpdesk/tugas_belum_selesai');
			$this->load->view('menu/footer');
			$this->load->view('menu/teknisi/plugin');
			
		}
		else{
			redirect('login/index');
		}
		
    }
	
	public function tugas_baru() {	
		$nip = $this->session->userdata('nip');
		$team = $this->session->userdata('team');
		if($team == NULL){
			$team = "0";
		}
		$this->load->model('teknisi_model');
        $this->load->model('helpdesk_model');
        $tugas_new = $this->helpdesk_model->tugas_baru()->result();
		
		// echo "<pre>";
			// var_dump($tugas_new);
		// echo "</pre>";
		
		//  daftarkan session
		$data = array(
			'tugas_new' => $tugas_new,
		);
		$this->session->set_userdata($data);

		$data = $this->session->userdata();		
		// $this->load->view('tampil_tugas_baru', $teknisi);
		if($data['logged'] == TRUE && $data["level"]==6){
			$this->load->view('menu/header',$data);
			$this->load->view('menu/helpdesk/tugas_baru');
			$this->load->view('menu/footer');
			$this->load->view('menu/teknisi/plugin');
			
		}
		else{
			redirect('login/index');
		}
		
    }
	
	public function dataSolusi(){
		//mengambil id_tiket dari form
		$id_solusi = $this->input->post('id');
		
		//memanggil model untuk mengambil data tiket dan attachmet
		$this->load->model('helpdesk_model');
        $getData = $this->helpdesk_model->data_solusi($id_solusi)->row();
		
		//bagian ini akan dilemparkan ke datatables.js
		$sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;" class="inner-table">';
		$sOut .= '<tr><td>Deskripsi Solusi</td><td>:</td><td>'.$getData->deskripsi_solusi.'</td></tr>';
		$sOut .= '</table>';
		
		echo $sOut;
	}
	
	public function knowledge_base(){
		$this->load->model('helpdesk_model');
		
		$solusi = $this->helpdesk_model->knowledge_base()->result();
		
		$data = array(
			'solusi' => $solusi
		);
		$this->session->set_userdata($data);
		//mengecek previlage pegawai, 6 untuk helpdesk
		$data = $this->session->userdata();
		if($data['logged'] == TRUE && $data['level'] == 6){
			$this->load->view('menu/header',$data);
			$this->load->view('menu/helpdesk/knowledge_base');
			$this->load->view('menu/footer');
			$this->load->view('menu/teknisi/plugin');
		}
		else {
			redirect('login/index');
		}
	}
	
}
