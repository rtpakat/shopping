<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Products_Model');
	}

	public function index()
	{	
		$this->load->view('layout/header');
		if($result = $this->Products_Model->get_Products()){
			$data['listProducts'] =  $result;
		$this->load->view('home/index' ,$data);
		}
		$this->load->view('layout/footer');

	}
}