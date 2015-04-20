<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller
{
	public function index()
	{
		$this->load->helper('url');
		$data['schedules']=[];
		$this->load->view('partials/opening');
		$this->load->view('schedule', $data);
		$this->load->view('partials/closing');
	}
	
	public function roomSchedule()
	{
		$this->load->helper('url');
		$data['schedules'] = [];
		$data['type'] = "room";
		if(isset($_GET['roomid'])){
			$this->load->model('Schedule_model', '', TRUE);
			$data['schedules'] = $this->Schedule_model->getRoomSchedule($_GET['roomid']);
		}
		$this->load->view('partials/opening');
		$this->load->view('schedule', $data);
		$this->load->view('partials/closing');
	}
	
	public function employeeSchedule()
	{
		$this->load->helper('url');
		$data['schedules'] = [];
		$data['type'] = "employee";
		if(isset($_GET['eid'])){
			$this->load->model('Schedule_model', '', TRUE);
			$data['schedules'] = $this->Schedule_model->getEmployeeSchedule($_GET['eid']);
		}
		$this->load->view('partials/opening');
		$this->load->view('schedule', $data);
		$this->load->view('partials/closing');
	}
}
