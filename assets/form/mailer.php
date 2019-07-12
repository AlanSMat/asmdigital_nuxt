<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
/**
 * This example shows making an SMTP connection without using authentication.
 */
//Import the PHPMailer class into the global namespace
//use PHPMailer\PHPMailer\PHPMailer;
include('config.php');

require_once(INCLUDES_PATH . '/phpmailer/src/PHPMailer.php');
require_once(INCLUDES_PATH . '/phpmailer/src/Exception.php');
require_once(INCLUDES_PATH . '/phpmailer/src/SMTP.php');
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set("Australia/Sydney");
//require '../vendor/autoload.php';
define('EMAIL_FROM','steve@asmather.com');
define('EMAIL_TO','steve@asmather.com');
define('REPLY_TO','steve@asmather.com');
define('EMAIL_SUBJECT','ASM Digital Form Submission');

$email_body  = "Name: "   .  $_POST['contactName']    . "\r\n";
$email_body .= "Phone: "   . $_POST['contactPhone']   . "\r\n";
$email_body .= "Email: "   . $_POST['contactEmail']   . "\r\n";
$email_body .= "Message: " . $_POST['contactMessage'] . "\r\n";

define('EMAIL_BODY',$email_body);

$file = 'log.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= EMAIL_BODY . "\r\n";
// Write the contents back to the file
file_put_contents($file, $current);


//Create a new PHPMailer instance
//$mail = new PHPMailer(true);

//try {
    //Server settings
    //$mail->SMTPDebug = 0;                                       // Enable verbose debug output
    //$mail->isSMTP();                                            // Set mailer to use SMTP
    //$mail->Host       = INCOMING_MAIL_SERVER;  // Specify main and backup SMTP servers
    //$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    //$mail->Username   = SMTP_USER;                     // SMTP username
    //$mail->Password   = SMTP_PASS;                               // SMTP password
    //$mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    //$mail->Port       = OUTGOING_SERVER_PORT;                                    // TCP port to connect to

    //Recipients
    //$mail->setFrom(EMAIL_FROM, EMAIL_SUBJECT);
    //$mail->addAddress(EMAIL_TO, 'Info');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo(REPLY_TO, 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    // $mail->isHTML(false);                                  // Set email format to HTML
    // $mail->Subject = EMAIL_SUBJECT;
    // $mail->Body    = EMAIL_BODY;
    //$mail->AltBody = EMAIL_BODY;

    //$mail->send();    
//} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//}
?>