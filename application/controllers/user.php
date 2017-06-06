<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model');
    }
    public function index(){

        header('Access-Control-Allow-Origin:*');

        $tel=$this->input->get("tel");
        $password=$this->input->get("password");
        $result=$this->user_model->check_login($tel,$password);
        if($result){
            $newdata = array(
                'login'  => true
            );
            $this->session->set_userdata($newdata);
            $obj["login"]=$this->session->userdata('login');
            $obj["user_id"]=$result->user_id;
            echo json_encode($obj);
        }else{
            echo 'failed';
        }

    }
    public function select_user_by_id(){
        header('Access-Control-Allow-Origin:*');
        $id=$this->input->get('id');
        $result=$this->user_model->select_user_by_id($id);
        echo json_encode($result);
    }
}
