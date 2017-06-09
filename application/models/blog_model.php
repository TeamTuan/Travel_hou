<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model
{
    public function get_all_blog(){
        $sql = "select * from t_blog";
        $query = $this->db->query($sql);
        return $query->result();
    }
    //zheng
    public function get_travel(){
        $sql = "select * from t_blog";
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function save_blog($blog_title,$blog_content,$img){
        $query=$this->db->query("insert into t_blog(title,content,photo) values
('$blog_title','$blog_content','$img')");
        var_dump('query');
        die();
        return $query;
    }
}