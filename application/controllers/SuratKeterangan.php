<?php
class SuratKeterangan extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('suratketerangan_model');
	}
	function index(){
		$this->load->view('index');
	}

	function rubrik_data(){
		$data=$this->suratketerangan_model->rubrik_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->suratketerangan_model->save_rubrik();
		echo json_encode($data);
	}

	function update(){
		$data=$this->suratketerangan_model->update_rubrik();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->suratketerangan_model->delete_rubrik();
		echo json_encode($data);
	}

}
