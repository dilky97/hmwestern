<?php
class User_model extends CI_Model{
    public function get_users() {
        $query = $this->db->get('customer');
        if($query->num_rows()>0){
            return $query->result();
        }

    }

    public function insert_user($data){
        return $this->db->insert('customer',$data);

    }

    public function get_user($id){
        $user_query = $this->db->get_where('customer', array('id' => $id));
        if($user_query->num_rows()>0){
            return $user_query->row();
        }
    }

    public function update_user($data,$id){
        return $this->db->where('id', $id)
                        ->update('customer',$data);

    }

    public function delete_user($id){
        return $this->db->delete('customer',['id'=>$id]);
    }
}
?>