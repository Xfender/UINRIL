<?php
class SuratCuti extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('suratcuti_model');
	}
	function index(){
		$this->load->view('suratcuti_view');
	}

	function cuti_data(){
		$data = $this->suratcuti_model->cuti_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->suratcuti_model->save();
		echo json_encode($data);
	}

	function update(){
		$data=$this->suratcuti_model->update();
		echo json_encode($data);
	}
	function delete(){
		$data=$this->suratcuti_model->delete();
		echo json_encode($data);
	}
}