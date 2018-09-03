<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ADMIN - Food Ordering System Gapakelama</title>

</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">

  <!-- Load Data-->
  <?php
  $jumlahMakanan = $listMakanan->num_rows();
  $ajumlahMakanan = $alistMakanan->num_rows();?>

  <?php include 'template/nav_header.php'; ?>


  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- SUB TITLE-->
      <?php if($this->session->flashdata('result')):?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <?php echo $this->session->flashdata('result'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" >&times;</span>
          </button>
        </div>
      <?php endif;?>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">MENU</li>
        <li class="breadcrumb-item active">Daftar Makanan</li>
      </ol>
      <!-- CONTENT AREA -->
      <div class="row">
        <div class="col-12">
          <h2>Daftar Menu Makanan</h2>
          <div class="py-2">
            <?php
            echo validation_errors("<div class='alert alert-danger'>","</div>"); ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addMakanan"><i class="fa fa-plus-square" style="color:white"></i> Menu Makanan</button>
          </div>
          <!-- Example DataTables Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table" style="color:black"></i> Available
            </div>
            <div class="card-body">
              <!-- available -->
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Id Makanan</th>
                      <th>Nama Makanan</th>
                      <th>Harga</th>
                      <!-- <th>Image</th> -->
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if($jumlahMakanan > 0){
                      $i = 1;
                      // header('Content-type: image/jpeg');
                      foreach ($listMakanan->result() as $key => $row){
                        ?>
                        <tr>
                          <td><?= $i++ ?></td>
                          <td><?= $row->id_makanan ?></td>
                          <td><?= $row->nama_makanan ?></td>
                          <td>Rp.<?= number_format($row->harga_makanan,2,'.',',') ?></td>
                          <td>
                            <button id="viewImage" type="button" class="btn btn-info viewImage" data-toggle="modal" data-target="#viewImages" textcolor="#ffffff" data-filename="<?= $row->image_name ?>"><i class="fa fa-image"></i></button>
                            <button id="editdata" type="button" class="edit-data btn btn-warning editdata" data-toggle="modal" data-id="<?= $row->id_makanan ?>" data-nama="<?= $row->nama_makanan ?>" data-harga="<?= $row->harga_makanan ?>" data-target="#editMakanan" textcolor="#ffffff"><i class="fa fa-edit"></i></button>
                            <button id="delete" type="button" class="btn btn-danger delete" data-id="<?= $row->id_makanan ?>"><i class="fa fa-trash-o"></i></button></a>
                            <button id="status" type="button" class="btn btn-light status" data-id="<?= $row->id_makanan ?>" title="Habis"><i class="fa fa-thumbs-o-down" style="color:black"></i></button></a>

                          </td>
                        </tr>
                        <?php
                      }
                      ?>
                    </tbody>
                  </table>
                  <?php
                }
                ?>
              </div>
            </div>
          </div>
          <!-- </br> -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table" style="color:black"></i> Out of Stock</div>
              <div class="card-body">
                <!-- OoS -->
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Id Makanan</th>
                        <th>Nama Makanan</th>
                        <th>Harga</th>
                        <!-- <th>Image</th> -->
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if($ajumlahMakanan > 0){
                        $i = 1;
                        // header('Content-type: image/jpeg');
                        foreach ($alistMakanan->result() as $key => $row){
                          ?>
                          <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $row->id_makanan ?></td>
                            <td><?= $row->nama_makanan ?></td>
                            <td>Rp.<?= number_format($row->harga_makanan,2,'.',',') ?></td>
                            <td>
                              <button id="viewImage2" type="button" class="btn btn-info viewImage2" data-toggle="modal" data-target="#viewImages" textcolor="#ffffff" data-id="<?= $row->id_makanan ?>"><i class="fa fa-image"></i></button>
                              <button id="editdata2" type="button" class="edit-data btn btn-warning editdata2" data-toggle="modal" data-id="<?= $row->id_makanan ?>" data-nama="<?= $row->nama_makanan ?>" data-harga="<?= $row->harga_makanan ?>" data-target="#editMakanan" textcolor="#ffffff"><i class="fa fa-edit"></i></button>
                              <button id="delete2" type="button" class="btn btn-danger delete2" data-id="<?= $row->id_makanan ?>"><i class="fa fa-trash-o"></i></button></a>
                              <button id="status2" type="button" class="btn btn-light status2" data-id="<?= $row->id_makanan ?>" title="Tersedia"><i class="fa fa-thumbs-o-up" style="color:black"></i></button></a>
                            </td>
                          </tr>
                          <?php
                        }
                        ?>
                      </tbody>
                    </table>
                    <?php
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="viewImages" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <img id="my_image" src="" width="400px" align="center">
          </div>
        </div>
      </div>
    </div>
      <div class="modal fade" id="addMakanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Menu Makanan</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo site_url('dashboard_admin/add_makananDB')?>" enctype="multipart/form-data" method="POST">
                <?php $value="011".date("dyis")?>
                <div class="form-group">
                  <label for="formGroupExampleInput">Id Makanan</label>
                  <input type="text" class="form-control" name="id_makanan" id="id_makanan" value="<?php echo $value?>" readonly>
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Nama Makanan</label>
                  <input type="text" class="form-control" name="nama_makanan" id="nama_makanan" placeholder="Nama Makanan">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Harga Makanan</label>
                  <input type="text" class="form-control" name="harga_makanan" id="harga_makanan" placeholder="Harga Makanan" onkeypress="return isNumber(event)" >
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Image Makanan</label>
                  <input type="file" class="form-control" name="image_makanan" id="image" >
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" type="submit" >Add</a>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="editMakanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Menu Makanan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?php echo site_url('dashboard_admin/update_makananDB')?>" enctype="multipart/form-data" method="POST">
                  <div class="form-group">
                    <label for="formGroupExampleInput">Id Makanan</label>
                    <input type="text" class="form-control" id="up_id_makanan" name="id_up" value="" readonly>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Nama Makanan</label>
                    <input type="text" class="form-control" id="up_nama_makanan" name="name_up" placeholder="Nama Makanan">
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Harga Makanan</label>
                    <input type="text" class="form-control" id="up_harga_makanan" name="harga_up" placeholder="Harga Makanan" onkeypress="return isNumber(event)" >
                  </div>
                  <!-- <div class="form-group">
                  <img>
                  <label for="formGroupExampleInput2">Image Makanan</label>
                  <input type="file" class="form-control" id="image" >
                </div> -->

              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" type="submit" >Ubah</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </body>
      <script>
      function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
          return false;
        }
        return true;
      }

      $(".editdata").click(function() {
        var id = this.dataset.id;
        var nama = this.dataset.nama;
        var harga = this.dataset.harga;
        // console.log(id);
        $("#up_id_makanan").val(id);
        $("#up_nama_makanan").val(nama);
        $("#up_harga_makanan").val(harga);

      })
      $(".editdata2").click(function() {
        var id = this.dataset.id;
        var nama = this.dataset.nama;
        var harga = this.dataset.harga;
        // console.log(id);
        $("#up_id_makanan").val(id);
        $("#up_nama_makanan").val(nama);
        $("#up_harga_makanan").val(harga);

      })

      $(".delete").click(function() {
        var id = this.dataset.id;

        swal({
          title: "Apakah anda yakin ?",
          text: "Data yang dihapus tidak dapat dikembalikan !",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              type: "POST",
              url: "<?= base_url('dashboard_admin'); ?>/delete_makananDB/"+id,
              cache: false,
              // dataType : 'json',
              beforeSend: function(){
                swal({
                  title: "Mohon tunggu!",
                  text: "",
                  icon: "info",
                  showConfirmButton: false,
                  allowEscapeKey: false
                });
              },
              success: function(){
                swal("Data berhasil dihapus!", {
                  icon: "success",
                });
                location.reload();
              },
              error: function (xhr, ajaxOptions, thrownError) {
                swal("Data gagal dihapus!", {
                  icon: "danger",
                });
                // swal.close();
                console.log(xhr.status);
                console.log(thrownError);
              }
            });
          } else {
            swal("Proses dibatalkan !");
          }
        });

      })
      $(".delete2").click(function() {
        var id = this.dataset.id;
        swal({
          title: "Apakah anda yakin ?",
          text: "Data yang dihapus tidak dapat dikembalikan !",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        }).then((willDelete) => {
          if (willDelete) {
            $.ajax({
              type: "POST",
              url: "<?= base_url('dashboard_admin'); ?>/delete_makananDB/"+id,
              cache: false,
              // dataType : 'json',
              beforeSend: function(){
                swal({
                  title: "Mohon tunggu!",
                  text: "",
                  icon: "info",
                  showConfirmButton: false,
                  allowEscapeKey: false
                });
              },
              success: function(){
                swal("Data berhasil dihapus!", {
                  icon: "success",
                });
                location.reload();
              },
              error: function (xhr, ajaxOptions, thrownError) {
                swal("Data gagal dihapus!", {
                  icon: "danger",
                });
                // swal.close();
                console.log(xhr.status);
                console.log(thrownError);
              }
            });
          } else {
            swal("Proses dibatalkan !");
          }
        });
      })

      $(".status2").click(function() {
        var id = this.dataset.id;
        var status = "out";

        swal({
          title: "Apakah anda yakin ?",
          text: "Ubah status makanan menjadi Available !",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              type: "POST",
              url: "<?php echo base_url(); ?>dashboard_admin/set_makananDB/"+id+"/"+status,
              cache: false,
              // dataType : 'json',
              beforeSend: function(){
                swal({
                  title: "Mohon tunggu!",
                  text: "",
                  icon: "info",
                  showConfirmButton: false,
                  allowEscapeKey: false
                });
              },
              success: function(){
                swal("Status berhasil dirubah!", {
                  icon: "success",
                });
                location.reload();
              },
              error: function (xhr, ajaxOptions, thrownError) {
                swal("Status gagal dirubah!", {
                  icon: "danger",
                });
                // swal.close();
                console.log(xhr.status);
                console.log(thrownError);
              }
            });
          } else {
            swal("Proses dibatalkan !");
          }
        });

      })
      $(".status").click(function() {
        var id = this.dataset.id;
        var status = "available";
        swal({
          title: "Apakah anda yakin ?",
          text: "Ubah status makanan menjadi Out of Stock !",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        }).then((willDelete) => {
          if (willDelete) {
            $.ajax({
              type: "POST",
              url: "<?= base_url('dashboard_admin'); ?>/set_makananDB/"+id+"/"+status,
              cache: false,
              // dataType : 'json',
              beforeSend: function(){
                swal({
                  title: "Mohon tunggu!",
                  text: "",
                  icon: "info",
                  showConfirmButton: false,
                  allowEscapeKey: false
                });
              },
              success: function(){
                swal("Status berhasil dirubah!", {
                  icon: "success",
                });
                console.log("success");
                location.reload();
              },
              error: function (xhr, ajaxOptions, thrownError) {
                swal("Status gagal dirubah!", {
                  icon: "danger",
                });
                // swal.close();
                console.log(xhr.status);
                console.log(thrownError);
              }
            });
          } else {
            swal("Proses dibatalkan !");
          }
        });
      })

      $(".viewImage").click(function(){
        var name = this.dataset.filename;
// console.log(name);
        $("#my_image").attr('src','<?= base_url('assets'); ?>/images/makanan/'+name);
      })
      </script>
