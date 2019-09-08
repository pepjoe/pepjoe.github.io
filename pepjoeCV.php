<?php
$name=$_POST['name'];
$email=$_POST['email'];
$title=$_POST['title'];
$message=$_POST['message'];
$fp = fopen("data.txt", "a");
$savestring = $name . "," . $email . "," . $title. "," . $message . "n";
fwrite($fp, $savestring);
fclose($fp);
echo "<h1>Your data has been saved in a text file!</h1>;
?>
