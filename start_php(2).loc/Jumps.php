<?php
if (!rename("Lesson.txt", "Jumps/Lesson.txt")){
    echo "Wrong or error<br>";
}else{
    echo "You`re are successful jumped the file!";
}
if (copy("Lesson.txt", "Lesson_copy.txt")){
    echo "Copied! <br>";
}else{                                             //All this is don`t will work because I all this is done.
    echo "We can`t copied you`re file sorry!<br>";
}
if (mkdir("From mkdir")){
echo "you`re create a folder!<br>";
}else{
    echo "Sorry but we can`t create a file!<br>";
}
if (rmdir("From mkdir")){
    echo "file deleted<br>";
}else{
    echo "file don`t deleted<br>";
}
?>