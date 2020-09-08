<?php

if (issets(($_POST['submit'])) {
  $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "projectnamedorpheus@gmail.com";
$subject = "feedback";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("error!");
header("Location: index.php?mailsend")
echo "thank you!";
}
?>
