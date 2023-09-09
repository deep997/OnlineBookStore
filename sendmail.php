<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


$name = $_POST['name'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$subject=$_POST['subject'];
$message = $_POST['message'];





if(isset($_POST["send"])){
$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'mail.thaytechworks.com';//mail.drivetrucking.in
$mail->SMTPAuth = true;

$mail->Username = "info@thaytechworks.com";  // your gmail  (sender)
$mail->Password='info@999999';     //gmail APP password
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('info@thaytechworks.com','User Contact'); // your gmail  (sender)
// $mail->addAddress('walterwhite2837@gmail.com');
$mail->addAddress('thaytechworks@gmail.com');    // (reciever)






$mail->isHTML (true);
$mail->Subject = " User Contact regarding new requirment or issue";
$mail->Body = 
"Please find the below User query regarding any requirement, issue. <br><br>
" . "Name : ". $name  .
"<br>Email : " . $email  .
"<br>Contact number : " . $contactno  .
"<br>Subject : " . $subject . 
"<br>Message : " . $message . 
"<br><br>Thanks and Regards," . "<br>Thay Techworks Pvt. Ltd.";

$mail->send();


    // thank you email to the user
    $thankYouEmail = new PHPMailer(true);
    $thankYouEmail->isSMTP();
    $thankYouEmail->Host = 'mail.thaytechworks.com';
    $thankYouEmail->SMTPAuth = true;
    $thankYouEmail->Username = 'info@thaytechworks.com';
    $thankYouEmail->Password = 'info@999999';
    $thankYouEmail->SMTPSecure = 'ssl';
    $thankYouEmail->Port = 465;

    $thankYouEmail->setFrom('info@thaytechworks.com', 'Thay Techworks Pvt. Ltd.');
    $thankYouEmail->addAddress($email); // User's email address which he has submitted in form

    $thankYouEmail->isHTML(true);
    $thankYouEmail->Subject = 'Thank you for your inquiry';
    $thankYouEmail->Body = 'Dear ' . $name . "," . "<br><br>Thank you for reaching out to us through our Contact Us form. We appreciate your interest and value the opportunity to assist you. This email serves as a confirmation that we have received your message, and we will respond to your inquiry as soon as possible."
        . "<br><br>Our team is dedicated to providing excellent customer service, and we strive to address all inquiries promptly. Please note that our response time may vary depending on the volume of messages we receive. Rest assured, we will make every effort to get back to you in a timely manner."
        . "<br><br>In the meantime, we kindly ask for your patience. Should you have any additional information to provide or any further questions, please feel free to reply to this email, and we will be happy to assist you."
        . "<br><br>Once again, thank you for contacting us. We look forward to resolving your query and providing you with the assistance you require."
        . "<br><br>Best Regards,"
        . "<br>THAY TECHWORKS PVT LTD"
        . "<br><img style='width: 13%; height: 13%;'src='https://thaytechworks.com/media/logo.png' alt='Logo'>";

    $thankYouEmail->send();

    echo "
<script>
alert('Sent Successfully');

document.location.href = 'form.php';
</script> 
";
}
