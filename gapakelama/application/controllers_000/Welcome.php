<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
    function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    
    public function index()
	{
		$this->load->view('login.html');
	}
    
    public function admin()
    {
        $this->load->view('login_admin.html');
    }
    
    public function cek_login_admin(){
        $this->load->helper('url');
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$query = $this->db->query("select * from akun_kasir where psswd_kasir='$password' AND usrname_kasir='$username'");
		$rows = $query->num_rows();

		if($rows == 1){
			$query = $this->db->query("select nama_kasir from akun_kasir where usrname_kasir='$username'");
			$result = $query->row();
            $data_session = array (
                'username' => $result->nama_nama_kasir,
                'status' => "login");
            
			$this->session->set_userdata($data_session);
			redirect('dashboard_admin/index_admin');
        }
		else {
            echo "<script type='text/javascript'>
                   alert ('Maaf Username Dan Password Anda Salah !');
                  </script>";
            $this->load->view('login_admin.html');
        }
    }
    
    public function cek_login_kasir(){
        $this->load->helper('url');
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$query = $this->db->query("select * from akun_kasir where psswd_kasir='$password' AND usrname_kasir='$username'");
		$rows = $query->num_rows();

		if($rows == 1){
			$query = $this->db->query("select nama_kasir from akun_kasir where usrname_kasir='$username'");
			$result = $query->row();
            $data_session = array (
                'username' => $result->nama_nama_kasir,
                'status' => "login");
            
			$this->session->set_userdata($data_session);
			redirect('dashboard/index');
        }
		else {
            echo "<script type='text/javascript'>
                   alert ('Maaf Username Dan Password Anda Salah !');
                  </script>";
            $this->load->view('login.html');
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('welcome/index');
    }

    public function forgot()
    {
        $this->load->view('forgot-password.html');
    }

    public function register()
    {
        $this->load->view('register.html');
    }

    public function dashboard()
    {
        $this->load->view('index.html');
    }
}
