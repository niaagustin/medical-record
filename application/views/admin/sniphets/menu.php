<?php if  ($this->session->userdata('username')=='operator') {

?>
<header>
  <div class="container p-5 ">
    <nav style="background-color: #e3f2fd;" class="navbar navbar-expand-lg navbar-light ">
      <a class="navbar-brand" href="#">RS Budi Asih</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class=bg-light"collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/admin/dashboard"><i class="fa fa-globe"></i> Beranda <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/admin/pendaftaran/daftar"><i class="fa fa-money"></i> Pendaftaran<span class="sr-only">(current)</span></a>
         
        
        <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/login/logout"><i class="fa fa-file-sign-out"></i>Logout<span class="sr-only">(current)</span></a>
      
      </div>
    </nav>
  </div>
</header>
<?php }?>

<?php if  ($this->session->userdata('username')=='admin') {

?>
<header>
  <div class="container p-5 ">
    <nav style="background-color: #e3f2fd;" class="navbar navbar-expand-lg navbar-light ">
      <a class="navbar-brand" href="#">RS Budi Asih</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class=bg-light"collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/admin/dashboard"><i class="fa fa-globe"></i> Beranda <span class="sr-only">(current)</span></a>
               <div class="dropdown">
       
        
        </div>
        <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/admin/medrek/"><i class="fa fa-money"></i> Data Medical Reacord<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/admin/laporaninap/"><i class="fa fa-money"></i> Laporan<span class="sr-only">(current)</span></a>
        
        
        <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/login/logout"><i class="fa fa-file-sign-out"></i>Logout<span class="sr-only">(current)</span></a>
      
      </div>
    </nav>
  </div>
</header>
<?php }?>


<?php if  ($this->session->userdata('username')=='office') {

?>
<header>
  <div class="container p-5 ">
    <nav style="background-color: #e3f2fd;" class="navbar navbar-expand-lg navbar-light ">
      <a class="navbar-brand" href="#">RS Budi Asih</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class=bg-light"collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/admin/dashboard"><i class="fa fa-globe"></i> Beranda <span class="sr-only">(current)</span></a>
 
        <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/admin/laporaninap/"><i class="fa fa-money"></i> Laporan<span class="sr-only">(current)</span></a>
        
        
        <a class="nav-item nav-link active" href="<?php echo base_url()?>index.php/login/logout"><i class="fa fa-file-sign-out"></i>Logout<span class="sr-only">(current)</span></a>
      
      </div>
    </nav>
  </div>
</header>
<?php }?>