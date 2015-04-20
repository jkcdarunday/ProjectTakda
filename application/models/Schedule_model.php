<?php
class Schedule_model extends CI_Model {

	function getEmployeeSchedule($employeeId)
	{
		$query = $this->db->get_where('section', array('employeeId' => $employeeId));
		
		return $query->result();
	}
	
	function getRoomSchedule($roomId)
	{
		$this->db->select('*');
		$this->db->from('section');
		$this->db->where('section.roomId', $roomId);
		$this->db->join('room', 'section.roomId = room.roomId');
		
		$query = $this->db->get();
		
		return $query->result();
	}

}
?>
