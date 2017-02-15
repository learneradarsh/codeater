<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
defined('BASEPATH') OR exit('No direct script access allowed');

class Codeater extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->session->set_userdata('redirect_back', current_url() );
	}
	
	public function index()
	{
		if( $this->session->userdata('user_id')){
			$data['page_title'] = 'Code@ter || Welcome';
			$this->load->view('header/dash_header',$data);
			$this->load->view('index');
			$this->load->view('footer/footer');
		}
		else{
			$data['page_title'] = 'Code@ter || HOME';
			$this->load->view('header/header', $data);
			$this->load->view('index');
			$this->load->view('footer/footer');
		}
	}

	public function contest()
	{		
		$data['page_title'] = 'Code@ter || Contest';
		if( $this->session->userdata('user_id')){
			$this->load->view('header/dash_header',$data);	
		}else{	
			$this->load->view('header/header', $data);
		}
		$this->load->view('contest');
		$this->load->view('footer/footer');
	}

	public function hot_topic()
	{	
		$data['page_title'] = 'Code@ter || Hot Topics';
		if( $this->session->userdata('user_id')){
			$this->load->view('header/dash_header',$data);	
		}else{	
			$this->load->view('header/header', $data);
		}
		$this->load->view('hot_topic');
		$this->load->view('footer/footer');
	}
	
	public function practice()
	{	
		$data['page_title'] = 'Code@ter || practice';
		if( $this->session->userdata('user_id')){
			$this->load->view('header/dash_header',$data);	
		}else{	
			$this->load->view('header/header', $data);
		}
		$this->load->view('practice');
		$this->load->view('footer/footer');
	}

	public function tutorials()
	{
		$data['page_title'] = 'Code@ter || Tutorials';
		if( $this->session->userdata('user_id')){
			$this->load->view('header/dash_header',$data);	
		}else{	
			$this->load->view('header/header', $data);
		}
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

			if( $this->session->userdata('user_id')){
			$this->load->view('header/dash_header',$data);	
			}else{	
			$this->load->view('header/header', $data);
			}
			$this->load->view('general/'.$filename);
			$this->load->view('footer/footer');
		
	}
	public function COC()
	{
		$data['page_title'] = 'Code@ter || COC';
		if( $this->session->userdata('user_id')){
			$this->load->view('header/dash_header',$data);
			$this->load->view('user/COG');
			$this->load->view('footer/footer');
		}
		else{
			return redirect('');
		}	

	}
	
	public function inbox()
	{
		$data['page_title'] = 'Code@ter || Inbox';
		if( $this->session->userdata('user_id')){
			$this->load->view('header/dash_header',$data);
			$this->load->view('user/Inbox');
			$this->load->view('footer/footer');
		}
		else{
			return redirect('');
		}
	}

	public function rank_list()
	{
		$data['page_title'] = 'Code@ter || Ranking';
		if( $this->session->userdata('user_id')){
			$this->load->view('header/dash_header',$data);
			$this->load->view('user/Rank_List');
			$this->load->view('footer/footer');
		}
		else{
			return redirect('');
		}
	}

	public function dashboard()
	{
		$data['page_title'] = 'Code@ter || Dashboard';
		if( $this->session->userdata('user_id')){
			$this->load->view('header/dash_header',$data);
			$this->load->view('user/dashboard');
			$this->load->view('footer/footer');
		}
		else{
			return redirect('');
		}
	}
}
?>
