<?php
include 'database.php';
$name = $_POST['name'];
echo $name;
$sql="insert into visitor (id,name) values (null,'$name');";
if($conn->query($sql)){
    echo "插入成功";
}
else echo "fail";
