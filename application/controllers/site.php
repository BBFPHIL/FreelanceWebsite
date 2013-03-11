<?php 

class Site extends CI_Controller{


	//Index page
	function index() {

		$data['main_content'] = 'home';
		$this->load->view('includes/template', $data);
		
		
	}
	
	
	
}
