<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('auth') == null && $this->session->userdata('auth') <= 0)
		{
			redirect('home');
		}
		$this->load->model('Order_Model');
	}

	public function index()
	{	
		// $this->load->view('layout/header_admin');
		// $this->load->view('admin/dashboard/index');
		// $this->load->view('layout/footer_admin');
		// $this->load->view('layout/header_admin');
		// $this->load->view('admin/users/index');
		// $this->load->view('layout/footer_admin');
		$this->load->view('layout/header_admin');
		if($result = $this->Order_Model->get_Vendors()){
			$data['listVendors'] =  $result;
			//print_r($result);
			
			$this->load->view('admin/orders/index', $data);
			
		}else{
			$this->load->view('admin/orders/index');
		}
		$this->load->view('layout/footer_admin');

	}

	public function form_add()
	{
		$type = $this->Order_Model->get_type();
		$data['type'] =  $type;
		$this->load->view('layout/header_admin');
		$this->load->view('admin/orders/form_add', $data);
		$this->load->view('layout/footer_admin');
	}	

	public function insert_Vendors() 
	{
		if($this->input->server('REQUEST_METHOD') == "POST")
		{

			$data = array(
				'ven_name' => $this->input->post('name'),
				'ven_lastname' => $this->input->post('lastname'),				
				'tel' => $this->input->post('tel'),
				'address' => $this->input->post('address'),
			);

			if($result = $this->Order_Model->add_Vendors($data)){
				redirect('admin/orders');
			}else{

			}
		}
	}

	public function form_edit($ven_id)
	{
		$this->load->view('layout/header_admin');
		if($result = $this->Order_Model->get_VenID($ven_id)){
			$data['listVenID'] =  $result;
			// print_r($data);
			$this->load->view('admin/orders/form_edit' ,$data);
		}else{
			$this->load->view('admin/orders/form_edit' ,$data);
		}
		$this->load->view('layout/footer_admin');

	}

	public function update_vendors()
	{
		if($this->input->server('REQUEST_METHOD') == "POST"){
			$id = $this->input->post('ven_id');
			// $pass = md5($this->input->post('password'));
			$data = array(
				'ven_name' => $this->input->post('name'),
				'ven_lastname' => $this->input->post('lastname'),				
				'tel' => $this->input->post('tel'),
				'address' => $this->input->post('address'),
			);

			//print_r($data);			
			if($result = $this->Order_Model->update_Vendor($id,$data)){
				redirect('admin/orders/form_edit/'.$id);
			}
			else{
				redirect('admin/orders/form_edit/'.$id);
			}
		}

	}

	public function delete_vendor($ven_id) 
	{
		// echo "MODEL DELETE USER INSERT #ADMIN";
		if(!empty($ven_id)){
			if($result = $this->Order_Model->delete_VenID($ven_id)){
				// $this->session->set_flashdata('message_delete_user','ลบ User สำเร็จ');
				redirect('admin/orders');

			}else{
				// $this->session->set_flashdata('message_delete_user','ลบ User ไม่สำเร็จ');
				redirect('admin/orders');
			}
		}
	}	
}