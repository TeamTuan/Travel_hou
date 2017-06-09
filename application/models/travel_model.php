<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Travel_model extends CI_Model
{
    public function get_travel(){
        $sql = "select * from t_scene";
        $query = $this->db->query($sql);
        return $query->result();
    }

}