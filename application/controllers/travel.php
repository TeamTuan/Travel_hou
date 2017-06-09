<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Travel extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('travel_model');
    }

    public function travel(){
        header('Access-Control-Allow-Origin:*');
        $result= $this->travel_model->get_travel();
        echo json_encode($result);
    }

}