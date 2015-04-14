<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller
{
	public function index()
	{
		$this->load->helper('url');
		
		$this->load->view('partials/opening');
		$this->load->view('schedule');
		$this->load->view('partials/closing');
	}
}
