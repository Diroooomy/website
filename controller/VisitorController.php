<?php
include '../database.php';
include '../model/Visitor.php';
class VisitorController
{
    
    public static function store($visitor)
    {
        $name = $visitor->getName();
        $sql = "insert into visitor (name)  values ('$name');";
        try {
            $GLOBALS['conn']->query($sql);
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
    public static function update($visitor,$newname)
    {
        $name = $visitor->getName();
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
    $visitor = new Visitor($_POST['name']);
    VisitorController::store($visitor);
    header("refresh:0;url=../view/mainpage.php");
}

