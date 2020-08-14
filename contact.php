<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_fron = 'RockIT Digital';
    $email_subject = 'New Message from RockIT Digital';
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Message: $message.\n";
    $to ="therockitpad07@gmail.com";
    $headers ="From: $email_fron \r\n";
    $headers .="Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");


?>