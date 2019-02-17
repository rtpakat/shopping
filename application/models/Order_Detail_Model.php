<?php
class Order_Detail_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_order_detail($order_id)
	{
		$this->db->select('order_detail.*,products.*');
		$this->db->from("order_detail");
		$this->db->join('products', 'order_detail.product_id = products.product_id', 'left');			
		$this->db->where('order_detail.order_id', $order_id);		
		$query=$this->db->get();
		return $query->result();
	}

	public function add_order_detail($data)
	{
		$this->db->insert('order_detail',$data);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}

}