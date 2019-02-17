<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_detail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('auth') == null && $this->session->userdata('auth') == 'member' or $this->session->userdata('auth') < 0)
		{
			redirect('home');
		}
		$this->load->model('Order_Model');
		$this->load->model('Order_Detail_Model');
		$this->load->model('Payment_Model');
		$this->load->model('Transport_Model');
		$this->load->model('Order_Detail_Model');			

	}
	public function index (){

	}
	public function get ($order_id){
		$result = $this->Order_Detail_Model->get_order_detail($order_id);
		//print_r($result);
		$data['listOrderDetail'] =  $result;
		$this->load->view('layout/header_admin');
		$this->load->view('admin/order_detail/index' ,$data);
		$this->load->view('layout/footer_admin');
	}
}