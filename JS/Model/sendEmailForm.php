<?php
if(isset($_POST['submit']))
{
    $form = $_POST['contact'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $need = $_POST['need'];
    $message = $_POST['message'];
    
    $to = "celeste@celesteartley.com";
    $subject = "A visited you from your website and filled out your form.";
    $headers = "From: ".$email;
    
    $email_body = " Name: ".$name." ".$surname ."\n Email: ".$email ."\n They needed to: ".$need.". \n The message they wrote: ".$message;
    
    mail($to,$subject,$email_body,$headers);
    header("Location: ../../index.html?mailsent");
}

?>

