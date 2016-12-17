<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelUser extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_all_item(){
		$data = $this->db->get('user_review');
		return $data;
	}

	public function getById($id) {
        return $this->db->get_where('user_review', array('id' => $id))->row();
    }

	public function create($data){
		$this->db->insert('user_review',$data);
	}

	public function update($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('user_review', $data);
    }

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('user_review'); 
	}

	function __destruct(){
		$this->db->close();
	}
}
