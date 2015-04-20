<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Section extends CI_Controller
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
		if(isset($_GET['query'])){
			$this->load->model('Section_model', '', TRUE);
			$data['sections'] = $this->Section_model->search($_GET['query']);
		}
		
		
		$this->load->view('partials/opening');
		$this->load->view('section', $data);
		$this->load->view('partials/closing');
	}
}
