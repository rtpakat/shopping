<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transportation extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('auth') == null && $this->session->userdata('auth') !== "member")
		{
			redirect('home');
		}
		$this->load->model('Products_Model');
		$this->load->model('List_Product_Model');
	}

	public function index()
	{	
		$this->load->view('layout/header');	
		$this->load->view('transportation/order_send_infor');
		$this->load->view('layout/footer');
    }
    public function cart_history()
	{	
		$this->load->view('layout/header');	
		$this->load->view('transportation/order_history');
		$this->load->view('layout/footer');
	}

	
}