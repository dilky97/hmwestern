<?php
class Blog extends CI_Controller {

        public function index()
        {
            $this->load->view('insert_info');
        }

        public function form_validation()
        {
                $this->load->library('form_validation');

                $conf_rules = array(
                        array(
                                'field' => 'first_name',
                                'label' => 'First Name',
                                'rules' => 'required'
                        ),
                        array(
                                'field' => 'last_name',
                                'label' => 'Last Name',
                                'rules' => 'required',
                                'errors' => array(
                                        'required' => 'You must provide a %s.',
                                ),
                        ),
                        array(
                                'field' => 'email',
                                'label' => 'E-mail',
                                'rules' => 'required|valid_email'
                        ),
                        array(
                                'field' => 'address_line1',
                                'label' => 'Address Line',
                                'rules' => 'required'
                        ),
                        array(
                                'field' => 'city',
                                'label' => 'City',
                                'rules' => 'required'
                        ),
                        array(
                                'field' => 'country',
                                'label' => 'country',
                                'rules' => 'required'
                        )
                );
                
                $this->form_validation->set_rules($conf_rules);

                if($this->form_validation->run()){
                        $this->load->model('Names_model');
                }
                else{
                        $this->index();
                }

        }

        public function sum($num1, $num2)
        {
                $total = $num1+$num2;
                echo "Sum of your numbers is ";
                echo $total;
        }

        public function dispar($id,$name,$qty,$price)
        {
                echo 'Product Id '. $id .'\n';
                echo 'Product Name'.$name.'\n';
                echo 'Product Quantity'.$qty.'\n';
                echo 'Product Price'.$price.'\n';
        }

        public function simple_view(){
                $this->load->view('blogview');
        }

        public function value_pass($par){
                $data['namex']=$par;
                $this->load->view('blogview',$data);
        }

        public function get_data($id){
                $this->load->model('Names_model');
                $data['name'] = $this->Names_model->get_details($id);
                $this->load->view('blogview',$data);
        }
}