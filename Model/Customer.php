<?php
declare(strict_types=1);

class Customer
{
 private $id;
 private $name;
 private $groupID;
 public function __construct($id,$name,$groupID)
 {
     $this->id = $id;
     $this->name = $name;
     $this->groupID= $groupID;
 }
}