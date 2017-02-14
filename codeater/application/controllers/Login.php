<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function show_signup()
	{		
		$data['page_title'] = 'Code@ter || Signup';
		$this->load->view('header/header', $data);
		$this->load->view('login/signup');
		$this->load->view('footer/footer');	
	}

	public function do_register()
	{
		$data = array(
			'usernamesignup' => htmlentities($this->input->post('usernamesignup')), 
			'emailsignup' => htmlentities($this->input->post('emailsignup')),
			'passwordsignup' => htmlentities($this->input->post('passwordsignup')),
			'passwordsignup_confirm' => htmlentities($this->input->post('passwordsignup_confirm'))
			);
			
			if($data['passwordsignup']!=$data['passwordsignup_confirm']){
				$this->session->set_flashdata('password_match_failed','Please enter same passwords');
				return redirect('login/show_signup');
			}
			else if($this->isEmailExist($data['emailsignup'])){
				$this->session->set_flashdata('register_failed','User with Email ID already Exists.!');
				return redirect('codeater');   
			}
			else{	
				$data['activation_code'] = $this->sendmail($data['emailsignup']);
				$this->load->model('loginmodel');
				if( $this->loginmodel->do_register($data))
				{
					$this->session->set_flashdata('successRegister','Successfully registered.!');
					return redirect('codeater');
				}
				else{
					$this->session->set_flashdata('Error','Some Error Occured..Try Again Later..!');
					return redirect('codeater');
				}
			}
	}

	public function isEmailExist($email) {
 		$this->load->model('loginmodel');
 		return ($this->loginmodel->isEmailExist($email))?TRUE:FALSE;
	}
	
	public function sendmail($emailsignup) {
		$code = md5(uniqid(rand(), true));
		$to=$emailsignup;
		$sub="Code@ter Activation Mail";
		$msg="Please click on link to activate your account.\n";
		$msg.="".base_url('login')."/activate/". urlencode($emailsignup)."$code";
		$headers="From: Code@ter.\n";
		mail($to,$sub,$msg,$headers);
		return $code;
	}

	public 	function activate()
	{
		$emailsignup = urldecode($this->uri->segment(3));
		$key = $this->uri->segment(4);
		$this->load->model('loginmodel');
		if($this->loginmodel->activate($emailsignup,$key)){
			return redirect('codeater');
		}
		else {
			$this->session->set_flashdata('Error','Unable to Verify.! Try Again Later');
			return redirect('codeater');
		}
	}

	
}
?>
