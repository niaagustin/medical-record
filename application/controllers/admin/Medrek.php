<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medrek extends CI_Controller {
  
    public function index(){
     # if ($this->session->userdata('level') == "Admin")
	#	{
        $data['search'] = $this->input->get('search');
        //$data['data_obat']=$this->db->query('select * from data_obat where stok between 1 and 10');
        //$data['data_obat']=$data['data_obat']->num_rows();
        $data['pasien'] = $this->db->query("SELECT *, dokter.nama as nama_dokter from medrek JOIN dokter on medrek.id_dokter=dokter.id_dokter where dokter.nama like '%".$data['search']."%'")->result();
		$this->load->view('admin/medrek/v_data_pasien',$data);
   # }
  #else {
   #   		die("<script>alert('Silahkan Login Admin');window.location='../dashboard'</script>");
    #  	}	
    
      }

    public function do_insert(){
        $reg=$this->input->post('reg');
        $nama=$this->input->post('nama');
        $masuk=$this->input->post('masuk');
        $keluar=$this->input->post('keluar');

        $data = array(
            'nama' => $nama,
            'reg' => $reg,
            'keluar' => $keluar,
            'masuk' => $masuk,
        );
    
    if (!empty($reg))
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
        $where = array('id_medrek' => $id);
        $this->m_crud->hapus_data($where,'medrek');
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                        <h4>Berhasil Hapus Data</h4>
                    </div>');  
        redirect('admin/medrek');
      }
    function edit($id){
       // $data['data_obat']=$this->db->query('select * from data_obat where stok between 1 and 10');
        //$data['data_obat']=$data['data_obat']->num_rows();
        $data['dokter']=$this->db->query("select * from dokter ")->result();
		$where = array('id_medrek' => $id);
        $data['pasien'] = $this->m_crud->edit_data($where,'medrek')->result();
       # $data['jabatan'] = $this->m_crud->tampil_data_jabatan()->result();
		$this->load->view('admin/medrek/v_edit_pasien', $data);
    }

    function update(){
        $id=$this->input->post('id');
        $reg=$this->input->post('reg');
        $nama=$this->input->post('nama');
        $masuk=$this->input->post('masuk');
        $keluar=$this->input->post('keluar');
        $diagnosa=$this->input->post('diagnosa');

        $data = array(
            'nama' => $nama,
            'reg' => $reg,
            'tgl_keluar' => $keluar,
            'tgl_masuk' => $masuk,
            'diagnosa' => $diagnosa,
        );
        $where = array(
            'id_medrek' => $id
        );
     
        $this->m_crud->update_data($where,$data,'medrek');
        $this->session->set_flashdata('msg', 
                    '<div class="alert alert-success">
                        <h4>Berhasil Update Data</h4>
                    </div>');  
        redirect('admin/medrek');
        }

    public function details($id) {
    // $data['data_obat']=$this->db->query('select * from data_obat where stok between 1 and 10');
        //$data['data_obat']=$data['data_obat']->num_rows();
        //$where = array('id_medrek' => $id);
        $data['pasien'] = $this->db->query("SELECT medrek.id_medrek, medrek.nama, medrek.reg, medrek.diagnosa, dokter.nama as nama_dokter, dokter.poli from medrek JOIN dokter on medrek.id_dokter=medrek.id_dokter where id_medrek='$id'")->result();
      // $data['pasien']=$this->db-query("select * from medrek")
       $this->load->view('admin/medrek/v_data_pasien_detail', $data);
    
    }
    
}