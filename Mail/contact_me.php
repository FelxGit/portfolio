<?php session_start(); //enable session

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$send_mail = new sendMail;
//initialize
$send_mail->start();

class sendMail{

    public function start(){

        //if strip inputs is check
        if($this->strip_inputs()){
            $send = $this->send_mail();
        
            //if send mail return true
            if($send){
                 header('location: ../index.php#contact');
                 exit();
            }
        }

        header('location: ../index.php#contact');
        exit();
    }

    public function strip_inputs(){
        
        if($_POST['username'] && filter_var($_POST['email']) && $_POST['comments']){
            
            $username = strip_tags(htmlspecialchars($_POST['username'])); 
            $email    = strip_tags(htmlspecialchars($_POST['email']));
            $message  = strip_tags(htmlspecialchars($_POST['comments']));

            return true;
        }

        $_SESSION['message'] = 'Invalid input/s';
        return false;
    }

    public function send_mail(){

        try {

        $mail = new PHPMailer(true);// Passing `true` enables exceptions

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; //weww
        $mail->SMTPAuth = true;
        $mail->AuthType = 'LOGIN';
        $mail->Username = 'entica.fel@gmail.com';
        $mail->Password = 'fayl0011';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        //Recipients
        $mail->setFrom($email, 'Mailer');
        $mail->addAddress('entica.fel@gmail.com', 'Fel');     // Add a recipient
        
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Website Form: '.$email;
        $mail->Body    = $username.': '.$message;
         
        
        if($mail->send()){
            $_SESSION['message'] = 'Message sent.';
            return true;
        }
        
        } catch (Exception $e) {
            $_SESSION['message'] = 'It seem I got server error for some reason..';
            return false;
        }
    }
}    
?>