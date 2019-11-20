<?php
include_once 'includes/Mysql.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<style>
html{
    font-size: 26px;
}
</style>
<body>
<h3>Вход на сайт</h3>
<form action="login.php" method="POST">
    Логин: <input type="text" name="login" /><br><br>
    Пароль: <input type="text" name="password" /><br><br>
    <input type="submit" value="Войти">
    <input type="submit" value="Войти">
</form>
<form action="Processing.php" method="POST">
<input type="submit" value="Get info">
</form>
<br><br>
<form action="radios.php" method="POST">
C++: <input type="radio" name="langs" value="C++"/>
PHP: <input type="radio" name="langs" value="PHP"/>
Java: <input type="radio" name="langs" value="Java"/>
<input type="submit" value="check the radio"/>
</form>
<form action="cookie.php">
<input type="submit" value="Click for call cookie">
</form>
<br><br>
<form action="Session.php" method="POST">
<input type="submit" value="Press for activate page of Session PHP">
</form><br>
<form action="Read_files.php" method="POST">
<input type="submit" value="Read the text file">

</form>
<br>
<form action="Jumps.php" method="POST">
    <input type="submit" value="For jump the file">
</form>
<form action="upload.php" method="POST">
<input type="submit" value="For upload files on server">
</form>
<form action="classes.php" method="POST"><br>
<input type="submit" value="Activate classes.php">
</form>
<form action="Mysql.php" method="POST"><br><br>
    <input type="submit" value="check Mysql">
</form>
<form action="create_table.php" method="POST">
<input type="submit" value="Create table carefull!">    
</form>
<form action="Delete_table.php" method="POST">
<input type="submit" value="Delete table">
</form>
<form action="insert.php" method="POST">
<input type="submit" value="Add data">
</form>
</body>

</html>