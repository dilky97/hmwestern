<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class order extends CI_Model{

    public function allorders()
    {
        if($slug === FALSE)
        {
            $this->db->select('products.product_id AS ID,
            products.product_name AS Name,
            products.product_img AS Img,
            products.decription AS Detail,
            products.product_price AS Price');
            $this->db->from('products');
            $this->db->join('order_product', 'products.product_id = order_product.product_id');
            $this->db->join('orders', 'order_product.order_id = orders.order_id');
            $query = $this->db->get();

            return $query->result_array();
        }

        $query = $this->db->get_where('products');
        return $query->row_array();
    }



}



