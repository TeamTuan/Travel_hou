<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Reply_model extends CI_Model
{
    public function insert_reply_comment($comment_id,$from_id,$to_id,$value){
        $sql = "insert into t_reply(reply_id,comment_id,type,parent_id,content,from_userid,to_userid) values(null,'$comment_id','1','$comment_id','$value','$from_id','$to_id')";
        $query = $this->db->query($sql);
        return $query;
    }
    public function insert_reply_reply($comment_id,$reply_id,$user_id,$to_id,$value){
        $sql = "insert into t_reply(reply_id,comment_id,type,parent_id,content,from_userid,to_userid) values(null,'$comment_id','0','$reply_id','$value','$user_id','$to_id')";
        $query = $this->db->query($sql);
        return $query;
    }
}