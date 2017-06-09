<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('blog_model');
    }
    //ma
    public function index()
    {
        header('Access-Control-Allow-Origin:*');
        $result=$this->blog_model->get_all_blog();

        echo json_encode($result);
        
    }
    //zheng
    public function travel(){
        header('Access-Control-Allow-Origin:*');
        $login_id= $this->input->get('login_id');
        $result= $this->blog_model->get_travel($login_id);
        echo json_encode($result);
    }




    public function save_blog(){

        $id=$this->input->get('id');
        $blog_title=$this->input->get('blog_title');
        $blog_content=$this->input->get('blog_content');
        $result=$this->blog_model->save_blog($id,$blog_title,$blog_content);
        if($result){
            echo 'success';
        }
        else{
            echo 'failed';
        }
    }

    public function publish_blog(){

        $id=$this->input->get('id');
        $result=$this->blog_model->publish_notes($id);
        echo json_encode($result);
    }
    public function update_blog(){

        $id=$this->input->get('id');
        $blog_title=$this->input->get('blog_title');
        $blog_content=$this->input->get('blog_content');
        $result=$this->blog_model->update_blog($id,$blog_title,$blog_content);
        if($result){
            echo 'success';
        }
        else{
            echo 'failed';
        }
    }
    public function delete_blog(){

        $id=$this->input->get('id');
        $result=$this->blog_model->delete_blog($id);
        if($result){
            echo 'success';
        }
        else{
            echo 'failed';
        }
    }
}
