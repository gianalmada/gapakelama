<!-- Bootstrap core CSS-->
<link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom fonts for this template-->
<link href="<?= base_url() ?>assets/fonts/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- Custom styles for this template-->
<link href="<?= base_url() ?>assets/css/sb-admin.css" rel="stylesheet">

<!-- <script src="<?= base_url('assets/swal/dist/sweetalert.min.js'); ?>"></script>
<link href="<?= base_url('assets/swal/dist/sweetalert.css'); ?>" rel="stylesheet"> -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>

.fa {
  color:white;
}

</style>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg fixed-top" id="mainNav" style="background:#1766A6; color:white;">
  <a class="navbar-brand" style="color:white" href="<?php echo site_url('dashboard/index')?>"><strong>Cafe</strong> Gapakelama</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="<?php echo site_url('dashboard_admin/index_admin')?>">
          <i class="fa fa-fw fa-dashboard" ></i>
          <span class="nav-link-text" style="color:white">Dashboard</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Daftar Menu">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-area-chart" ></i>
          <span class="nav-link-text" style="color:white">DAFTAR MENU</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
          <li>
            <a href="<?php echo site_url('dashboard_admin/daftar_makanan')?>" style="color:white">Makanan</a>
          </li>
          <li>
            <a href="<?php echo site_url('dashboard_admin/daftar_minuman')?>" style="color:white">Minuman</a>
          </li>
        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Daftar Pegawai">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents2" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-id-card-o" ></i>
          <span class="nav-link-text" style="color:white">DAFTAR PEGAWAI</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents2">
          <li>
            <a href="<?php echo site_url('dashboard_admin/daftar_kasir')?>" style="color:white">KASIR</a>
          </li>
          <li>
            <a href="<?php echo site_url('dashboard_admin/daftar_pelayan')?>" style="color:white">PELAYAN</a>
            </li>
        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tambah Meja">
        <a class="nav-link" href="<?php echo site_url('dashboard_admin/tambah_meja')?>">
          <i class="fa fa-fw fa-qrcode" ></i>
          <span class="nav-link-text" style="color:white">Tambah Meja</span>
        </a>
      </li>
  </ul>
    <ul class="navbar-nav sidenav-toggler">
      <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
          <i class="fa fa-fw fa-angle-left"></i>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-fw fa-sign-out"></i>Logout</a>
      </li>
    </ul>
  </div>
</nav>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url() ?>assets/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?= base_url() ?>assets/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?= base_url() ?>assets/js/sb-admin.min.js"></script>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?php echo site_url('welcome/logout')?>">Logout</a>
      </div>
    </div>
  </div>
</div>
