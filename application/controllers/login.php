<?php
class Login extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->library('form_validation');
		
			//men-disable back setelah logout
			$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
			$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
			$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
			$this->output->set_header('Pragma: no-cache');
		
	}
 
	public function index() 
	{
		$this->load->view("login");
	}
 
	// public function user()
	// {
		// $data['username'] = $this->input->POST('username', TRUE);
		// $data['password'] = md5($this->input->POST('password', TRUE));
		// $_SESSION['username'] = $this->input->POST('username', TRUE);
		// $this->load->view('user', $data);
	// }
	 public function user() {
        $this->load->model('auth_model');
        
		//authentikasi pegawai/user
		$login = $this->auth_model->login($this->input->post('username'), md5($this->input->post('password')));
 
        if ($login == 1) {
			$aktivasi = $this->auth_model->aktivasi($this->input->post('username'), md5($this->input->post('password')), md5($this->input->post('username')));
			
			if($aktivasi == 1){
				//ambil detail data
				$row = $this->auth_model->data_login($this->input->post('username'), md5($this->input->post('password')));
				
				//update last login update dari user
				$datetime_now = date("Y-m-d H:i:s", strtotime('+5 hours'));
				$last_login = $this->auth_model->last_login($row->nip,$datetime_now);
				
				//daftarkan session
				$data = array(
					'logged' => TRUE,
					'nip' => $row->nip,
					'username' => $row->username,
					'nama_pegawai' => $row->nama_pegawai,
					'level' => $row->jabatan,
					'team' => $row->team,
					
				);
				$this->session->set_userdata($data);
				// var_dump($data);
				//redirect ke halaman sukses
				//7 untuk pegawai teknisi
				if($row->jabatan == 7) {
					redirect('/teknisi/dashboard');
				}else if($row->jabatan == 6) {
					redirect('/helpdesk/dashboard');
				}else if($row->jabatan == 8) {
					redirect('/admin/dashboard');
				}else if($row->jabatan == 4) {
					redirect('/kepala/dashboard');
				}else{
					redirect('/user/index');
				}
			}else{
				// tampilkan pesan error
				echo " <script>
							alert('Gagal Login: Akun Belum aktif');
							history.go(-1);
						</script>";
			}
			
		} else {
			//tampilkan pesan error
			echo " <script>
						alert('Gagal Login: Username anda password anda salah');
						history.go(-1);
					</script>";
		}
    }
	
	public function logout() {
		// $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		// $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		// $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
		// $this->output->set_header('Pragma: no-cache');
		$this->session->sess_destroy();
		$this->load->view('login');
	}
}