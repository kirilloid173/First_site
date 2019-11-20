<?php
$read_file=htmlentities(file_get_contents("Check_files.php"));
echo $read_file."<br><br>";
$new_file=fopen("Lesson.txt", "r") or die ("Can`t open the file!");
echo fread($new_file, filesize("Lesson.txt"));
fclose($new_file);
?>