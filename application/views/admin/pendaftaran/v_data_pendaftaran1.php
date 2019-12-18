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
            	<form action="<?php echo base_url()?>index.php/admin/pendaftaran/do_insert" method="POST">
            		<div style="background-color: #e3f2fd;width:1050px" class="row">
            			<div  class="col-md">

            				<div class="form-group">
            					<label for="listname">No Registrasi</label>
            					<select name="reg" id="reg" class="form-control">
            						<option>--PILIH--</option>
            						<?php foreach ($pasien as $rowpasien){ ?>
            							<option value="<?php echo $rowpasien->reg?>"><?php echo $rowpasien->reg?></option>
            						<?php } ?>
            					</select>

            				</div>
            				<div class="form-group">
            					<label>Nama</label>

            					<select name="nama" id="nama" class="form-control">
            						<option>-PILIH-</option>
            						<?php foreach ($pasien as $rowpasien){ ?>
            							<option value="<?php echo $rowpasien->nama?>"><?php echo $rowpasien->nama?></option>
            						<?php } ?>
            					</select>

            				</div>
            				<div class="form-group">
            					<label for="datepicker">Umur</label>
            					<select name="umur" id="umur" class="form-control">	
            					<option value="0">-PILIH-</option>
            				</select>
            			</div>
            			<div class="form-group">
            				<label for="datepicker">Pendidikan</label>
            				<select name="pendidikan" id="pendidikan" class="form-control">	  
            				<option value="0">-PILIH-</option>                
            				  </select>
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
            				<label for="listname">Poli</label>
            				<select name="dokter" class="form-control">
            					<option value="0">-PILIH-</option>
            					<?php foreach($poli as $row):?>
            						<option value="<?php echo $row->id_dokter;?>"><?php echo $row->poli;?></option>
            					<?php endforeach;?>
            				</select>
            			</div>

            		</div>
            		<div class="col-md">
            			<div class="form-group">
            				<label for="datepicker">Pekerjaan</label>
            				<select name="pekerjaan" id="pekerjaan" class="form-control">
            				<option value="0">-PILIH-</option>
            			</select>
            		</div>
            		<div class="form-group">
            			<label for="listname">Alamat</label>
            			<select name="alamat" id="alamat" class="form-control">
            				<option value="0">-PILIH-</option>

            			</select>
            		</div>
            		<div class="form-group">
            			<label for="listname">Telepon</label>

            			<select name="telepon" id="telepon" class="form-control">
            			<option value="0">-PILIH-</option>	                    	
            		</select>
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

<!---->
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.2.3.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#reg').change(function(){
			var reg=$(this).val();
			$.ajax({
				url : "<?php echo base_url();?>index.php/admin/pendaftaran/tes5",
				method : "POST",
				data : {reg: reg},
				async : false,
				dataType : 'json',
				success: function(data){
					var html = '';
					var i;
					for(i=0; i<data.length; i++){
						html += '<option>'+data[i].nama+'</option>';
					}
					$('#nama').html(html);

					var alamat = '';
					var i1;
					for(i1=0; i1<data.length; i1++){
						alamat += '<option>'+data[i1].alamat+'</option>';
					}
					$('#alamat').html(alamat);

					var umur = '';
					var i12;
					for(i12=0; i12<data.length; i12++){
						umur += '<option>'+data[i12].umur+'</option>';
					}
					$('#umur').html(umur)


					var pendidikan = '';
					var i123;
					for(i123=0; i123<data.length; i123++){
						pendidikan += '<option>'+data[i123].pendidikan+'</option>';
					}
					$('#pendidikan').html(pendidikan)

					var suami = '';
					var i1234;
					for(i1234=0; i1234<data.length; i1234++){
						suami += '<option>'+data[i1234].suami+'</option>';
					}
					$('#suami').html(suami)
					var pekerjaan = '';
					var i12345;
					for(i12345=0; i12345<data.length; i12345++){
						pekerjaan += '<option>'+data[i12345].pekerjaan+'</option>';
					}
					$('#pekerjaan').html(pekerjaan)
					var alamat = '';
					var i123456;
					for(i123456=0; i123456<data.length; i123456++){
						alamat += '<option>'+data[i123456].alamat+'</option>';
					}
					$('#alamat').html(alamat)

					var telepon = '';
					var i1231;
					for(i1231=0; i1231<data.length; i1231++){
						telepon += '<option>'+data[i1231].telepon+'</option>';
					}
					$('#telepon').html(telepon)

				}
			});
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#nama').change(function(){
			var nama=$(this).val();
			$.ajax({
				url : "<?php echo base_url();?>index.php/admin/pendaftaran/tes6",
				method : "POST",
				data : {nama: nama},
				async : false,
				dataType : 'json',
				success: function(data){
					var html = '';
					var i;
					for(i=0; i<data.length; i++){
						html += '<option>'+data[i].reg+'</option>';
					}
					$('#reg').html(html);

					var alamat = '';
					var i1;
					for(i1=0; i1<data.length; i1++){
						alamat += '<option>'+data[i1].alamat+'</option>';
					}
					$('#alamat').html(alamat);

					var umur = '';
					var i12;
					for(i12=0; i12<data.length; i12++){
						umur += '<option>'+data[i12].umur+'</option>';
					}
					$('#umur').html(umur)


					var pendidikan = '';
					var i123;
					for(i123=0; i123<data.length; i123++){
						pendidikan += '<option>'+data[i123].pendidikan+'</option>';
					}
					$('#pendidikan').html(pendidikan)

					var suami = '';
					var i1234;
					for(i1234=0; i1234<data.length; i1234++){
						suami += '<option>'+data[i1234].suami+'</option>';
					}
					$('#suami').html(suami)
					var pekerjaan = '';
					var i12345;
					for(i12345=0; i12345<data.length; i12345++){
						pekerjaan += '<option>'+data[i12345].pekerjaan+'</option>';
					}
					$('#pekerjaan').html(pekerjaan)
					var alamat = '';
					var i123456;
					for(i123456=0; i123456<data.length; i123456++){
						alamat += '<option>'+data[i123456].alamat+'</option>';
					}
					$('#alamat').html(alamat)

					var telepon = '';
					var i1231;
					for(i1231=0; i1231<data.length; i1231++){
						telepon += '<option>'+data[i1231].telepon+'</option>';
					}
					$('#telepon').html(telepon)

				}
			});
		});
	});
</script>