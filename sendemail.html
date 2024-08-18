<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['btnsub'])) {
    
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'pauloshin02@gmail.com';
        $mail->Password = 'K-pop@21';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('pauloshin02@gmail.com');
        $mail->addAddress('paulobollosa@outlook.com');

        $mail->isHTML(true);
        $mail->Subject = "Mario & Asia Contact Us Page - Received Message";
        $mail->Body = "<h4>Name: $fullname <br>Email: $email <br>Subject: $subject</h4> <br><p>$message</p>";

        $mail->Send();
        $alert = '<h4 id="error">Message Sent! Thank you for contacting us.</h4>';
        
    }catch (Exception $e){
        $alert = '<h4 id="error">'.$e->getMessage().'.</h4>';
    }
}
?>