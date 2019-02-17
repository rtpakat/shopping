<?php
class Order_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_order($order_id)
	{
		$this->db->select('ref_order.*,members.name,members.lastname,status_order.*,transport.*,payment.*');
		$this->db->from("ref_order");
		$this->db->join('members', 'ref_order.member_id = members.member_id', 'left');
		$this->db->join('status_order', 'ref_order.status_id = status_order.status_id', 'left');
		$this->db->join('transport', 'ref_order.tran_id = transport.tran_id', 'left');
		$this->db->join('payment', 'ref_order.payment_id = payment.payment_id', 'left');				
		$this->db->where('ref_order.order_id', $order_id);		
		$this->db->order_by("ref_order.create_time", "desc");	
		$query=$this->db->get();
		return $query->result();
	}

	public function get_order_list()
	{
		$this->db->select('ref_order.*,members.name,members.lastname,status_order.*,transport.*,payment.*');
		$this->db->from("ref_order");
		$this->db->join('members', 'ref_order.member_id = members.member_id', 'left');
		$this->db->join('status_order', 'ref_order.status_id = status_order.status_id', 'left');
		$this->db->join('transport', 'ref_order.tran_id = transport.tran_id', 'left');
		$this->db->join('payment', 'ref_order.payment_id = payment.payment_id', 'left');				
		$this->db->order_by("ref_order.createtime", "desc");	
		$query=$this->db->get();
		return $query->result();
	}	

	public function add_ref_order($data)
	{
		$this->db->insert('ref_order',$data);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}

	public function update_ref_order($order_id,$data)
	{
		$this->db->where('order_id',$order_id);;
		$result = $this->db->update('ref_order',$data);
		return $result;
	}

	public function delete_ref_order($id)
	{
		$this->db->where('order_id', $id);
		$result = $this->db->delete('ref_order');
		return $result;
	}

	public function check_status_order($order_id) 
	{
		$this->db->select('status_id');
		$this->db->where('order_id',$order_id);
		$query=$this->db->get('ref_order');
		return $query->result();
	}
}