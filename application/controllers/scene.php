<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Scene extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('scene_model');
    }

    public function get_scene_like(){
        header('Access-Control-Allow-Origin:*');
        $value=$this->input->get("value");
        $result= $this->scene_model->get_scene_like($value);
        echo json_encode($result);
    }
    public function publish_scene(){

        $id=$this->input->get('id');
        $result=$this->scene_model->publish_scene($id);
        echo json_encode($result);
    }
    public function select_comment_by_scene_id(){
        $id=$this->input->get('id');
        $result=$this->scene_model->select_comment_by_scene_id($id);
        echo json_encode($result);
    }
    public function select_reply_by_comment_id(){
        $id=$this->input->get('id');
        $result=$this->scene_model->select_reply_by_comment_id($id);
        echo json_encode($result);
    }
}