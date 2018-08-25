<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class upload_blob extends MX_Controller{

 public function __construct()
 {
  parent::__construct();
  $this->load->model('m_upload');
 }

 function gambar(){
  $this->load->view('upload');
 }

 function tampil_gambar($k){
  $this->load->model('m_upload');
  $this->m_upload->tampil_upload($k);
  //echo "galih";
 }

 function simpan(){
  $this->load->library('upload');
  $file = $_FILES['file']['tmp_name'];
  $image_name = mysql_real_escape_string($_FILES['file']['name']);
  $image = mysql_real_escape_string(file_get_contents($file));
  //echo $image;
  $this->load->model('m_upload');
  $this->m_upload->simpan($image_name,$image);
 }
}
?>
