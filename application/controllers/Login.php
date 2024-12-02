<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index() {
		$data['title'] = 'Halaman Login';
		$this->load->view('admin/login', $data);
	}

	public function auth() {
	    $username     = $this->input->post('username',TRUE);
	    $password     = md5($this->input->post('password',TRUE));
	    $periksa = $this->Login_model->periksa_masuk($username,$password);
	    if($periksa->num_rows() > 0) {
	        $data = $periksa->row_array();
	        $nama = $data['nama'];
	        $username = $data['username'];
	        $password = $data['password'];
	        $level = $data['level'];
	    $data_session  = array(
	        'nama'			=>	$nama,
	        'username'		=>	$username,
	        'password'		=>	$password,
	        'level'		=>	$level,
	        'status'		=>	"login"
	    );
	    $this->session->set_userdata($data_session);
	    if($this->session->userdata('level') == 1) {
		    redirect('admin');
	    }elseif($this->session->userdata('level') == 2) {
	    	redirect('dokter');
	    }elseif($this->session->userdata('level') == 3) {
	    	redirect('apoteker');
	    }else {
	    	redirect('admin');
	    }
	    }else{
	        echo $this->session->set_flashdata('pesan','Username atau Password Anda salah !');
	        redirect('login');
	    }
	}
	
	public function logout(){
	    $this->session->sess_destroy();
	    redirect('login');
	}
}