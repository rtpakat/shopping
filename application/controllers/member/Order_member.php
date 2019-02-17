<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('auth') == null && $this->session->userdata('auth') != 'member' or $this->session->userdata('auth') < 0)
		// {
		// 	redirect('home');
		// }
		$this->load->model('Order_Model');
		$this->load->model('Order_Detail_Model');
		$this->load->model('Payment_Model');
		$this->load->model('Transport_Model');
		// $this->load->model('Order_Detail_Model');		

	}
	public function index(){
		$this->load->view('layout/header');
		$this->load->view('order_member/index');
		$this->load->view('layout/footer');
	}

	public function form_test(){
		$this->load->view('layout/header');
		$this->load->view('member/member_orderhistory/orderhistory');
		$this->load->view('layout/footer');
	}

	public function get_order($order_id) {
		if($result = $this->Order_Model->get_order($order_id)){
			print_r($result);
			return $result;
		}else{
			return $result;
		}
	}

	public function insert_ref_order()
	{
		// echo "<script>console.log(localStorage.getItem('sumprice'));</script>";
		$sum_prodouct = $this->input->post('amount_product');
		$sum_price = $this->input->post('sumprice');
		
		$data = array(
				'member_id' => $this->session->userdata('login_id'),
				'amount_product' => $sum_prodouct,
				'sum_price' => 	$sum_price,
				'status_id' => 1				
		);
		// print_r($data);
		if($result = $insert_id = $this->Order_Model->add_ref_order($data)){
			echo($insert_id);
			return $insert_id;
			// insert_order_detail($insert_id);
		}else{
			echo($insert_id);
			return false ;
		}
	}

	// public function update_ref_order($order_id,$status_id)
	// {
	// 	$data = array(
	// 			'status_id' => $status_id				
	// 	);

	// 	print_r($data);
	// 	if($result = $this->Order_Model->update_ref_order($order_id,$data)){
	// 		return $result;
	// 	}else{
	// 		return $result ;
	// 	}

	// }

	public function insert_order_detail()
	{
		$order_id = $this->input->post('order_id');
		$test = $this->input->post('product_id');
		// print_r($test);
		// $id = $test;
		// echo $test['id'];
		// echo $test['price'];
		// echo $order_id;
		// // echo "products : "+$product_id;
		// print_r($product_id);
		// // echo $product_id.lenght();
		$data = array(
		 		'order_id' => $order_id,
		 		'product_id' => $test['id'],
				'amount' => $test['quantity'],
				'per_pice' => $test['price'],								
		);
		 print_r($data);
		if($result = $this->Order_Detail_Model->add_order_detail($data)){
			return $result;
		}else{
			return $result ;
		}
	}

	public function insert_payment()
	{
		$data = array(
				'bank_name' => $this->input->post('bank_name'),
				'bank_num' => $this->input->post('bank_num'),
				'slip_img' => $this->input->post('slip_img')						
		);
		print_r($data);
		if($result = $this->Payment_Model->add_payment($data)){
			return $result;
		}else{
			return $result ;
		}
	}

	public function insert_transport()
	{
		$data = array(
				'tran_name' => $this->input->post('tran_name'),
				'tran_price' => $this->input->post('tran_price'),
				'tran_code' => $this->input->post('tran_code')						
		);
		print_r($data);
		if($result = $this->Transport_Model->add_transport($data)){
			return $result;
		}else{
			return $result ;
		}
	}


	public function delete_order($order_id) 
	{

		if(!empty($order_id)){
			echo $order_id;
			$query = $this->Order_Model->check_status_order($order_id);
				print_r($query);
				echo $query->status_id;
			if($query[0]->status_id <=2 ) {

				if($result = $this->Order_Model->delete_ref_order($order_id) && $result = $this->Order_Detail_Model->delete_order_detail($order_id)){
					return $result;
				}else{
					return $result;
				}				
			}else{
				return false;
			}

		}
	}			
}