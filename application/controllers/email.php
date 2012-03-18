<?php

/* send email with gmail*/

class Email extends CI_Controller
	{
		
			
		function index()	
		{
			$config =array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.google.mail.com',
			'smtp_port' => 465,
			'smtp_user' => 'cricketislife.in@gmail.com',
			'smtp_pass' => 'ranjanjha',
			);
			
			$this->load->library('email',$config);
			
			$this->email->set_newline("\r\n");
			
			$this->email->from('cricketislife.in@gmail.com','ranjan jha');
			$this->email->to("ranjanrocks9622@gmail.com");
			$this->email->subject('this is a test email');
			$this->email->message('It is working');
			
			if($this->email->send())
			{
				echo "chek ur mail id mail has been sent";
				}
				else 
				{
					show_error($this->email->print_debugger());
					}
			
			}
	}


