<?php
class suratketerangan_model extends CI_Model{


	function rubrik_list(){
		$rubrik = $this->load->database('default', TRUE);
		$hasil= $rubrik->get('rubrik_view');

		return $hasil->result();
	}

	function save_rubrik(){
		$rubrik = $this->load->database('default', TRUE);
		$user = $this->load->database('dbdua', TRUE);

		$data = array(
			'rubrik_code' 	=> $this->input->post('rubrik_code'),
			'rubrik_name' 	=> $this->input->post('rubrik_name'),
			'rubrik_price' => $this->input->post('price'),
		);

		$datauser = array(
			'user_name' => $this->input->post('user_name'),
			'id_rubrik' => $this->input->post('rubrik_code')
		);

		$inputrubrik =$rubrik->insert('rubrik',$data);
		$inputuser = $user->insert('user', $datauser);

	}

	function update_rubrik(){
		$rubrik = $this->load->database('default', TRUE);

		$rubrik_code=$this->input->post('rubrik_code');
		$rubrik_name=$this->input->post('rubrik_name');
		$rubrik_price=$this->input->post('price');

		$rubrik->set('rubrik_name', $rubrik_name);
		$rubrik->set('rubrik_price', $rubrik_price);
		$rubrik->where('rubrik_code', $rubrik_code);
		$result=$rubrik->update('rubrik');
		return $result;
	}

	function delete_rubrik(){
		$rubrik = $this->load->database('default', TRUE);

		$rubrik_code=$this->input->post('rubrik_code');
		$rubrik->where('rubrik_code', $rubrik_code);
		$result=$rubrik->delete('rubrik');
		return $result;
	}

}
