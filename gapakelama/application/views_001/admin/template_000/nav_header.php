<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <a class="navbar-brand" href="<?php echo site_url('dashboard/index')?>">Cafe Gapakelama</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="<?php echo site_url('dashboard_admin/index_admin')?>">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">Dashboard</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Daftar Menu">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-area-chart"></i>
          <span class="nav-link-text">DAFTAR MENU</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
          <li>
            <a href="<?php echo site_url('dashboard_admin/daftar_makanan')?>">Makanan</a>
          </li>
          <li>
            <a href="<?php echo site_url('dashboard_admin/daftar_minuman')?>">Minuman</a>
          </li>
        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Daftar Pegawai">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents2" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-id-card-o"></i>
          <span class="nav-link-text">DAFTAR PEGAWAI</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents2">
          <li>
            <a href="<?php echo site_url('dashboard_admin/daftar_kasir')?>">KASIR</a>
          </li>
          <li>
            <a href="<?php echo site_url('dashboard_admin/daftar_pelayan')?>">PELAYAN</a>
            </li>
        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tambah Meja">
        <a class="nav-link" href="<?php echo site_url('dashboard_admin/tambah_meja')?>">
          <i class="fa fa-fw fa-qrcode"></i>
          <span class="nav-link-text">Tambah Meja</span>
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
