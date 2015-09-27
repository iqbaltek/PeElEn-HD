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
        $login = $this->auth_model->login($this->input->post('username'), md5($this->input->post('password')));
 
        if ($login == 1) {
//          ambil detail data
            $row = $this->auth_model->data_login($this->input->post('username'), md5($this->input->post('password')));
 
//          daftarkan session
            $data = array(
                'logged' => TRUE,
                'username' => $row->username,
                'level' => $row->level
            );
            $this->session->set_userdata($data);
			// var_dump($data);
//            redirect ke halaman sukses
            // $this->load->view('user', $data);
			$this->load->view('menu/header',$data);
			$this->load->view('menu/tes_login',$data);
			$this->load->view('menu/footer',$data);
        } else {
//            tampilkan pesan error
            $error = 'username / password salah';
            $this->index($error);
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