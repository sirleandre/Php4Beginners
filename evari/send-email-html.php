<?php
$to = 'justinzir@gmail.com';
$subject = 'Marriage Proposal';
$from = 'sirleandre@gmail.com';

//To send HTML mail, the content-type header must be sent
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers = 'Content-type: text/html; charset=iso-88591' . "\r\n";


//Create email headers
$headers .= 'From: '.$form."\r\n".
    'Reply-To: '.$form."\r\n" .
    'X-Mailer: PHP/' .phpversion();

//Compose a simple HTML email message
$message = '<html><body>';
$message = '<h1 style="color:#f40;">Hi Zir!</h1>';
$message = '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
$message = '</body></html>';


//Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
 } else {
     echo 'Unable to send email. Please try again';
    }
?>
