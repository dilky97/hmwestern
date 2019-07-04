<?php
class Names_model extends CI_Model{
    public function get_details($id) {
        $data['id'] = 324;
        $data['first_name'] = 'Dilky';
        $data['last_name'] = 'Felsinger';
        $data['address'] = 'UCSC';

        return $data;
    }

    public function insert_data($data){

        $this->db->insert("users",$data);
    }
}
?>