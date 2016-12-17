<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kulina extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('ModelUser');
	}

	public function index()
	{
		$barang = $this->ModelUser->get_all_item();
		$data['item'] = $barang;
		$this->load->view('index', $data);	
	}

	public function create(){
		$this->load->view('create');
	}

	public function update($id)
	{	
		if(!empty($_POST['submit'])) {
			//ambil isi inputan form
			$tmp['order_id'] 	= $_POST['order_id'];
			$tmp['product_id'] 	= $_POST['product_id'];
			$tmp['user_id'] 	= $_POST['user_id'];
			$tmp['rating'] 		= $_POST['rating'];
			$tmp['review'] 		= $_POST['review'];

			//lempar data ke function update ModelUser
			$this->ModelUser->update($id, $tmp);			

			redirect(base_url());
		}
		$data['hasil'] = $this->ModelUser->getById($id);
        $this->load->view('edit', $data);
	}

	public function delete($id){
		$this->ModelUser->delete($id);
		redirect(base_url());
	}

	function __destruct(){
		$this->db->close();
	}
}
