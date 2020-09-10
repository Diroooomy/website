<?php
include("../database.php");
require("../model/Comment.php");
class CommentController
{
    protected $comment;
    public function setComment($name,$content)
    {
        $this->comment=new Comment($name,$content);
    }
    public function index()
    {
        $sql = "select * from comment order by create_time desc limit 6;";
        $result = $GLOBALS['conn']->query($sql);
        return $result;
    }
    public function store()
    {
        $name = $this->comment->getName();
        $content = $this->comment->getContent();
        $sql = "insert into comment (name,content)  values ('$name','$content');";
        try {
            $GLOBALS['conn']->query($sql);
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
    public function update()
    {

    }
    public function destory()
    {
        
    }
}
