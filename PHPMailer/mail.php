<?php 
require_once('vendor/autoload.php'); 

/* Start to develop here. Best regards https://php-download.com/ */
class mail {
    ///////////////////
public static function send_mail($to_email,$to_name,$subject,$body) {    
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'hortechnet.com;mail.hortechnet.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'info@hortechnet.com';                 // SMTP username
        $mail->Password = '07036543898Ola.';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('info@hortechnet.com', 'Poly Bookstore');
        $mail->addAddress($to_email, $to_name);     // Add a recipient
        // $mail->addAddress('training@netlightsystems.com');               // Name is optional
        $mail->addReplyTo('info@hortechnet.com');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        // echo 'Message has been sent';
    } 
    catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}


///////////// closing class bracket///////////
}