<?php
class Schedule_model extends CI_Model {

	function getEmployeeSchedule($employeeId)
	{
		$this->db->select('schedule, courseCode, sectionCode, roomName');
		$this->db->from('section');
		$this->db->where('section.employeeId', $employeeId);
		$this->db->join('room', 'section.roomId = room.roomId');
		
		$query = $this->db->get();
		
		
		return $query->result();
	}
	
	function getRoomSchedule($roomId)
	{
		$this->db->select('schedule, courseCode, sectionCode, username');
		$this->db->from('section');
		$this->db->where('section.roomId', $roomId);
		$this->db->join('room', 'section.roomId = room.roomId');
		$this->db->join('user', 'section.employeeId = user.employeeId');
		
		$query = $this->db->get();
		
		return $query->result();
	}

}
?>
