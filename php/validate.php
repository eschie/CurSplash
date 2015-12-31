<?php
//If the form is submitted
if(isset($_POST['contactSubmit'])) {

  $purpose = trim($_POST['contactPurpose']);

  //Check to make sure that the name field is not empty
  if(trim($_POST['contactName']) == '') {
    $hasError = true;
  } else {
    $name = trim($_POST['contactName']);
  }

  //Check to make sure sure that a valid email address is submitted
  if(trim($_POST['contactEmail']) == '')  {
    $hasError = true;
  } else if (!preg_match('/^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$/i', trim($_POST['contactEmail']))) {
    $hasError = true;
  } else {
    $email = trim($_POST['contactEmail']);
  }

  //Check to make sure comments were entered
  if(trim($_POST['contactMessage']) == '') {
    $hasError = true;
  } else {
    if(function_exists('stripslashes')) {
      $comments = stripslashes(trim($_POST['contactMessage']));
    } else {
      $comments = trim($_POST['contactMessage']);
    }
  }

  //If there is no error, send the email
  if(!isset($hasError)) {
      $from_add = "support@cur.me";

      $to_add = "austin.eschenbach@gmail.com"; //<-- put your yahoo/gmail email address here

      $subject = "Contact Form - $purpose";

      $message = "Name: $name \r\n";
      $message .= "Email: $email \r\n";
      $message .= "Message: $comments";

      $headers = "From: $from_add \r\n";
      $headers .= "Reply-To: $from_add \r\n";
      $headers .= "Return-Path: $from_add\r\n";
      $headers .= "X-Mailer: PHP \r\n";

      if(mail($to_add,$subject,$message,$headers))
      {
        $msg = "Mail sent OK";
      }
      else
      {
         $msg = "Error sending email!";
      }

      $emailSent = true;
  }

}
?>