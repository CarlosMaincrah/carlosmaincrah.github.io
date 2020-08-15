<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = "Contact Form";
  $myMail = "croc1110@hotmail.com";
  $message = $_POST['message'];
  $mailFrom = $_POST['email'];
  $headers = "From:".$mailFrom;
  
  mail($myMail, $subject, $message, $headers);
  header("Location: index.php?mailsend");
  }
