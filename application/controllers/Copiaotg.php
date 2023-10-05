<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Copiaotg extends CI_Controller {

	public function index()
	{
		$data['produk'] = $this->db->get('produk')->result_array();
		$this->load->view('partials/header');
		$this->load->view('partials/navbar');
		$this->load->view('home', $data);
		$this->load->view('partials/footer');
	}
}
