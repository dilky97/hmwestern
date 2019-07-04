<?php
class Register extends CI_Controller{

    function __construct()
	{
		parent::__construct();
		$this->load->model('Register_model');
	}

    public function index(){
		$this->load->view('login');

	}
	public function view_reg(){
		$this->load->view('register_user');
	}
	
	function register_user(){
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email|callback_if_email_exists');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[10]');
		$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'trim|required|matches[password]');

		if ($this->form_validation->run())
		{
			$register_data = array(
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('email'))
			 );
			//unset($register_data['register_user']);
			
			if($this->Register_model->register_user($register_data)){
				$this->session->set_flashdata('msg','User added successfully');
			}
			else{
				$this->session->set_flashdata('msg','Failed to Register');
			}
			return redirect('welcome/create_user');
		}
		else
		{
			$this->load->view('register_user');
		}

	}

	function if_email_exists($req_email){
		$email_available = $this->Register_model->check_if_email_exists($req_email);

		if($email_available){
			echo "You have already registered";
			return TRUE;
		}
		else{
			return FALSE;
		}

	}

	function login_user(){
		$query = $this->Register_model->validate_user();

		if($query){
			$data = array(
				'email' => $this->input->post('email'),
				'is_logged_in' =>true

			);
			$this->session->set_userdata($data);
			redirect('welcome/create_user');
		}
		else{
			$this->index();
		}
	}




    
}

?>