<?php

class Loginmodel extends CI_Model
{
	public function do_register($data)
	{	
		$data = array(
        	'ce_username' =>  $data['usernamesignup'],
        	'email' =>  $data['emailsignup'],
        	'password' =>  md5($data['passwordsignup']),
		'activation_code' =>  $data['activation_code']
		);
		$this->db->insert('signup',$data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function isEmailExist($email) {
 		$this->db->select('ce_id');
 		$this->db->where('email', $email);
 		$query = $this->db->get('signup');

 		if ($query->num_rows() > 0) {
 		       return TRUE;
 		} else {
    	 	return FALSE;
    		}
	}
	public 	function activate($emailsignup,$key)
	{	
		$data = array(
		'email' => $emailsignup,
		'activation_code' => $key
		);
	
		$this->db->set('activation_code', 'active');
		$this->db->where($data);
		$this->db->update('signup');
		return ($this->db->affected_rows() != 1)?FALSE:TRUE;
	}

	public function do_login($ce_username,$password)
	{
		$query = $this->db->get_where('signup', array('ce_username' => $ce_username,'password' => md5($password),'activation_code' => 'active'));		
		return $query->result();
	}

	public function isActive($ce_username,$password)
	{
		$query = $this->db->get_where('signup', array('ce_username' => $ce_username,'password' => md5($password)));
		return ($query->num_rows() > 0)?TRUE:FALSE;
	}
}	