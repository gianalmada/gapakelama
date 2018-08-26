<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Admin extends CI_Controller {

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
  public function __construct(){
    parent::__construct();
    if($this->session->userdata('status') != "login"){
      redirect("welcome/index");
    }
    $this->load->library('form_validation');

  }

  public function index_admin()
  {
    $this->load->view('admin/index_admin');
  }

  function daftar_makanan()
  {

    $data['listMakanan'] = $this->db->query("SELECT * FROM list_makanan WHERE status='1'");
    $data['alistMakanan'] = $this->db->query("SELECT * FROM list_makanan WHERE status='0'");
    // log_r($this->db->last_query());
    $this->load->view('admin/daftar_makanan',$data);
  }

  public function daftar_minuman()
  {
    $this->load->view('admin/daftar_minuman');
  }

  public function tambah_meja()
  {
    $this->load->view('admin/tambah_meja');
  }

  function add_makananDB(){
    $id = $this->input->post("id_makanan");
    $name = $this->input->post("nama_makanan");
    $harga = $this->input->post("harga_makanan");
    $img = $_FILES['image_makanan'];
    $img_name = $img['name'];
    // log_r($img_name);

    $this->load->library('upload');
    $config['upload_path'] = './assets/images/makanan/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
    $config['max_size'] = '2048';
    $config['max_width']  = '1288';
    $config['max_height']  = '768';

    $this->upload->initialize($config);

    if($id != null && $this->upload->do_upload("image_makanan")){
      $query = $this->db->query("INSERT INTO list_makanan (id_makanan,nama_makanan,harga_makanan,image_name) VALUES('$id','$name','$harga','$img_name')");
    }

    if($query){
      $this->session->set_flashdata('result', 'Data berhasil di tambahkan!');
      redirect('dashboard_admin/daftar_makanan');
    } else {
      $this->session->set_flashdata('result', 'Data gagal di tambahkan!');
      redirect('dashboard_admin/daftar_makanan');
    }
  }

  function update_makananDB(){
    $id = $this->input->post("id_up");
    $name = $this->input->post("name_up");
    $harga = $this->input->post("harga_up");

    if($id != null){
      $query = $this->db->query("UPDATE list_makanan SET nama_makanan = '$name',harga_makanan = '$harga' WHERE id_makanan='$id'");
    }

    if($query){
      $this->session->set_flashdata('result', 'Data berhasil di ubah!');
      redirect('dashboard_admin/daftar_makanan');
    } else {
      $this->session->set_flashdata('result', 'Data gagal di ubah!');
      redirect('dashboard_admin/daftar_makanan');
    }
  }

    function delete_makananDB($id=null){
      // $id = $this->input->post("id_up");

      if($id != null){
        $query = $this->db->query("DELETE FROM list_makanan WHERE id_makanan='$id'");
      }

    // log_r($_POST);
  }

}
