<?php $this->load->view('admin/sniphets/header')?>
<body>
<?php $this->load->view('admin/sniphets/menu')?>
<!---->
<main>
<div  class="container my-5">
       <div class="card-body text-center">
       
       <h4 class="card-title">Pilih Jenis Perawatan</h4>
       <div><?php echo $this->session->flashdata('msg'); ?><div>
  </div>
    <div class="card">
    <div style="background-color: #e3f2fd;" class="container p-5">

    <div class="form-group">
    <label>Pilih Bulan</label><br>
    <select id="dynamic_select" name="bulan" class="form-control">
        <option>--PILIH--</option>
        <option value="<?php echo base_url()?>index.php/admin/pendaftaran/daftar">Rawat Inap</option>
        <option value="<?php echo base_url()?>index.php/admin/pendaftaran/daftar1">Rawat Jalan</option>

    </select>
    </div>
        </form>
</div><br>
  
    </div>
  </div>
</main>
<!---->
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