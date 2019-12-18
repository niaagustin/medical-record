<?php $this->load->view('admin/sniphets/header')?>
<body>
<?php $this->load->view('admin/sniphets/menu')?>
<!---->
<main>
<div class="container my-5">
       <div class="card-body text-center">
    <h4 class="card-title">Data Pasien</h4>
    <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
--><div><?php echo $this->session->flashdata('msg'); ?><div>
  </div>
  <nav class="navbar navbar-light bg-light">
  <form method="GET" action="<?php echo base_url()?>index.php/admin/pasien/" class="form-inline">
    <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
    <div class="card">
       
        <table class="table table-hover" style="background-color: #e3f2fd">
            <thead>
              <tr>
                <th scope="col">No Registasi</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Alamat</th>
                <th scope="col">Edit List</th>
              </tr>
            </thead>
            <tbody>
            <?php if (empty($pasien)) { ?>
                <tr> 
                      <td colspan="8">Data Belum Ada</td> 
                </tr> 
            <?php
                } else {
                    if (empty($search)) {
                    $no = 0;
                    foreach ($pasien as $rowpasien) {
                            $no++;
            ?> 
                <tr> 
                    <td><?php echo $rowpasien->reg ?></td>
                    <td><?php echo $rowpasien->nama ?></td>
                    <td><?php echo $rowpasien->umur ?></td>
                    <td><?php echo $rowpasien->alamat ?></td>
                    <td>
                    <a class="btn btn-sm btn-primary" href="<?php echo base_url() ?>index.php/admin/pasien/edit/<?php echo $rowpasien->id_pasien ?>"><i class="fa fa-edit"></i> Edit</a>
                    <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>index.php/admin/pasien/hapus/<?php echo $rowpasien->id_pasien ?>"><i class="fa fa-trash"></i> Delete</a>    
                    </td>
                             </tr>
                <?php }}
                          else {
                            $no = 0;
                                foreach ($pasien as $rowpasien) {
                                
             ?>
             <tr> 
                    <td><?php echo $rowpasien->reg ?></td>
                    <td><?php echo $rowpasien->nama ?></td>
                    <td><?php echo $rowpasien->umur ?></td>
                    <td><?php echo $rowpasien->alamat ?></td>
                    <td>
                    <a class="btn btn-sm btn-primary" href="<?php echo base_url() ?>index.php/admin/pasien/edit/<?php echo $rowpasien->id_pasien ?>"><i class="fa fa-edit"></i> Edit</a>
                    <a class="btn btn-sm btn-danger" href="<?php echo base_url() ?>index.php/admin/pasien/hapus/<?php echo $rowpasien->id_pasien ?>"><i class="fa fa-trash"></i> Delete</a>    
                    </td>
                             </tr>
                             <?php
              }}
              } ?>
            </tbody>
          </table>
    </div>
  
</main>
<!---->

<!---->
