<?php $this->load->view('admin/sniphets/header')?>
<body>
<?php $this->load->view('admin/sniphets/menu')?>
<?php foreach ($transaksi as $rowtransaksi){
    $reg=$rowtransaksi->reg;
    $nama_pasien=$rowtransaksi->nama_pasien;
    $nama_dokter=$rowtransaksi->nama_dokter;
    $biaya_rawat_jalan=$rowtransaksi->biaya_rawat_jalan;
    $biaya_obat=$rowtransaksi->biaya_obat;
  
    $total=$rowtransaksi->total;
    
}
?>
<!---->
<main>
<div class="container my-5">
       <div class="">
       <h4 class="text-center card-title">Laporan Rawat jalan</h4>
       <div style="margin-left:30px" class=" card col-8 my-2">
       <div style="background-color: #e3f2fd;width:1050px" class="row">
       <div class="col-sm">
       <div class="form-group">
       <label for="listname">No Registrasi</label>
            <input value="<?php echo $reg?>" type="text" class="form-control"/>     
        </div>
        <div class="form-group">
       <label for="listname">Nama Pasien</label>
            <input value="<?php echo $nama_pasien?>" type="text" class="form-control"/>     
        </div>
        <div class="form-group">
       <label for="listname">Nama Dokter</label>
            <input value="<?php echo $nama_dokter?>" type="text" class="form-control"/>     
        </div>
        </div>
        <div class="col-sm">
        <div class="form-group">
       <label for="listname">Biaya Rawat Jalan</label>
            <input value="<?php echo "Rp. ".number_format($biaya_rawat_jalan)?>" type="text" class="form-control"/>     
        </div>
        <div class="form-group">
       <label for="listname">Biaya Obat</label>
            <input value="<?php echo "Rp. ".number_format($biaya_obat)?>" type="text" class="form-control"/>     
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
