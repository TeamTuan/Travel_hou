<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    //chen
    public function check_login($tel,$password){
        $sql = "select * from t_user where tel='$tel' and password='$password' ";
        $query = $this->db->query($sql);
        return $query->row();
    }
    //chen
    public function select_user_by_id($id){
        $sql="select * from t_user where user_id='$id'";
        $query=$this->db->query($sql);
        return $query->row();
    }
    //chen
    public function save_introduction($id,$value){
        $sql="update t_user set construction='$value' where user_id='$id'";
        $query=$this->db->query($sql);
        return $query;
    }
}