<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {
	


	public function index()	{

	    redirect('site/index');
		
	}

	public function stage2($id="")
	{
	$data['project_name'] = "gIdentity";
		$data['title'] = $data['project_name'];

		
		$this->load->view('include/header', $data);
		$this->load->view('include/top-navigation', $data);
		$this->load->view('signup_stage2_form', $data);
		$this->load->view('include/footer');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */