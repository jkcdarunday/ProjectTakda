<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * This controller is the default controller set in config/routes.php.
	 * It will be shown whenever the root directory of the website is accessed.
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url'); 
		$data = array();
		$query = "";
		if(isset($_GET['query']))
			$query = $_GET['query'];
			
		$this->load->model('Room_model', '', TRUE);
		$data['rooms'] = $this->Room_model->search($query);
		
		$this->load->view('partials/opening');
		$this->load->view('room', $data);
		$this->load->view('partials/closing');
	}
}
