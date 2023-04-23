<?php
// PHP MAILER
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["submit"])){
    // POST
    $sender = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // PHP Mailer Declaration
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'inquiries.zfv.enterprises@gmail.com';
    $mail->Password = 'lffignqyeghgjbkt'; //Email Password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';

    // SETTING Email to customer
    $mail->setFrom('inquiries.zfv.enterprises@gmail.com', 'ZFV Enterprises'); // Senders Email
    $mail->addAddress($sender); // Receivers Email
    $mail->isHTML(true);
    $mail->Subject = 'Your Project Partner';
    $mail->Body = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <p> Hi, <strong> ' .$name . ' !</strong></p>
        <p>
            <br> Thank you for your interest in our construction company and for reaching out to us for your project needs. 
            <br> We have received your inquiry and are excited to explore the opportunity to work with you.

            <br> 

            <br>
            Our team of experts is currently reviewing the details of your request, and we will get back to you with a comprehensive response as soon as possible.
            <br> We understand that time is of the essence and we assure you that we will make every effort to provide you with a prompt and thorough reply.

             <br> 
             <br>
             If you have any questions or additional information that you would like to share with us in the meantime, <br>  please do not hesitate to reach out to us.
              We are here to help you and are committed to delivering the best solutions for your construction needs.
              <br>
              <br> 
              Thank you again for considering our services, and we look forward to the opportunity to work with you.

        </p>
        <br><br>
          Best regards,<br>
        <strong></b>ZFV Enterprises</strong>
        <br><br>
    </body>
    </html>
    ';
    $mail->send();

    // SETTING Email to owner
    $mail->clearAddresses(); // Clearing receiver's email
    $mail->setFrom($sender, $name); // Customer's Email
    $mail->addAddress('inquiries.zfv.enterprises@gmail.com'); // Owner's Email
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <p>
        <strong> Customer Inquiries: </strong><br>
        <br>
        
        you have received a new message from the website contact form:</p>
        <p>
        <strong>Name:</strong> ' .$name . '<br>
        <strong>Email:</strong> ' .$sender . '<br>
        <strong>Subject:</strong> ' .$subject . '<br>
        <strong>Message:</strong><br> ' .$message . '
        </p>
        </body>
        </html>
        ';
        $mail->send();

        // REDIRECT
     header('Location: index.php');
exit;
}
?>


