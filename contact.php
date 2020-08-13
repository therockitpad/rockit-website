<?php
//variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$subject = $_REQUEST['Subject'];
$message = $_REQUEST['Message'];

//check input fields
if (empty($name) || empty($email) || empty($subject) || empty($message))
{
    echo "Please fill all the fields";
}
else 
{
    mail("therockitpad07@gmail.com", "RockIT Message", $message, "From: $name <$email>");
    echo "<script type='text/javascript'>alert('Your message sent successfully');window.history.log(-1);</script>";
}

?>