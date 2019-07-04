<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('User_model');
		$customer_details = $this->User_model->get_users();
		/* echo '<pre>';
		print_r($customer_details);
		echo '</pre>'; */
		$this->load->view('view_user',['customers'=>$customer_details]);
	}

	//Functions to CRUD customer

	public function create_user(){
		$this->load->view('user_profile');
	}

	public function edit_user($id){
		$this->load->model('User_model');
		$user = $this->User_model->get_user($id);
		$this->load->view('update_user',['user'=>$user]);

	}
	public function delete_user($id){
		$this->load->model('User_model');
		if($this->User_model->delete_user($id)){
			$this->session->set_flashdata('msg','User deleted successfully');
		}
		else{
			$this->session->set_flashdata('msg','Failed to Delete');

		}
		return redirect('welcome');
	}

	public function save_user(){
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('address_line1', 'Address', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_rules('postal_code', 'Postal Code', 'required');


		if ($this->form_validation->run())
		{
			$user_data = $this->input->post();
			unset($user_data['save_user']);
			$this->load->model('User_model');
			
			if($this->User_model->insert_user($user_data)){
				$this->session->set_flashdata('msg','User added successfully');
			}
			else{
				$this->session->set_flashdata('msg','Failed to Register');
			}
			return redirect('welcome');
		}
		else
		{
			$this->load->view('user_profile');
		}
	}

	public function update_user($id){
		echo $id;
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('address_line1', 'Address', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_rules('postal_code', 'Postal Code', 'required');


		if ($this->form_validation->run())
		{
			$user_data = $this->input->post();
			unset($user_data['update_user']);
			$this->load->model('User_model');
			
			if($this->User_model->update_user($user_data,$id)){
				$this->session->set_flashdata('msg','User Updated successfully');
			}
			else{
				$this->session->set_flashdata('msg','Failed to Update');
			}
			return redirect('welcome');
		}
		else
		{
			$this->load->view('user_profile');
		}

	}

	public function view_a_user($id){
		$this->load->model('User_model');
		$user = $this->User_model->get_user($id);
		$this->load->view('view_a_user',['user'=>$user]);
	}

	//Functions to register a user in the system

	
}
?>