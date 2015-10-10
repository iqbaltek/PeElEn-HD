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
 
 
	 public function tugas_baru() {
		//ambil data NIP dari Session
		$nip = $this->session->userdata('nip');
        
		$this->load->model('teknisi_model');
        
		//memanggil model untuk mendapatkan data tiket yang ditugaskan padanya
		$tugas_baru = $this->teknisi_model->tugas_baru($nip)->result();
		
		//memanggil model untuk mendapatkan semua attachment sesuai dengan id_tiket
		
		// echo "<pre>";
		// var_dump($tugas_baru);
		// print_r($tugas_baru);
		// echo $tugas_baru->result_id;
		// foreach ($tugas_baru->result() as $row)
		// {
		   // echo $row->id_tiket;
		// }
		// echo "</pre>";
		
			//daftarkan session
            $data = array(
                'tugas_baru' => $tugas_baru
            );
            $this->session->set_userdata($data);
			
			// $this->load->view('tampil_tugas_baru', $teknisi);
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
	
	public function getData(){
		$id_tiket = $this->input->post('id_tiket');
		// $id_tiket = 'TIK-1';
		$this->load->model('teknisi_model');
        $getData = $this->teknisi_model->getData($id_tiket)->row();
		$getAttachment = $this->teknisi_model->getAttachment($id_tiket)->row();
		
		$sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;" class="inner-table">';
		$sOut .= '<tr><td>Customer</td><td>:</td><td>'.$getData->nama_customer.'</td></tr>';
		$sOut .= '<tr><td>Status Tiket</td><td>:</td><td>'.$getData->nama_status.'</td></tr>';
		$sOut .= '<tr><td>Deskripsi Tiket</td><td>:</td><td>'.$getData->deskripsi_masalah.'</td></tr>';
		if($getAttachment != NULL){
			$sOut .= '<tr><td>Attachment</td><td>:</td><td>'.$getAttachment->file_name.'</td></tr>';
		}
		$sOut .= '</table>';
		
		echo $sOut;
	}
	
	public function update_tiket(){		
		// $id_tiket = $this->input->post('id_tiket');
		// Echo $id_tiket;
		$tanggal_mulai = date("Y-m-d H:i:s", strtotime('+5 hours'));
		
		$this->load->model('teknisi_model');
		$this->teknisi_model->update_tiket($this->input->post('id_tiket'), $tanggal_mulai);
		
		
		// var_dump($update);
		$data = $this->session->userdata();
		if($data['logged'] == TRUE){
			redirect('teknisi/tugas_baru');
		}
		else {
			redirect('login/index');
		}
		
	}
	
	public function update_selesai(){		
		// $id_tiket = $this->input->post('id_tiket');
		// Echo $id_tiket;
		// $tanggal_selesai = date("Y-m-d H:i:s", strtotime('+5 hours'));
		// $tgl_mulai = date('Y-m-d H:i:s',strtotime($this->input->post('date_open')))
		// $tanggal_selesai = date("2015-10-5 12:12:12");
		// $tgl_mulai = date("2015-10-5 12:12:12");
		// $durasi = date_diff($tgl_mulai,$tanggal_selesai);
		// var_dump($durasi);
		
		echo (date_diff('2010-3-9', '2011-4-10')." days <br \>");
		
		$this->load->model('teknisi_model');
		// $this->teknisi_model->update_selesai($this->input->post('id_tiket'), $tanggal_selesai, $durasi);
		
		
		// var_dump($update);
		$data = $this->session->userdata();
		if($data['logged'] == TRUE){
			// redirect('teknisi/tugas_baru');
		}
		else {
			redirect('login/index');
		}
		
	}
	
	public function tugas_selesai(){
		$nip = $this->session->userdata('nip');
        
		$this->load->model('teknisi_model');
        
		//memanggil model untuk mendapatkan data tiket yang ditugaskan padanya
		$tugas_baru = $this->teknisi_model->lapor_selesai($nip)->result();
		
		
			//daftarkan session
            $data = array(
                'tugas_baru' => $tugas_baru
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
	
	
}