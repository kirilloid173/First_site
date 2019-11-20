<?php
setcookie("name", "age");
setcookie("country", "Moscow",time()+60);
if (isset ($_COOKIE['country'])){
    echo $_COOKIE['country'];
}
?>