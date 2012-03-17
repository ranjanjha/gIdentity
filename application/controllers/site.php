<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	
	

	//loaded by default
	public function index()	{

		$data['project_name'] = "gIdentity";
		$data['title'] = $data['project_name'];

		
		$this->load->view('include/header', $data);
		$this->load->view('include/top-navigation', $data);
		$this->load->view('homepage', $data);
		$this->load->view('include/footer');
	}

	
	//display freqrently asked question page
	public function faq()
	{
		# todo code...
		$data['project_name'] = "gIdentity";
		$data['title'] = $data['project_name'];

		
		$this->load->view('include/header', $data);
		$this->load->view('include/top-navigation', $data);
		$this->load->view('faq/main_page', $data);
		$this->load->view('include/footer');
	}

	//display about page
	public function about(){

		$data['title'] = "About";
		$data['description'] = "Here is the site description";

		$this->load->view('about_page', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */