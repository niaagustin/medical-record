

        <?php $this->load->view('admin/sniphets/header')?>
<body>
<?php $this->load->view('admin/sniphets/menu')?>
<!---->
<main>
<div class="container">
<div class="text-center">
<div><?php echo $this->session->flashdata('msg'); ?></div>
            <h4 class="card-title">Tambah Data Pasien</h4>
            <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
         --> </div>
            <div style="margin-left:30px" class=" card col-8 my-2">
            <form action="<?php echo base_url()?>index.php/admin/pendaftaran/do_insert1" method="POST">
            <div style="background-color: #e3f2fd;width:1050px" class="row">
    <div  class="col-md">
         
          <div class="form-group">
              <label for="listname">No Registrasi</label>
              <input type="text" class="form-control" value="<?php echo $newid?>" name="reg" id="reg" placeholder="">
            </div>
            <div class="form-group">
              <label for="listname">Nama</label>
              <input type="text" class="form-control" name="nama" id="nama" placeholder="">
            </div>
            <div class="form-group">
            <label for="listname">Dokter</label>
            <select name="dokter" class="form-control">
	                    	<option value="0">-PILIH-</option>
	                    	<?php foreach($dokter as $row):?>
	                    		<option value="<?php echo $row->id_dokter;?>"><?php echo $row->nama;?></option>
	                    	<?php endforeach;?>
	                    </select>
            </div>
            <div class="form-group">
              <label for="datepicker">Umur</label>
              <input  type="text" class="form-control" name="umur" id="umur" placeholder="">
            </div>
            <div class="form-group">
              <label for="datepicker">Pendidikan</label>
              <input  type="text" class="form-control" name="pendidikan" id="umur" placeholder="">
            </div>
            
    </div>
    <div class="col-md">
    <div class="form-group">
            
            <div class="form-group">
              <label for="datepicker">Pekerjaan</label>
              <input  type="text" class="form-control" name="pekerjaan" id="umur" placeholder="">
            </div>
            <div class="form-group">
              <label for="listname">Alamat</label>
              <textarea style="height:117px" name="alamat" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="datepicker">No Telepon</label>
              <input  type="text" class="form-control" name="telepon" id="umur" placeholder="">
            </div>
    </div>
  </div>
            
            <div class="form-group text-center">
             <button style="width:1034px" type="submit" class="btn btn-block btn-primary">Submit</button>
          </div>
        </form>
    </div>
    </div>
    </div>
</main>
<!---->
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.2.3.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
 
<script>
    $(function(){
      // bind change event to select
      $('#dynamic_select').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });
   </script>
<!---->
