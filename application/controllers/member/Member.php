<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('auth') == null && $this->session->userdata('auth') !== "SuperAdmin" && $this->session->userdata('auth') !== "Staff")
		// {
		// 	//console.log('no login');
		// 	redirect('login');
		// }
	}
	public function transportation(){
		$this->load->view('layout/header');
		$this->load->view('member/member_transportation/transportation');
		$this->load->view('layout/footer');
	}
	public function orderhistory(){
		$this->load->view('layout/header');
		$this->load->view('member/member_orderhistory/orderhistory');
		$this->load->view('layout/footer');
	}
}