<?php
class Register_model extends CI_Model{
    function __construct()
	{
		parent::__construct();
	}
	
	function check_if_email_exists($email)
	{
		$this->db->where('email',$email);
		$result = $this->db->get('user');

		if($result->num_rows() >0){
			return FALSE;
		}
		else{
			return TRUE;
		}
	}
	
	function register_user($data)
	{
		$insert = $this->db->insert('user', $data);
		return $insert;

	}

	function validate_user(){
		$this->db->where('email',$this->input->post('email'));
		$this->db->where('password', md5($this->input->post('password')));
		$result = $this->db->get('user');

		if($result->num_rows==1){
			return true;
		}

	}












}
?>