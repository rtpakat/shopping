<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transport extends CI_Controller {

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
	public function index(){
		$result = $this->Order_Model->get_order_list();
		//print_r($result);
		$data['listOrder'] =  $result;
		$this->load->view('layout/header_admin');
		$this->load->view('admin/transport/index' ,$data);
		$this->load->view('layout/footer_admin');
	}

	public function update_ref_order_ok2($order_id,$status_id)
	{
		if($status_id == 7){
			$status = $status_id + 1;
		}elseif ($status_id == 6) {
			$status = $status_id + 2;
		}
		$data = array(
				'status_id' => $status			
		);

		//print_r($data);
		if($result = $this->Order_Model->update_ref_order($order_id,$data)){
			redirect('admin/transport');
		}else{
			redirect('admin/transport');
		}

	}
	public function update_ref_order_not1($order_id,$status_id)
	{
		$status = $status_id + 1;
		$data = array(
				'status_id' => $status			
		);

		print_r($data);
		if($result = $this->Order_Model->update_ref_order($order_id,$data)){
			redirect('admin/transport');
		}else{
			redirect('admin/transport');
		}

	}		
}