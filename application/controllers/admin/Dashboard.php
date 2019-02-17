<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('auth') == null && $this->session->userdata('auth') <= 0)
		{
			redirect('home');
		}
	}

	public function index()
	{	
		$this->load->view('layout/header_admin');
		$this->load->view('admin/dashboard/index');
		$this->load->view('layout/footer_admin');
	}
}