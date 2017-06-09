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

}