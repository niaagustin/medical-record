<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {
  
    public function index(){
        $no=$this->db->query("select max(reg) as no from data_pasien")->result();
        foreach ($no as $no1){};
       $nourut=(int)substr($no1->no,4,3);
       $nourut++;
       $char="REG-";
       $data['newid']=$char.sprintf("%03s", $nourut);
       //$data['data_obat']=$this->db->query('select * from data_obat where stok between 1 and 10');
      // $data['data_obat']=$data['data_obat']->num_rows();
      // echo $newid;
     # if ($this->session->userdata('level') == "Admin")
	#	{
    $data['pasien'] = $this->m_crud->tampil_data('data_pasien')->result();
    $data['dokter'] = $this->m_crud->tampil_data('dokter')->result();
    $data['kamar'] = $this->m_crud->tampil_data('data_kamar')->result();
       
        $this->load->view('admin/pendaftaran/v_data_pendaftaran',$data);
   # }
  #else {
   #   		die("<script>alert('Silahkan Login Admin');window.location='../dashboard'</script>");
    #  	}	
    
      }

      public function daftar(){
        $no=$this->db->query("select max(reg) as no from data_pasien")->result();
        foreach ($no as $no1){};
       $nourut=(int)substr($no1->no,4,3);
       $nourut++;
       $char="REG-";
       $data['newid']=$char.sprintf("%03s", $nourut);
       //$data['data_obat']=$this->db->query('select * from data_obat where stok between 1 and 10');
      // $data['data_obat']=$data['data_obat']->num_rows();
      // echo $newid;
     # if ($this->session->userdata('level') == "Admin")
	#	{
    $data['pasien'] = $this->m_crud->tampil_data('data_pasien')->result();
    $data['dokter'] = $this->m_crud->tampil_data('dokter')->result();
    $data['kamar'] = $this->m_crud->tampil_data('data_kamar')->result();
       
        $this->load->view('admin/pendaftaran/v_data',$data);
      }
      public function daftar1(){
        $no=$this->db->query("select max(reg) as no from data_pasien")->result();
        foreach ($no as $no1){};
       $nourut=(int)substr($no1->no,4,3);
       $nourut++;
       $char="REG-";
       $data['newid']=$char.sprintf("%03s", $nourut);
       //$data['data_obat']=$this->db->query('select * from data_obat where stok between 1 and 10');
      // $data['data_obat']=$data['data_obat']->num_rows();
      // echo $newid;
     # if ($this->session->userdata('level') == "Admin")
	#	{
    $data['pasien'] = $this->m_crud->tampil_data('data_pasien')->result();
    $data['dokter'] = $this->m_crud->tampil_data('dokter')->result();
    $data['kamar'] = $this->m_crud->tampil_data('data_kamar')->result();
       
        $this->load->view('admin/pendaftaran/v_data1',$data);
      }

      public function index1(){
        $no=$this->db->query("select max(reg) as no from data_pasien")->result();
        foreach ($no as $no1){};
       $nourut=(int)substr($no1->no,4,3);
       $nourut++;
       $char="REG-";
       $data['newid']=$char.sprintf("%03s", $nourut);
      // $data['data_obat']=$this->db->query('select * from data_obat where stok between 1 and 10');
       //$data['data_obat']=$data['data_obat']->num_rows();
      // echo $newid;
     # if ($this->session->userdata('level') == "Admin")
	#	{
    $data['pasien'] = $this->m_crud->tampil_data('data_pasien')->result();
       
        $this->load->view('admin/pendaftaran/v_data_pendaftaran1',$data);
   # }
  #else {
   #   		die("<script>alert('Silahkan Login Admin');window.location='../dashboard'</script>");
    #  	}	
    
      }

    public function cetak() {
        $reg=$this->input->post('reg');
        $nama=$this->input->post('nama');
        $umur=$this->input->post('umur');
        $alamat=$this->input->post('alamat');
        $telepon=$this->input->post('telepon');

        $pdf = new FPDF('L','mm',array(85,100));
        
        $pdf->AddPage();
        $pdf->SetLineWidth(0);
        $pdf->Line(0,25,129,24);
        $pdf->SetLineWidth(0);
        $pdf->Line(0,12,145,11);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(40,10,'RUMAH BERSALIN DELIMA WALUYA');
        $pdf->Ln(4);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(40,10,'Jln. Raya Serang - Cibarusah, Serang, Cikarang Selatan, Bekasi, Jawa Barat');
        $pdf->Ln(10);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(40,10,'No Registrasi : '.$reg);
        $pdf->Ln(5);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(40,10,'Nama             : '.$nama);
        $pdf->Ln(5);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(40,10,'Umur              : '.$umur);
        $pdf->Ln(5);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(40,10,'Alamat            : '.$alamat);
        $pdf->Ln(5);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(40,10,'Telepon          : '.$telepon);
        $pdf->Ln(8);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(40,10,'KARTU HARAP DIBAWA SAAT BEROBAT');
       // $pdf->Ln(8);
        $pdf->SetY(0);
        $pdf->SetX(37);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(40,10,'Kartu Pasien');


        $pdf->Output();
    }
    
    public function do_insert(){
        //$data['data_obat']=$this->db->query('select * from data_obat where stok between 1 and 10');
        //$da['data_obat']=$data['data_obat']->num_rows();
        $reg=$this->input->post('reg');

        $nama=$this->input->post('nama');
        $umur=$this->input->post('umur');
        $pendidikan=$this->input->post('pendidikan');
        $suami=$this->input->post('suami');
        $pekerjaan=$this->input->post('pekerjaan');
        $telepon=$this->input->post('telepon');
        $alamat=$this->input->post('alamat');
        $type="inap";
        $id_dokter=$this->input->post('dokter');
        $id_kamar=$this->input->post('kamar');
       // $da['pasien']=$this->db->query("select * from data_pasien where id_pasien='8'")->result();


       $data = array(
            'nama' => $nama,
            'reg' => $reg,
            'alamat' => $alamat,
            'umur' => $umur,
            'pendidikan'=>$pendidikan,
            //'suami'=>$suami,
            'pekerjaan'=>$pekerjaan,
            'telepon' =>$telepon,
            'id_kamar'=>$id_kamar,
            'id_dokter'=>$id_dokter,
            'type_rawat'=>$type,
        );


    if (!empty($reg))
         {
        $this->m_crud->insert_data($data,'data_pasien');
        $this->m_crud->insert_data($data,'medrek');
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                        <h4>Berhasil Insert Data</h4>
                    </div>');  
        redirect('admin/pendaftaran');
    }
    
    else {
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-danger">
                        <h4>Semua Nilai Harus Diisi</h4>
                    </div>');  
        redirect('admin/pendaftaran');
    }

    }
    public function tes5() {
        $reg=$this->input->post('reg');
        $hasil=$this->db->query("select * from data_pasien where reg='$reg'");
        echo json_encode($hasil->result());
      }
public function tes6() {
        $nama=$this->input->post('nama');
        $hasil=$this->db->query("select * from data_pasien where nama='$nama'");
        echo json_encode($hasil->result());
      }
      public function do_insert1(){
        //$data['data_obat']=$this->db->query('select * from data_obat where stok between 1 and 10');
        //$da['data_obat']=$data['data_obat']->num_rows();
        $reg=$this->input->post('reg');

        $nama=$this->input->post('nama');
        $umur=$this->input->post('umur');
        $pendidikan=$this->input->post('pendidikan');
        $suami=$this->input->post('suami');
        $pekerjaan=$this->input->post('pekerjaan');
        $telepon=$this->input->post('telepon');
        $alamat=$this->input->post('alamat');
        $type="jalan";
        $id_dokter=$this->input->post('dokter');
        $id_kamar=$this->input->post('kamar');
       // $da['pasien']=$this->db->query("select * from data_pasien where id_pasien='8'")->result();


       $data = array(
            'nama' => $nama,
            'reg' => $reg,
            'alamat' => $alamat,
            'umur' => $umur,
            'pendidikan'=>$pendidikan,
            //'suami'=>$suami,
            'pekerjaan'=>$pekerjaan,
            'telepon' =>$telepon,
            'id_kamar'=>$id_kamar,
            'id_dokter'=>$id_dokter,
            'type_rawat'=>$type,
        );


    if (!empty($reg))
         {
        $this->m_crud->insert_data($data,'data_pasien');
        $this->m_crud->insert_data($data,'medrek');
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                        <h4>Berhasil Insert Data</h4>
                    </div>');  
        redirect('admin/pendaftaran');
    }
    
    else {
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-danger">
                        <h4>Semua Nilai Harus Diisi</h4>
                    </div>');  
        redirect('admin/pendaftaran');
    }

    }
}