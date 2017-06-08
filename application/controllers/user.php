<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    //chen
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
    }
    //chen
    public function index(){

        header('Access-Control-Allow-Origin:*');

        $tel=$this->input->get("tel");
        $password=$this->input->get("password");
        $result=$this->user_model->check_login($tel,$password);
        if($result){
            $id=$result->user_id;
            echo json_encode($id);
        }


    }
    //chen
    public function select_user_by_id(){
        header('Access-Control-Allow-Origin:*');
        $id=$this->input->get('id');
        $result=$this->user_model->select_user_by_id($id);
        echo json_encode($result);
    }
    //chen
    public function save_introduction(){
        header('Access-Control-Allow-Origin:*');
        $id=$this->input->get('id');
        $value=urldecode($this->input->get('value'));
        $result=$this->user_model->save_introduction($id,$value);
        if($result){
            echo 'success';
        }
        else{
            echo 'failed';
        }
    }
}
