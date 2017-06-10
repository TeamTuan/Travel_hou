<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Comment_model extends CI_Model
{
    public function insert_comment($scene_id,$user_id,$value){
        $sql = "insert into t_comment(comment_id,scene_id,user_id,content) values(null,'$scene_id','$user_id','$value')";
        $query = $this->db->query($sql);
        return $query;
    }

}