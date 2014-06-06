<?php
/**
 * Created by PhpStorm.
 * User: Marijn
 * Date: 03/06/14
 * Time: 21:10
 */

class ContactController extends AppController{
    public function index(){
        $data = array(
            'title' => 'Contact',
            'subtitle' => 'Want to tell me something?'
        );

        $this->set('data', $data);
    }

    public function mail($username, $password, $subject, $message, $to = null)
    {
        require "../webroot/PHPMailer-master/class.phpmailer.php";

        if ($to == null) {
            $to = $username;
        }

        try {
            $mail = new PHPMailer;

            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host = 'smtp.live.com'; // Specify main and backup server
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = $username; // SMTP username
            $mail->Password = $password; // SMTP password
            $mail->SMTPSecure = 'tls'; // Enable encryption, 'ssl' also accepted

            $mail->From = $username;
            $mail->addAddress($to); // Add a recipient
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;
            if (!$mail->send()) {
                return FALSE;
            }
            return TRUE;
        } catch (Exception $e) {
            return FALSE;
        }
    }


} 