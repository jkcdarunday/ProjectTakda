<?php
class Room_model extends CI_Model {

	function search($keyword){ 
		$this->db->select('roomID, roomName, seatingCapacity, building, floor');
		$this->db->from('room');
		$this->db->like('roomName',$keyword);
		$this->db->or_like('building',$keyword);
		$this->db->or_like('floor',$keyword);
		$query = $this->db->get();
		return $query->result();
	}

}
?>
