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
				return redirect('');   
			}
			else{	
				$data['activation_code'] = $this->sendmail($data['emailsignup']);
				$this->load->model('loginmodel');
				if( $this->loginmodel->do_register($data))
				{
					$this->session->set_flashdata('successRegister','Successfully registered.!');
					return redirect('');
				}
				else{
					$this->session->set_flashdata('Error','Some Error Occured..Try Again Later..!');
					return redirect('');
				}
			}
	}

	public function isEmailExist($email) {
 		$this->load->model('loginmodel');
 		return ($this->loginmodel->isEmailExist($email))?TRUE:FALSE;
	}
	
	public function sendmail($emailsignup) {
		$this->load->library('email');
		$code = md5(uniqid(rand(), true));
		$to=$emailsignup;
		$sub="Code@ter Activation Mail";
		$msg="Please click on link to activate your account.\n";
		$msg.="".base_url('login')."/activate/". urlencode($emailsignup)."$code";
		$headers="From: Code@ter.\n";
		//mail($to,$sub,$msg,$headers);

		$this->email->from('no-reply@codeaters.com', $headers);
		$this->email->to($to);
		 
		$this->email->subject($sub);
		$this->email->message($msg);
		$this->email->send();

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

	public function do_login()
	{
		$ce_username=$this->input->post('username');
		$password=$this->input->post('password');

		$this->load->model('loginmodel');

		if($this->loginmodel->isActive($ce_username,$password))
		{
			$user=$this->loginmodel->do_login($ce_username,$password);
			if( $user[0]->ce_id )
			{
				$this->session->set_userdata('user_id',$user[0]->ce_id);
				$redirect_url = $this->session->userdata('redirect_back');
    				redirect( $redirect_url );
			}
			else
			{
				$this->session->set_flashdata('errorVerify','Please go to the registered Email address to verify your account.!');	
				 return redirect('login/show_signup');	
			}
		}
		else {
			
			$this->session->set_flashdata('login_failed','Invalid Email Or Password');
			return redirect('login/show_signup');
		}
		
	}

	public function do_logout()
	{
		$this->session->unset_userdata('user_id');
		$redirect_url = $this->session->userdata('redirect_back');
		redirect( $redirect_url );
	}		
}
?>
