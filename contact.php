<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // h o n e y  p o t  f i e l d
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

 <!-- Code from homepage for the old contact form -->
<!--   <form action="contact.php" method="POST" id="contactform" enctype="multipart/form-data" role="form">
                        <div class="form-group">
                            <div class="row">
                                    <div class="col">
                                        <label for="firstname">*First name:</label>
                                        <input name="firstname" minlength="2" maxlength="10" type="text" class="form-control" id="firstname" required>
                                    </div>
                                    <div class="col">
                                        <label for="lastname">*Last name:</label>
                                        <input name="lastname" minlength="2" maxlength="16" type="text" class="form-control" id="lastname" required>
                                    </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">*Email address:</label>
                            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="Subject">*Subject:</label>
                            <input name="subject" minlength="2" maxlength="30" type="text" class="form-control" id="Subject" required> -->
                                <!-- !!!!!!!!!!!! -->
                                <!-- <label class="subject2" for="subject2"></label>
                            <input class="subject2" tabindex="-1" autocomplete="off" type="text" id="subject2" name="subject2"> -->
                                <!-- !!!!!!!!!!!! -->
                       <!--  </div>
                        <div class="form-group">    
                            <label for="Message">*Message:</label>
                            <textarea name="message" minlength="2" maxlength="800" class="form-control" id="Message" rows="8" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form> -->