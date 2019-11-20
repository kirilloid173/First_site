<?php
class info
{
public $name, $age;

function gets(){
    echo "Name : ".$this->name."<br> Age : ". $this->age."<br>";
}
function __destruct(){
echo "<br>You`re called the destruct!";
}
}
$info=new info;
$info->name="Kirill";
$info->age=17;
$info->gets();
print_r($info);
class parents extends gets{
  
    public $country="Italia";
  function called(){
    parent::gets();
}
}
$parent=new parent;
print_r($parent);

?>