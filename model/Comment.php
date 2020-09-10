<?php
class Comment
{
    protected $name;
    protected $content;
    function __construct($name,$content)
    {
        $this->name=$name;
        $this->content=$content;
    }
    public function setName($name)
    {
        $this->name=$name;
    }
    public function setContent($content)
    {
        $this->content=$content;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getContent()
    {
        return $this->content;
    }

}