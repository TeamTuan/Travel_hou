<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('blog_model');
    }
    public function index()
    {
        
        header('Access-Control-Allow-Origin:*');
        $result=$this->blog_model->get_all_blog();
        echo json_encode($result);
        
    }
}
