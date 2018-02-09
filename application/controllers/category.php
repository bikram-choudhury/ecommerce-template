<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

	public function index(){
		$this->load->view('includes/header');
		$this->load->view('category/index');
		$this->load->view('includes/footer');
	}
	
	public function details(){
		$this->load->view('includes/header');
		$this->load->view('category/details');
		$this->load->view('includes/footer');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */