<?php
class Teknisi extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->library('form_validation');
	}
 
 
	 public function tugas_baru() {
        $this->load->model('teknisi_model');
        $tugas_baru = $this->teknisi_model->tugas_baru()->result();
		
		// echo "<pre>";
		// var_dump($tugas_baru);
		// print_r($tugas_baru);
		// echo $tugas_baru->result_id;
		// foreach ($tugas_baru->result() as $row)
		// {
		   // echo $row->id_tiket;
		// }
		// echo "</pre>";
		
//          daftarkan session
            $data = array(
                'tugas_baru' => $tugas_baru
            );
            $this->session->set_userdata($data);
			
			// $this->load->view('tampil_tugas_baru', $teknisi);
			redirect('/teknisi/tampil_tugas_baru');
    }
	
	 public function tampil_tugas_baru() {
		$data = $this->session->userdata();
		if($data['logged'] == TRUE){
		$this->load->view('menu/header',$data);
		$this->load->view('menu/teknisi/tugas_baru',$data);
		$this->load->view('menu/footer',$data);
		$this->load->view('menu/teknisi/plugin');
		}
		else {
			redirect('login/index');
		}
    }
	
}