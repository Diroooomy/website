<?php
require("../database.php");
require("../model/Admin.php");
class AdminController
{
    protected $admin;
    function __construct()
    {
        $this->admin=new Admin();
        $sql="select * from admin where id='1';";
        $result=$GLOBALS['conn']->query($sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $this->admin->setName($row['name']);
                $this->admin->setBirth($row['birth']);
                $this->admin->setHobby(json_decode($row['hobby']));
                $this->admin->setQQ($row['qq']);
                $this->admin->setWechat($row['wechat']);
                $this->admin->setGithub($row['github']);
                $this->admin->setEnname($row['enname']);
                $this->admin->setNumber($row['number']);
                $this->admin->setCollege($row['college']);
                $this->admin->setMajor($row['major']);
                $this->admin->setEmail($row['e_mail']);
            }
        }
    }
    public function index()
    {
        $admin=array(
            'name'=>$this->admin->getName(),
            'birth'=>$this->admin->getBirth(),
            'hobby' => $this->admin->getHobby(),
            'qq' => $this->admin->getQQ(),
            'wechat' => $this->admin->getWechat(),
            'github' => $this->admin->getGithub(),
            'enname' => $this->admin->getEnname(),
            'college' => $this->admin->getCollege(),
            'major' => $this->admin->getMajor(),
            'number' => $this->admin->getNumber(),
            'e_mail' => $this->admin->getEmail()
        );
        return $admin;
    }
    public function store()
    {

    }
    public function getAdmin()
    {
        return $this->admin;
    }
    public function update($admin)
    {
        $this->admin=$admin;  
    }
    public function delete()
    {

    }
}
