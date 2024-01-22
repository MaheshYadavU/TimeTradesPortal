<?php

include '../constants/settings.php';

$myfname = ucwords($_POST['fullname']);
$myemail = $_POST['email'];
$mymessage = $_POST['message'];





$mail = mail($myemail,$myfname,$mymessage);

 
if($mail) {
header("location:../contact.php?r=2974");
} else {
header("location:../contact.php?r=5634");
}

?>