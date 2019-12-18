<?php $this->load->view('admin/sniphets/header')?>
<body>
<?php $this->load->view('admin/sniphets/menu')?>
<?php foreach ($transaksi as $rowtransaksi){
    $reg=$rowtransaksi->reg;
    $nama_kamar=$rowtransaksi->nama_kamar;
    $nama_pasien=$rowtransaksi->nama_pasien;
    $nama_dokter=$rowtransaksi->nama_dokter;
    $nama_kamar=$rowtransaksi->nama_kamar;
    $biaya_rawat_inap=$rowtransaksi->biaya_rawat_inap;
    $biaya_obat=$rowtransaksi->biaya_obat;
    $bhp=$rowtransaksi->bhp;
    $dpjp=$rowtransaksi->dpjp;
    $konsultasi=$rowtransaksi->konsultasi;
    $visite=$rowtransaksi->visite;
    $total=$rowtransaksi->total;
    $tanggal=$rowtransaksi->tanggal;
    
}
?>
<!---->
<main>
<div class="container my-5">
       <div class="">
       <h4 class="text-center card-title">Laporan Rawat Inap</h4>
       <div style="margin-left:30px" class=" col-8 my-2">
       <div style="background-color: #e3f2fd;width:1050px" class="row">
       <div class="col-sm">
       <div class="form-group">
       <label for="listname">No Registrasi</label>
            <input value="<?php echo $reg?>" type="text" class="form-control"/>     
        </div>
        <div class="form-group">
       <label for="listname">Tanggal</label>
            <input value="<?php echo $tanggal?>" type="text" class="form-control"/>     
        </div>
        <div class="form-group">
       <label for="listname">Nama Pasien</label>
            <input value="<?php echo $nama_pasien?>" type="text" class="form-control"/>     
        </div>
        <div class="form-group">
       <label for="listname">Nama Dokter</label>
            <input value="<?php echo $nama_dokter?>" type="text" class="form-control"/>     
        </div>
        <div class="form-group">
       <label for="listname">Nama Kamar</label>
            <input value="<?php echo $nama_kamar?>" type="text" class="form-control"/>     
        </div>
        <div class="form-group">
       <label for="listname">Biaya Rawat Inap</label>
            <input value="<?php echo "Rp. ".number_format($biaya_rawat_inap)?>" type="text" class="form-control"/>     
        </div>
        </div>
        <div class="col-sm">
        <div class="form-group">
       <label for="listname">Biaya Obat</label>
            <input value="<?php echo "Rp. ".number_format($biaya_obat)?>" type="text" class="form-control"/>     
        </div>
        <div class="form-group">
       <label for="listname">BHP</label>
            <input value="<?php echo "Rp. ".number_format($bhp)?>" type="text" class="form-control"/>     
        </div>
        <div class="form-group">
       <label for="listname">DPJP</label>
            <input value="<?php echo "Rp. ".number_format($dpjp)?>" type="text" class="form-control"/>     
        </div>
        <div class="form-group">
       <label for="listname">Konsultasi</label>
            <input value="<?php echo "Rp. ".number_format($konsultasi)?>" type="text" class="form-control"/>     
        </div>
        <div class="form-group">
       <label for="listname">Visite</label>
            <input value="<?php echo "Rp. ".number_format($visite)?>" type="text" class="form-control"/>     
        </div>
        <div class="form-group">
       <label for="listname">Total Biaya</label>
            <input value="<?php echo "Rp. ".number_format($total)?>" type="text" class="form-control"/>     
        </div>
    </div>
  </div>
  </div>
  </div>
</main>
<!---->

<!---->
