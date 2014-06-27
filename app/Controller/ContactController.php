<?php

/**
 * Created by PhpStorm.
 * User: Marijn
 * Date: 03/06/14
 * Time: 21:10
 */
class ContactController extends AppController
{
    var $name = 'contact';
    var $helpers = array('Html', 'Form', 'Session');

    public function index()
    {
        $data = array(
            'title' => 'Contact',
            'subtitle' => 'Want to tell me something?'
        );
        $this->set('data', $data);
    }

    public function add()
    {
        $this->autoRender = false;
        if ($this->request->is('post')) {
            //Load model
            $this->loadModel('Contact');
            $this->Contact->set($this->request->data);
            if( $this->data['email1'] != $this->data['email2'] ) {
                $this->Contact->invalidate('email1', "The email addresses don't match.");
            }
            if ($this->Contact->validates()) {
                require $_SERVER["DOCUMENT_ROOT"] . "\app\Lib\PHPMailer-master\class.phpmailer.php";
                try {
                    $mail = new PHPMailer;

                    $mail->isSMTP(); // Set mailer to use SMTP
                    $mail->Host = 'smtp.live.com'; // Specify main and backup server
                    $mail->SMTPAuth = true; // Enable SMTP authentication
                    $mail->Username = "contact@marijnmartens.be"; // SMTP username
                    $mail->Password = "CHEETA@10paren"; // SMTP password
                    $mail->SMTPSecure = 'tls'; // Enable encryption, 'ssl' also accepted

                    $mail->From = "contact@marijnmartens.be";
                    $mail->addAddress("contact@marijnmartens.be"); // Add a recipient
                    $mail->isHTML(true);
                    $mail->Subject = "[Site Contact] Message from " . $this->request->data['name'];
                    $mail->Body = '<p><b>Message from:</b> <a href="mailto:' . $this->request->data['email1'] . '">' . $this->request->data['email1'] . '</a></p><p><b>Message:</b><br/>' . nl2br($this->request->data['message']) . '<br/>';
                    if (!$mail->send()) {
                        $this->Session->setFlash('[Error Mailer] (ContactController add L52)', null, array(), 'error');
                    } else {
                        $this->Session->setFlash('Mail send.', null, array(), 'success');
                    }
                } catch (Exception $e) {
                    $this->Session->setFlash('Unable to send your message, try again later or contact Marijn directly via contact@marijnmartens.be', null, array(), 'error');
                } finally {
                    $this->redirect(array('controller' => 'contact', 'action' => 'index'));
                }
            } else {
                /*$errors = $this->Contact->validationErrors;
                $errorMessage = '';
                foreach ($errors as $error) {
                    $errorMessage = $errorMessage . $error[0] . '</br>';
                }
                $this->Session->setFlash($errorMessage, null, array(), 'error');*/
                $this->Session->setFlash('Some fields were not correct', null, array(), 'error');
            }
        }
        $this->redirect(array('controller' => 'contact', 'action' => 'index'));
    }
}