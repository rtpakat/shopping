<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_Model');
		$this->load->model('Members_Model');

	}

	public function index()
	{
		$this->load->view('login/index');
	}

	public function checklogin()
	{

		if($this->input->server('REQUEST_METHOD') == "POST")
		{	
			if($this->Members_Model->record_count($this->input->post('email'), $this->input->post('password')) == 1)
			{
				$result = $this->Members_Model->fetch_user_login($this->input->post('email'), $this->input->post('password'));

				$this->session->set_userdata(array(
					'login_id'     => $result->member_id,
					'display_name'     => $result->name.' '.$result->lastname,
					'auth'     => 'member',
					));
				redirect('home');
				// echo(1);

			}
			else{
				if($this->Users_Model->record_count($this->input->post('email'), $this->input->post('password')) == 1)
				{

					$result = $this->Users_Model->fetch_user_login($this->input->post('email'), $this->input->post('password'));

					if($result->type_id > 0)
					{
						$this->session->set_userdata(array(
						'login_id'     => $result->user_id,
						'display_name'     => $result->name . " " . $result->lastname,
						'auth'     => $result->type_id,
						));
						redirect('admin/dashboard');
						echo(2);
					}else{
						//$this->session->set_flashdata('message_login','คุณไม่ได้รับสิทธิ์การเข้าถึง');
						//redirect('home');
						echo(3);
					}
				}
				else{
					$this->session->set_flashdata('message_login','username / password ผิด');
					redirect('home');	
					echo(4);
				}
			}
		}
		else{
				//$this->session->set_flashdata('message_login','มีข้อผิดพลาดเกิดขึ้น');
				//redirect('home');
			echo(5);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home', 'refresh');
	}

	public function register()
	{
		if($this->input->server('REQUEST_METHOD') == "POST")
		{

			$data = array(
				'email' => $this->input->post('email'),			
				'password' => $this->input->post('password'),
				'name' => $this->input->post('name'),			
				'lastname' => $this->input->post('lastname')

			);

			if($result = $this->Members_Model->addUser($data)){
				if($this->Members_Model->record_count($this->input->post('email'), $this->input->post('password')) == 1)
				{
				
					$result = $this->Members_Model->fetch_user_login($this->input->post('email'), $this->input->post('password'));

					$this->session->set_userdata(array(
						'login_id'     => $result->member_id,
						'display_name'     => $result->name . " " . $result->lastname,
						'auth'     => 'member',
						));
						redirect('home');
					echo(1);

				}
				else{
					// $this->session->set_flashdata('message_login','email / password ผิด');
					redirect('home');
					echo(2);
				}
			}else{
				// $this->session->set_flashdata('message_addUser','addUser: error / ข้อมูลซ้ำ ');
				// redirect('login');
				echo(3);
			}
		}
	}
}