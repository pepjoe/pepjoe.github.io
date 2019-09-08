<?php
$myemail = 'josephaetim@gmail.com';
if (isset($_POST['submit'])){
   $title = $_POST['title'];
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];
   
   echo "Name:".$_POST['name'] . '<br>';
   echo "Email:".$_POST['email'] . '<br>';
   echo "Title:".$_POST['title'] . '<br>';
   echo "Message:".$_POST['message'] . '<br>';
}

function pre_r( $array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>
