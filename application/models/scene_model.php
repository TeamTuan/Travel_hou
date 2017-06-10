<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Scene_model extends CI_Model
{
    public function get_scene_like($value){
        $sql = "select * from t_scene where name like '%$value%' limit 0,4";
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function publish_scene($id){
        $sql = "select * from t_scene where scene_id='$id'";
        $query = $this->db->query($sql);
        return $query->row();
    }
    public function select_comment_by_scene_id($id){
        $sql = "select * from t_comment,t_user where t_comment.scene_id='$id' and t_comment.user_id=t_user.user_id";
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function select_reply_by_comment_id($id){
        $sql = "select * from t_reply where comment_id='$id'";
        $query = $this->db->query($sql);
        return $query->result();
    }
}