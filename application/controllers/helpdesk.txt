<?php
class Teknisi extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		// $this->load->helper("url");
		$this->load->library('session');
		$this->load->library('form_validation');
	}
 
 
	 public function tugas_baru() {
		$nip = $this->session->userdata('nip');
        $this->load->model('teknisi_model');
        $tugas_baru = $this->teknisi_model->tugas_baru($nip)->result();
		
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
			$data = $this->session->userdata();
			if($data['logged'] == TRUE){
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
		
		$sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;" class="inner-table">';
		$sOut .= '<tr><td>Customer</td><td>:</td><td>'.$getData->nama_customer.'</td></tr>';
		$sOut .= '<tr><td>Status Tiket</td><td>:</td><td>'.$getData->nama_status.'</td></tr>';
		$sOut .= '<tr><td>Deskripsi Tiket</td><td>:</td><td>'.$getData->deskripsi_masalah.'</td></tr>';
		$sOut .= '</table>';
		
		echo $sOut;
	}
}