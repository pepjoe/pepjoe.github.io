<?php
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $title=$_POST['Title'];
    $message=$_POST['Message'];
    $both = "Name; ". $name . " ," ."Email: ". $email . " ,"."Title: ". $title." ,". "Message: ".$message;
    $fp = fopen('file.txt', 'a');
    fwrite($fp, $both);
    fclose($fp);
?>
