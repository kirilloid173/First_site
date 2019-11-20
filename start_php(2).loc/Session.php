<?php 
$b=35;
$_SESSION['b']=$b;
$b=$_SESSION['b'];
session_start();
$_SESSION['country']="Russian Federation";
$_SESSION['age']="45";
if (isset($_SESSION['country'])&& isset($_SESSION['age'])){
    $country=$_SESSION['country'];
    $age=$_SESSION['age'];
    echo "Age : ". $age." you`re from : ".$country."<br><br>";
echo("Info for programmer : ". session_id() . " <br> ". session_name() );
session_destroy();
}

?>