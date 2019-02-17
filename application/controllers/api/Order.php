<?php
use Restserver\Libraries\REST_Controller;
use Restserver\Libraries\Format;
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'libraries/REST_Controller.php');
require(APPPATH.'libraries/Format.php');
class Order extends REST_Controller
{

    public function index_post()
    {
        echo "API";
        $this->load->model('Order_Model');
        $this->load->model('Order_Detail_Model');
        $this->load->model('Payment_Model');
        $this->load->model('Transport_Model');
        $this->load->model('Order_Detail_Model');

        $detail_data = json_decode($this->input->raw_input_stream);
        echo $detail_data->amount_product;
        
        $data = array(
                //'member_id' => $this->session->userdata('login_id'),
                'amount_product' => $detail_data->amount_product,
                'sum_price' => $detail_data->sum_price,
                'status_id' => 1                
        );
         print_r($data);
        if($result = $insert_id = $this->Order_Model->add_ref_order($data)){
            $this->response($insert_id, 200);
        }else{
            $this->response([
                'status' => FALSE,
                'message' => 'Insert FALSE'
            ], REST_Controller::HTTP_NOT_FOUND); 
        }   
    }
}