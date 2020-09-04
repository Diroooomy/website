<?php
class Visitor
{
  /* 成员变量 */
  protected $name; 
  /* 成员函数 */
  public function setName($nam){
     $this->name = $nam;
  }
  
  public function getName(){
     return $this->name; 
  }
}