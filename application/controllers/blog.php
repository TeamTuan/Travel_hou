<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('blog_model');
    }
    public function index()
    {

        $result=$this->blog_model->get_all_blog();

        echo json_encode($result);
        
    }
    //zheng
    public function travel(){
        header('Access-Control-Allow-Origin:*');
        $result= $this->blog_model->get_travel();
        echo json_encode($result);
    }

    public function save_blog(){
        header('Access-Control-Allow-Origin:*');
        $id=$this->input->get('id');
        $imgfile = $_FILES['img'];
        $imgname = $imgfile['name'];
        $imgarr = explode('.', $imgname);
        $lastvalue = count($imgarr) - 1;
        $houname = $imgarr[$lastvalue];
        $flag = false;
        $allowed_types = array('jpg', 'png', 'ico', 'JPG');
        for ($i = 0; $i < count($allowed_types); $i++) {
            if ($allowed_types[$i] == $houname) {
                $flag = true;
            }
        }

        if ($flag == false) {
            echo "<script>alert('上传文件后缀名非法');</script>";
            redirect("http://127.0.0.1/Travel_hou/blog/index");
        } else {
            $filename = date("YmdHis") . '_' . rand(10000, 99999) . '.' . $houname;
            $path = getcwd() . '/uploads/' . $filename;
            $upload_flag = move_uploaded_file($imgfile['tmp_name'], $path);
            /*图片上传的时候，先存在C/XAMPP/TMP文件夹里的缓存中,只有调用方法才会
            移动到项目的目标文件夹，此方法是PHP原生提供的方法，返回移动的结果bool类型*/
            if ($upload_flag) {
                $img = 'uploads/' . $filename;
                $blog_title=urldecode($this->input->get('blog_title'));

                $blog_content=urldecode($this->input->get('blog_content'));


                $this->load->model('blog_model');
                $query=$this->blog_model->save_blog($blog_title, $blog_content, $img);
                if ($query) {
                    redirect("http://127.0.0.1/Travel_hou/blog/index");
                }
            } else {
                echo "请上传小于2M的图片";
            }
        }


    }
}
