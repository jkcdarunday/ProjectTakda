<?php
class Section_model extends CI_Model {

	function search($keyword){ 
		$this->db->select('schedule, courseCode, sectionCode, roomName, firstName, middleName, lastName, classification');
		$this->db->from('section');
		$this->db->like('courseCode',$keyword);
		$this->db->or_like('courseTitle',$keyword);
		$this->db->join('room', 'section.roomId = room.roomId');
		$this->db->join('user', 'section.employeeId = user.employeeId');
		$query = $this->db->get();
		return $query->result();
	}

}
?>
