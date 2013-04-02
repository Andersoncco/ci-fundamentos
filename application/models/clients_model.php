<?php

class Clients_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_clients($id = FALSE)
	{
		if ($id === FALSE)
	{
		$query = $this->db->get('clients');
		return $query->result_array();
	}
	
		$query = $this->db->get_where('clients', array('id' => $id));
		return $query->row_array();
   	}
   		
   	public function set_clients()
	{
	$this->load->helper('url');
	
	$id = url_title($this->input->post('nome'), 'dash', TRUE);
	
	$data = array(
		'nome' => $this->input->post('nome'),
		'city' => $this->input->post('city')
	);
	
	return $this->db->insert('clients', $data);
	}

	public function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete('clients');
	}

	
	
}

