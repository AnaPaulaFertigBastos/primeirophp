<?php  
//Composer's autoload file loads all necessary files
require 'vendor/autoload.php';

$mail = new PHPMailer;

$mail->isSMTP();  // Set mailer to use SMTP
$mail->Host = 'smtp.mailgun.org';  // Specify mailgun SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'postmaster@sandboxe70ea0a3e07543a7b8770caf3ebd2207.mailgun.org'; // SMTP username from https://mailgun.com/cp/domains
$mail->Password = 'c8b48809c024d9bf2d0fb0efd5c8acb3-7ca144d2-38057aea'; // SMTP password from https://mailgun.com/cp/domains
$mail->SMTPSecure = 'tls';   // Enable encryption, 'ssl'

$mail->From = 'sender@domain.com'; // The FROM field, the address sending the email 
$mail->FromName = 'Orlie'; // The NAME field which will be displayed on arrival by the email client
$mail->addAddress('recipient@domain.net', 'BOB');     // Recipient's email address and optionally a name to identify him
$mail->isHTML(true);   // Set email to be sent as HTML, if you are planning on sending plain text email just set it to false

// The following is self explanatory
$mail->Subject = 'Email sent with Mailgun';
$mail->Body    = '<span style="color: red">Mailgun rocks</span>, thank you <em>phpmailer</em> for making emailing easy using this <b>tool!</b>';
$mail->AltBody = 'Mailgun rocks, shame you cant see the html sent with phpmailer so youre seeing this instead';

if(!$mail->send()) {  
    echo "Message hasn't been sent.";
    echo 'Mailer Error: ' . $mail->ErrorInfo . "n";
} else {
    echo "Message has been sent  n";

}
?>