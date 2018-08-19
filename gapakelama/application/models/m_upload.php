<?php
class m_upload extends CI_model{

 function __construct  ()
 {
  parent::__construct();
 }

 function tampil_upload($k){
  $query = $this->db->query("SELECT * FROM list_makanan where id_makanan='$k'");
  foreach($query->result_array() as $ok){
   //header('Content-type: image');
   $image = $ok['image_makanan'];
  }
  //header("Content-type: image/*");
  echo $image;
 }

 function simpan($image_name,$image){
  $query = $this->db->query("INSERT INTO list_makanan (image_makanan) VALUES ('$image_name')");
  return $query;
 }
}
?>
