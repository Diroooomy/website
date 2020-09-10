<?php
class Visitor
{
  /* 成员变量 */
  protected $id;
  protected $name; 
  function __construct($name)
  {
      $this->name=$name;
  }
  /* 成员函数 */
  public function setName($name)
  {
     $this->name = $name;
  }
  public function getName()
  {
     return $this->name; 
  }
  public function setID($id)
  {
     $this->id = $id;
  }
  public function getID()
  {
     return $this->id; 
  }
}

