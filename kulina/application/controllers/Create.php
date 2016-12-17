<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('ModelUser');
	}

	public function index()
	{
		if(!empty($_POST['submit'])) {
			//ambil isi inputan form
			$tmp['order_id'] 	= $_POST['order_id'];
			$tmp['product_id'] 	= $_POST['product_id'];
			$tmp['user_id'] 	= $_POST['user_id'];
			$tmp['rating'] 		= $_POST['rating'];
			$tmp['review'] 		= $_POST['review'];

			//lempar data ke function create ModelUser
			$this->ModelUser->create($tmp);			

			redirect(base_url());
		}
	}

	function __destruct(){
		$this->db->close();
	}
}
