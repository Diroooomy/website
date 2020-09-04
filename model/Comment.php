<?php
class Comment
{
    protected $name;
    protected $content;

    function __construct($content)
    {
        $this->content=$content;
    }
    public function setName($nam)
    {
        $this->name=$nam;
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