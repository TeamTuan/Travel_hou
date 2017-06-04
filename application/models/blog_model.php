<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model
{
    public function get_all_blog(){
        $sql = "select * from t_blog";
        $query = $this->db->query($sql);
        return $query->result();
    }
}