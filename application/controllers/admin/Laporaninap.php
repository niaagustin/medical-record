<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporaninap extends CI_Controller {
  
    public function index(){
     # if ($this->session->userdata('level') == "Admin")
	#	{
        //$data['data_obat']=$this->db->query('select * from data_obat where stok between 1 and 10');
       // $data['data_obat']=$data['data_obat']->num_rows();
    //$data['pasien'] = $this->db->query("select id_pasien, data_pasien.reg, data_pasien.nama as nama_pasien, data_dokter.nama as nama_dokter, data_kamar.nama as nama_kamar, data_rawat_inap.biaya as biaya_rawat_inap, data_pasien_obat.biaya as biaya_obat, bhp, dpjp, konsultasi, visite, total from data_pasien join pasien on data_pasien.reg=pasien.reg join data_dokter on data_dokter.id_dokter=pasien.id_dokter join data_kamar on data_kamar.id_kamar=pasien.id_kamar join data_rawat_inap on data_rawat_inap.id_rawat_inap=pasien.id_rawat_inap join data_pasien_obat on data_pasien_obat.id_pasien_obat=pasien.id_pasien_obat")->result();
		$this->load->view('admin/laporan/v_data_laporaninap');
   # }
  #else {
   #   		die("<script>alert('Silahkan Login Admin');window.location='../dashboard'</script>");
    #  	}	
    
      }

    public function detail($id) {
        $data['data_obat']=$this->db->query('select * from data_obat where stok between 1 and 10');
        $data['data_obat']=$data['data_obat']->num_rows();
        $data['pasien'] = $this->db->query("select id_pasien, tanggal, data_pasien.reg, data_pasien.nama as nama_pasien, data_dokter.nama as nama_dokter, data_kamar.nama as nama_kamar, data_rawat_inap.biaya as biaya_rawat_inap, data_pasien_obat.biaya as biaya_obat, bhp, dpjp, konsultasi, visite, total from data_pasien join pasien on data_pasien.reg=pasien.reg join data_dokter on data_dokter.id_dokter=pasien.id_dokter join data_kamar on data_kamar.id_kamar=pasien.id_kamar join data_rawat_inap on data_rawat_inap.id_rawat_inap=pasien.id_rawat_inap join data_pasien_obat on data_pasien_obat.id_pasien_obat=pasien.id_pasien_obat where id_pasien='$id'")->result();
        $this->load->view('admin/laporan/v_data_laporaninap_detail',$data);
    }  
    public function do_insert(){
        $nama=$this->input->post('nama');
        $telepon=$this->input->post('telepon');;

        $data = array(
            'nama' => $nama,
            'telepon' => $telepon,
        );
    
    if (!empty($nama)&&!empty($telepon))
         {
        $this->m_crud->insert_data($data,'data_pasien');
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                        <h4>Berhasil Insert Data</h4>
                    </div>');  
        redirect('admin/pasien');
    }
    
    else {
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-danger">
                        <h4>Semua Nilai Harus Diisi</h4>
                    </div>');  
        redirect('admin/pasien');
    }

    }

    function hapus($id){
        $where = array('id_pasien' => $id);
        $this->m_crud->hapus_data($where,'pasien');
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                        <h4>Berhasil Hapus Data</h4>
                    </div>');  
        redirect('admin/laporaninap');
      }

      public function cetak() {
        
        $bulan=$this->input->post('bulan');
        //$pasien = $this->db->query("select  tanggal, id_pasien, data_pasien.reg, data_pasien.nama as nama_pasien, data_dokter.nama as nama_dokter, data_kamar.nama as nama_kamar, data_rawat_inap.biaya as biaya_rawat_inap, data_pasien_obat.biaya as biaya_obat, bhp, dpjp, konsultasi, visite, total from data_pasien join pasien on data_pasien.reg=pasien.reg join data_dokter on data_dokter.id_dokter=pasien.id_dokter join data_kamar on data_kamar.id_kamar=pasien.id_kamar join data_rawat_inap on data_rawat_inap.id_rawat_inap=pasien.id_rawat_inap join data_pasien_obat on data_pasien_obat.id_pasien_obat=pasien.id_pasien_obat where MONTH(tanggal)='$bulan'")->result();
        //$pasien1 = $this->db->query("select  tanggal, id_pasien, data_pasien.reg, data_pasien.nama as nama_pasien, data_dokter.nama as nama_dokter, data_kamar.nama as nama_kamar, data_rawat_inap.biaya as biaya_rawat_inap, data_pasien_obat.biaya as biaya_obat, bhp, dpjp, konsultasi, visite, total from data_pasien join pasien on data_pasien.reg=pasien.reg join data_dokter on data_dokter.id_dokter=pasien.id_dokter join data_kamar on data_kamar.id_kamar=pasien.id_kamar join data_rawat_inap on data_rawat_inap.id_rawat_inap=pasien.id_rawat_inap join data_pasien_obat on data_pasien_obat.id_pasien_obat=pasien.id_pasien_obat where MONTH(tanggal)='$bulan'");
       
       
 
        $pdf = new FPDF('L','mm',array(250,297));
        $pdf->AddPage();
        //$pdf->Image('https://lh3.googleusercontent.com/-1YlxDD41PEk/XJyTgopBl6I/AAAAAAAAC5o/A1Mg_gj4iIMOaO4WgzJ39Yqnd12cUKbPQCLcBGAs/h120/Screenshot%2Bfrom%2B2019-03-28%2B16.26.40.png',20,5,40,20);
        $pdf->SetX(120);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(70,10,'RUMAH SAKIT BUDI ASIH',0,0,'C');
        $pdf->Ln(4);
        $pdf->SetX(103);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(20,10,'Jln. Raya Serang - Cibarusah, Serang, Cikarang Selatan, Bekasi, Jawa Barat');
        $pdf->SetFont('Arial','',8);
        $pdf->Ln(4);
        $pdf->SetX(125);
        $pdf->Cell(100,10,'Telp 0267 - 4041273');
        $pdf->SetFont('Arial','B',8);
        $pdf->Ln(5);
        $pdf->SetLineWidth(0);
        $pdf->Line(0,25,300,25);
        $pdf->SetX(120);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(40,10,'Laporan Data Pasien',0,0,'C');
        $pdf->Ln(4);
        $pdf->SetX(120);
        $pdf->SetFont('Arial','',8);
       // $pdf->Cell(40,10,'Bulan : '.$bulan,0,0,'C');
        $pdf->Ln(4);
         //Table
         $pdf->Ln(8);
         $pdf->SetFont('Arial','',8);
         $pdf->Cell(10,6,'No',1,0);
         $pdf->Cell(30,6,'No Reg',1,0);
         $pdf->Cell(30,6,'Nama',1,0);
         $pdf->Cell(20,6,'Alamat',1,0);
         $pdf->Cell(20,6,'Telepon',1,0);
         $pdf->Cell(20,6,'Nama Kamar',1,0);
         $pdf->Cell(20,6,'Nama Dokter',1,0);
         $pdf->Cell(30,6,'Tipe Perawatan',1,0);
         $pdf->Cell(20,6,'Pendidikan',1,1);
         //Isi Table
         //$data_obat=$this->db->query("select * from data_obat where id_obat='$obat'")->result();
         $pasien=$this->db->query("SELECT *, dokter.nama as nama_dokter, data_kamar.nama as nama_kamar from medrek JOIN dokter on medrek.id_dokter=dokter.id_dokter join data_kamar on medrek.id_kamar=data_kamar.id_kamar")->result();

         $no=1;
         foreach ($pasien as $rowpasien) {
           $pdf->Cell(10,6,$no++,1,0);
           $pdf->Cell(30,6,$rowpasien->reg,1,0);
           $pdf->Cell(30,6,$rowpasien->nama,1,0);
           $pdf->Cell(20,6,$rowpasien->alamat,1,0);
           $pdf->Cell(20,6,$rowpasien->telepon,1,0);
           $pdf->Cell(20,6,$rowpasien->nama_kamar,1,0);
           $pdf->Cell(20,6,$rowpasien->nama_dokter,1,0);
           $pdf->Cell(30,6,$rowpasien->type_rawat,1,0);
           $pdf->Cell(20,6,$rowpasien->pendidikan,1,1);
          
         }
       
        $pdf->Output();
      
    }
    
    public function cetak1() {
        
        $bulan=$this->input->post('bulan');
        //$pasien = $this->db->query("select  tanggal, id_pasien, data_pasien.reg, data_pasien.nama as nama_pasien, data_dokter.nama as nama_dokter, data_kamar.nama as nama_kamar, data_rawat_inap.biaya as biaya_rawat_inap, data_pasien_obat.biaya as biaya_obat, bhp, dpjp, konsultasi, visite, total from data_pasien join pasien on data_pasien.reg=pasien.reg join data_dokter on data_dokter.id_dokter=pasien.id_dokter join data_kamar on data_kamar.id_kamar=pasien.id_kamar join data_rawat_inap on data_rawat_inap.id_rawat_inap=pasien.id_rawat_inap join data_pasien_obat on data_pasien_obat.id_pasien_obat=pasien.id_pasien_obat where MONTH(tanggal)='$bulan'")->result();
        //$pasien1 = $this->db->query("select  tanggal, id_pasien, data_pasien.reg, data_pasien.nama as nama_pasien, data_dokter.nama as nama_dokter, data_kamar.nama as nama_kamar, data_rawat_inap.biaya as biaya_rawat_inap, data_pasien_obat.biaya as biaya_obat, bhp, dpjp, konsultasi, visite, total from data_pasien join pasien on data_pasien.reg=pasien.reg join data_dokter on data_dokter.id_dokter=pasien.id_dokter join data_kamar on data_kamar.id_kamar=pasien.id_kamar join data_rawat_inap on data_rawat_inap.id_rawat_inap=pasien.id_rawat_inap join data_pasien_obat on data_pasien_obat.id_pasien_obat=pasien.id_pasien_obat where MONTH(tanggal)='$bulan'");
       
       
 
        $pdf = new FPDF('L','mm',array(250,297));
        $pdf->AddPage();
        $pdf->Image('https://lh3.googleusercontent.com/-1YlxDD41PEk/XJyTgopBl6I/AAAAAAAAC5o/A1Mg_gj4iIMOaO4WgzJ39Yqnd12cUKbPQCLcBGAs/h120/Screenshot%2Bfrom%2B2019-03-28%2B16.26.40.png',20,5,40,20);
        $pdf->SetX(120);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(40,10,'RUMAH SAKIT BUDI ASIH',0,0,'C');
        $pdf->Ln(4);
        $pdf->SetX(103);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(40,10,'Jln. Proklamasi No 1, Karawang, Jawa Barat - Indonesia');
        $pdf->SetFont('Arial','',8);
        $pdf->Ln(4);
        $pdf->SetX(125);
        $pdf->Cell(40,10,'Telp 0267 - 4041273');
        $pdf->SetFont('Arial','B',8);
        $pdf->Ln(5);
        $pdf->SetLineWidth(0);
        $pdf->Line(0,25,300,25);
        $pdf->SetX(120);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(40,10,'Laporan Data Pasien',0,0,'C');
        $pdf->Ln(4);
        $pdf->SetX(120);
        $pdf->SetFont('Arial','',8);
       // $pdf->Cell(40,10,'Bulan : '.$bulan,0,0,'C');
        $pdf->Ln(4);
         //Table
         $pdf->Ln(8);
         $pdf->SetFont('Arial','',8);
         $pdf->Cell(10,6,'No',1,0);
         $pdf->Cell(30,6,'No Reg',1,0);
         $pdf->Cell(30,6,'Nama',1,0);
         $pdf->Cell(20,6,'Alamat',1,0);
         $pdf->Cell(20,6,'Telepon',1,0);
         $pdf->Cell(20,6,'Nama Dokter',1,0);
         $pdf->Cell(20,6,'Type Rawat',1,0);
         $pdf->Cell(20,6,'Pendidikan',1,1);
         //Isi Table
         //$data_obat=$this->db->query("select * from data_obat where id_obat='$obat'")->result();
         $pasien=$this->db->query("SELECT *, dokter.nama as nama_dokter from medrek JOIN dokter on medrek.id_dokter=dokter.id_dokter join data_kamar where type_rawat='jalan'")->result();
         $no=1;
         foreach ($pasien as $rowpasien) {
           $pdf->Cell(10,6,$no++,1,0);
           $pdf->Cell(30,6,$rowpasien->reg,1,0);
           $pdf->Cell(30,6,$rowpasien->nama,1,0);
           $pdf->Cell(20,6,$rowpasien->alamat,1,0);
           $pdf->Cell(20,6,$rowpasien->telepon,1,0);
           $pdf->Cell(20,6,$rowpasien->nama_dokter,1,0);
           $pdf->Cell(20,6,$rowpasien->type_rawat,1,0);
           $pdf->Cell(20,6,$rowpasien->pendidikan,1,1);        
         }
       
        $pdf->Output();
      
    }
}
