<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('comment_model');
    }
    public function insert_comment(){
        $scene_id=$this->input->get("scene_id");
        $user_id=$this->input->get("user_id");
        $value=$this->input->get("value");
        $result=$this->comment_model->insert_comment($scene_id,$user_id,$value);
        if($result){
            echo "success";
        }else{
            echo "failed";
        }
    }

}
