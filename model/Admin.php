<?php
class Admin
{
    protected $name;
    protected $birth;
    protected $hobby;
    protected $qq;
    protected $wechat;
    protected $github;
    protected $ename;
    protected $number;
    protected $college;
    protected $major;
    protected $e_mail;
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name=$name;
    }

    public function getBirth()
    {
        return $this->birth;
    }
    public function setBirth($birth)
    {
        $this->birth=$birth;
    }

    public function getQQ()
    {
        return $this->qq;
    }
    public function setQQ($qq)
    {
        $this->qq=$qq;
    }
    public function getWechat()
    {
        return $this->wechat;
    }
    public function setWechat($wechat)
    {
        $this->wechat=$wechat;
    }
    public function getGithub()
    {
        return $this->hobby;
    }
    public function setGithub($github)
    {
        $this->github=$github;
    }
    public function getHobby()
    {
        return $this->hobby;
    }
    public function setHobby($hobby)
    {
        $this->hobby=$hobby;
    }
    public function getEnname()
    {
        return $this->enname;
    }
    public function setEnname($enname)
    {
        $this->enname=$enname;
    }
    public function getNumber()
    {
        return $this->number;
    }
    public function setNumber($number)
    {
        $this->number=$number;
    }
    public function getMajor()
    {
        return $this->major;
    }
    public function setMajor($major)
    {
        $this->major=$major;
    }
    public function getCollege()
    {
        return $this->college;
    }
    public function setCollege($college)
    {
        $this->college=$college;
    }
    public function getEmail()
    {
        return $this->e_mail;
    }
    public function setEmail($e_mail)
    {
        $this->e_mail=$e_mail;
    }
    

}