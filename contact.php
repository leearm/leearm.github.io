<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    //honey pot field
    $honeypot = $_POST['subject2'];

    $email_from = "$firstname $lastname";
    $email_subject = "leearmitstead.nz: $subject";
    $email_body = "Message: $message";

    $to = "armitstead.lee@gmail.com";
    $headers = "From $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    //check if the honeypot field is filled out. If not, send a mail.
    if( $honeypot != "" ){
        //return; you may add code here to echo an error etc.
    }else{
        mail($to,$email_subject,$email_body,$headers);
    }

    header("location: thanks.html");
?>