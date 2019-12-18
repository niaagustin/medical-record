<?php $this->load->view('admin/sniphets/header')?>
<body>
<?php $this->load->view('admin/sniphets/menu')?>
<!---->

<main>
<div class="container">
<div class="w3-panel w3-round-xlarge" style="background-color:#e3f2fd;">
  <center><h1 >Selamat Datang Di</h1></center>
  <center><h1 class="display-4">Di Sistem </h1></center>
  <center>Hi <?php echo $this->session->userdata('username')?></center>
 </div>
  <div class="slider">
		<figure>
			<div class="">
				<img src="<?php echo base_url()?>assets/images/klinik/1.JPG">
			</div>
 
			
		</figure>
	</div>
  

</div>
</div>
</div>

<!---->
</main>

