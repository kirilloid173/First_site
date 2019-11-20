<?php
require_once 'Mysql.php';
 
$link = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) 
    or die("Ошибка " . mysqli_error($link));
 
$query ="DROP TABLE tovars";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "Удаление таблицы прошло успешно";
}
 
mysqli_close($link);
?>