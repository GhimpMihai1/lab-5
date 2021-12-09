<?php
require '..registration/PHPMailerAutoload.php';
require_once "../registration/contact-view.php";

$name = $_POST["userName"];
$email = $_POST["userEmail"];
$subject = $_POST["subject"];
$content = $_POST["content"];

if (filter_var($email, FILTER_VALIDATE_EMAIL) || $email !=='' || $content !=='' || $name !== '') {
    $response = [
        "status" => true,
    ];

    $mail = new PHPMailer;

    //$mail->SMTPDebug = 4;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'aposition30@gmail.com';                 // SMTP username
    $mail->Password = 'grdpricdiolyykke';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->Helo = "HELO";

    $mail->setFrom('aposition30@gmail.com', 'No-reply');
    $mail->addAddress('aposition30@gmail.com');     // Add a recipient
    $mail->isHTML(true);                                  // Set email format to HTML


    $mail->Subject = 'Message from the site';
    $mail->Body = "User Name: $name.<br>".
        "User Email: $email.<br>".
        "User Phone: $phone.<br>".
        "User Message: $message.<br>";
    $mail->AltBody = 'User message $message ';

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo json_encode($response);
    }
}else {
    $response = [
        "status" => false,
    ];
    echo json_encode($response);
}
