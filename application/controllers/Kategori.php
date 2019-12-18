<?php
class Kategori extends CI_Controller{

	function index(){
		$x['data']=$this->m_crud->get_kategori();
		$this->load->view('v_kategori',$x);
	}

	function get_subkategori(){
		$id=$this->input->post('id');
		$data=$this->m_crud->get_subkategori($id);
		echo json_encode($data);
	}
}
