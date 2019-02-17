<?php
class Transport_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_Users()
	{
		$this->db->select('users.*,type_user.type_name');
		$this->db->from("users");
		$this->db->join('type_user', 'users.type_id = type_user.type_id', 'left');
		$query=$this->db->get();
		return $query->result();
	}

	public function add_transport($data)
	{
		$query = $this->db->insert('transport',$data);
		return $query;
	}

	public function delete_ref_order($id)
	{
		$this->db->where('order_id', $id);
		$result = $this->db->delete('ref_order');
		return $result;
	}
}