<?php
class Course_model extends CI_Model {

	function search($keyword){ 
		$this->db->select('courseCode, courseTitle');
		$this->db->from('subject');
		$this->db->like('courseCode',$keyword);
		$this->db->or_like('courseTitle',$keyword);
		$query = $this->db->get();
		return $query->result();
	}

}
?>
