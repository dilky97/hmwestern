<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class orders extends CI_Controller {

    public function Allorders()
    {
        $this->load->model('order');
        $data['details']=$this->order->allorders();

        $this->load->view('users/Allorders',$data);
    }


}