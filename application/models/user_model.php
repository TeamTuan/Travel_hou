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
    //chen
    public function save_name($id,$value){
        $sql="update t_user set name='$value' where user_id='$id'";
        $query=$this->db->query($sql);
        return $query;
    }
    //chen
    public function save_sex($id,$value){
        $sql="update t_user set sex='$value' where user_id='$id'";
        $query=$this->db->query($sql);
        return $query;
    }
    //chen
    public function check_tel($value){
        $sql="select * from t_user where tel='$value'";
        $query=$this->db->query($sql);
        return $query->row();
    }
    //chen
    public function insert_user($tel,$password){
        $sql="insert into t_user(user_id,tel,password) values(null,'$tel','$password')";
        $query=$this->db->query($sql);
        return $query;
    }
}