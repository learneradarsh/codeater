<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
defined('BASEPATH') OR exit('No direct script access allowed');

class Codeater extends CI_Controller
{
	
	public function index()
	{
		$data['page_title'] = 'Code@ter || HOME';
		$data['alreadyExists'] = '';
		$data['successRegister'] = '';
		$this->load->view('header/header', $data);
		$this->load->view('index');
		$this->load->view('footer/footer');
	}

	public function contest()
	{
		$data['page_title'] = 'Code@ter || Contest';
		$this->load->view('header/header', $data);
		$this->load->view('contest');
		$this->load->view('footer/footer');
	}

	public function hot_topic()
	{	
		$data['page_title'] = 'Code@ter || Hot Topics';
		$this->load->view('header/header', $data);
		$this->load->view('hot_topic');
		$this->load->view('footer/footer');
	}
	
	public function practice()
	{	
		$data['page_title'] = 'Code@ter || practice';
		$this->load->view('header/header', $data);
		$this->load->view('practice');
		$this->load->view('footer/footer');
	}

	public function tutorials()
	{
		$data['page_title'] = 'Code@ter || Tutorials';
		$this->load->view('header/header', $data);
		$this->load->view('tutorials');
		$this->load->view('footer/footer');
	} 	

	public function general($filename="")
	{
		
			if($filename=="")
				return $this->index();
			else if($filename == 'cam_amb')
				$data['page_title'] = 'Code@ter || Campus Ambassador';
			else if($filename == 'careers')
				$data['page_title'] = 'Code@ter || Careers';
			else if($filename == 'faq')
				$data['page_title'] = 'Code@ter || FAQ\'s';
			else if($filename == 'help')
				$data['page_title'] = 'Code@ter || Help';
			else if($filename == 'our_dev')
				$data['page_title'] = 'Code@ter || Developers';
			else if($filename == 'privacy')
				$data['page_title'] = 'Code@ter || Privacy';
			else if($filename == 'TandC')
				$data['page_title'] = 'Code@ter || Terms and Conditions';

			$this->load->view('header/header', $data);
			$this->load->view('general/'.$filename);
			$this->load->view('footer/footer');
		
	}
}
?>