<?php

//Send Mail Function Using SMTP
function sendMail($subject,$message,$to){
    include_once SRV_ROOT.'models/smtp/PHPMailer.php';
    include_once SRV_ROOT.'models/smtp/Exception.php';
    include_once SRV_ROOT.'models/smtp/SMTP.php'; 
    
    $mail = new \PHPMailer\PHPMailer\PHPMailer();
    
    $mail->isSMTP();
    $mail->CharSet = 'UTF-8';

    $mail->SMTPAuth = true;
    $mail->Username = 'demo@domain.com';
    $mail->Password = 'demo123@';
    $mail->Host = 'domain.com'; //Server Host

    $mail->From = 'demo@domain.com';
    $mail->FromName = 'Eric Devopers';
    $mail->Subject = $subject;

    $mail->isHTML();
    $mail->msgHTML($message);
    $mail->addAddress($to);

    $mail->send();             
}