<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model
{
    public function get_all_blog(){
        $sql = "select * from t_blog";
        $query = $this->db->query($sql);
        return $query->result();
    }
    //zheng
    public function get_travel($login_id){
        $sql = "select * from t_blog where user_id='$login_id'";
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function save_blog($id,$blog_title,$blog_content){
        $sql="insert into t_blog(user_id,title,content) values('$id','$blog_title','$blog_content')";
        $query=$this->db->query($sql);
        return $query;
    }
    public function publish_notes($id){
        $sql = "select * from t_blog where blog_id='$id'";
        $query = $this->db->query($sql);
        return $query->row();
    }
    public function update_blog($id,$blog_title,$blog_content){
        $sql="update t_blog set title='$blog_title',content='$blog_content' where blog_id='$id'";
        $query=$this->db->query($sql);
        return $query;
    }
    public function delete_blog($id){
        $sql="delete from t_blog where blog_id='$id'";
        $query=$this->db->query($sql);
        return $query;
    }
}