<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reply extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('reply_model');
    }
    public function insert_reply_comment(){
        $comment_id=$this->input->get("comment_id");
        $from_id=$this->input->get("from_id");
        $to_id=$this->input->get("to_id");
        $value=$this->input->get("value");
        $result=$this->reply_model->insert_reply_comment($comment_id,$from_id,$to_id,$value);
        if($result){
            echo "success";
        }else{
            echo "failed";
        }
    }
    public function insert_reply_reply(){
        $comment_id=$this->input->get("comment_id");
        $reply_id=$this->input->get("reply_id");
        $user_id=$this->input->get("user_id");
        $to_id=$this->input->get("to_id");
        $value=$this->input->get("value");
        $result=$this->reply_model->insert_reply_reply($comment_id,$reply_id,$user_id,$to_id,$value);
        if($result){
            echo "success";
        }else{
            echo "failed";
        }
    }
}
