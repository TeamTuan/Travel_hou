<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function check_login($tel,$password){
        $sql = "select * from t_user where tel='$tel' and password='$password' ";
        $query = $this->db->query($sql);
        return $query->row();
    }
    public function select_user_by_id($id){
        $sql="select * from t_user where user_id='$id'";
        $query=$this->db->query($sql);
        return $query->row();
    }
}