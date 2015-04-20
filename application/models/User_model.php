<?php
class User_model extends CI_Model {

	function search($keyword){ 
		$this->db->select('employeeID, username, emailAddress, firstName, middleName, lastName, position');
		$this->db->from('user');
		$this->db->like('employeeID',$keyword);
		$this->db->or_like('username',$keyword);
		$this->db->or_like('emailAddress',$keyword);
		$this->db->or_like('firstName',$keyword);
		$this->db->or_like('middleName',$keyword);
		$query = $this->db->get();
		return $query->result();
	}

}
?>
