<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('Product_model');
    }
    
    function index(){
        $data = array();
        
        // Fetch products from the database
        $data['products'] = $this->Product_model->getRows();
        
        // Load the product list view
        $this->load->view('header');
        $this->load->view('/products/product_list',$data);
        $this->load->view('footer');
    }
    
    function addToCart($proID){
        
        // Fetch specific product by ID
        $product = $this->Product_model->getRows($proID);
        
        // Add product to the cart
        $data = array(
            'id'    => $product['product_id'],
            'qty'    => 1,
            'price'    => $product['product_price'],
            'name'    => $product['product_name'],
            'image' => $product['product_img']
        );
        $this->cart->insert($data);
        
        // Redirect to the cart page
        redirect('/Order');
    }
    
}