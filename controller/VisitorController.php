<?php
include("../database.php");
require("../model/Visitor.php");
class VisitorController
{
    protected $visitor;
    function __construct($name)
    {   
        $this->visitor=new Visitor($name);
        $sql = "select max(id) from visitor;";
        $result=$GLOBALS['conn']->query($sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['max(id)']+1;
            }
        }
        $this->visitor->setID($id);
    }
    public function index()
    {
        $visitor=array(
            'id' => $this->visitor->getID(),
            'name' => $this->visitor->getName()
        );
        return $visitor;
    }
    public function store()
    {
        $name = $this->visitor->getName();
        $sql = "insert into visitor (name)  values ('$name');";
        try {
            $GLOBALS['conn']->query($sql);
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
    public function update($newname)
    {
        $name = $this->visitor->getName();
        $sql = "update visitor set name='$newname' where name='$name';";
        try {
            $GLOBALS['conn']->query($sql);
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    public static function destory()
    {
        
    }
    public static function getMaxID(){
        $sql = "select max(id) from visitor;";
        $result=$GLOBALS['conn']->query($sql);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($GLOBALS['conn']));
            exit();
        }
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['max(id)'];
            }
        }
    }
}
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $sql = "insert into visitor (name)  values ('$name');";
    $conn->query($sql);
    header("refresh:0;url=../view/mainpage.php");
}

