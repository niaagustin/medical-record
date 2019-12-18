<header>
  <div class="container p-5 ">
    <nav style="background-color: #e3f2fd;" class="navbar navbar-expand-lg navbar-light ">
      <a class="navbar-brand" href="#">Delima Waluya</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class=bg-light"collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/admin/dashboard"><i class="fa fa-globe"></i> Beranda <span class="sr-only">(current)</span></a>
          <div class="dropdown">
        <a class="nav-item nav-link dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-database"></i> Data
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="<?php echo base_url()?>index.php/admin/pasien"><i class="fa fa-database"></i> Data Pasien</a>
            <a class="dropdown-item" href="<?php echo base_url()?>index.php/admin/obat"><i class="fa fa-database"></i> Data Obat</a>
            <a class="dropdown-item" href="<?php echo base_url()?>index.php/admin/kamar"><i class="fa fa-database"></i> Data Kamar</a>
            <a class="dropdown-item" href="<?php echo base_url()?>index.php/admin/inap"><i class="fa fa-database"></i> Data Rawat Inap</a>
            <a class="dropdown-item" href="<?php echo base_url()?>index.php/admin/jalan"><i class="fa fa-database"></i> Data Rawat Jalan</a>
            <a class="dropdown-item" href="<?php echo base_url()?>index.php/admin/dokter"><i class="fa fa-database"></i> Data Dokter</a>
           </div>
        </div>
        <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/admin/transaksiobat"><i class="fa fa-money"></i> Transaksi Obat<span class="sr-only">(current)</span></a>
        <div class="dropdown">
        <a class="nav-item nav-link dropdown-toggle"  id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-money"></i> Transaksi
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <a class="dropdown-item"  href="<?php echo base_url()?>index.php/admin/transaksiinap"><i class="fa fa-money"></i> Rawat Inap</a>
            <a class="dropdown-item"  href="<?php echo base_url()?>index.php/admin/transaksijalan"><i class="fa fa-money"></i> Rawat Jalan</a>
        </div>
        </div>
        <div class="dropdown">
        <a class="nav-item nav-link dropdown-toggle"  id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-file-text-o"></i> Laporan
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <a class="dropdown-item"  href="<?php echo base_url()?>index.php/admin/laporaninap"><i class="fa fa-file-text-o"></i> Laporan Rawat Inap</a>
            <a class="dropdown-item"  href="<?php echo base_url()?>index.php/admin/laporanjalan"><i class="fa fa-file-text-o"></i> Laporan Rawat Jalan</a>
        </div>
        </div>
        <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/login/logout"><i class="fa fa-file-sign-out"></i>Logout<span class="sr-only">(current)</span></a>
      
      </div>
    </nav>
  </div>
</header>