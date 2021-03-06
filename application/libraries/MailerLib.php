<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class MailerLib
{
    public function __construct(){
        log_message('Debug', 'PHPMailer class is loaded.');
    }

    public function load(){
        // Include PHPMailer library files
        require_once APPPATH.'third_party/PHPMailer/Exception.php';
        require_once APPPATH.'third_party/PHPMailer/PHPMailer.php';
        require_once APPPATH.'third_party/PHPMailer/SMTP.php';
        
        $mail = new PHPMailer;
        return $mail;
    }
    public function pushMail($Sub,$Msg,$To){
        
        // PHPMailer object
        $mail = $this->load();
        $mail->isSMTP();
        $mail->Host     = 'ssl://smtp.googlemail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'aasit.analyst@gmail.com';
        $mail->Password = 'iConnect2Me';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
        
        $mail->setFrom('aasit.analyst@gmail.com', 'KVS-PIS');
        $mail->addReplyTo('aasit.analyst@gmail.com', 'KVS-PIS');
        
        // Add a recipient
        $mail->addAddress($To);
        // Add cc or bcc 
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        
        $mail->Subject = $Sub;
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mailContent = $Msg;
        $mail->Body = $mailContent;
        $mail->send();
        // Send email
        //if(!$mail->send()){
          //  echo 'Message could not be sent.';
          //  echo 'Mailer Error: ' . $mail->ErrorInfo;
        //}else{
          //  echo 'Message has been sent';
        //}
    }
}