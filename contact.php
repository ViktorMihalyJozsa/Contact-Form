<?php

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Adatok beolvasása a POST kérésből
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

$mail = new PHPMailer(true);

try {                                                    // SMTP beállítások
    $mail->isSMTP();                                         // SMTP használata
    $mail->Host = 'smtp.gmail.com';                          // SMTP szerver (Gmail esetén)
    $mail->SMTPAuth = true;                                  // SMTP autentikáció
    $mail->Username = 'viktor.mihaly.jozsa@gmail.com';       // Saját Gmail címed
    $mail->Password = 'elgz tgwz ywry jqzj';                 // Google App Jelszó
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      // SMTP biztonság
    $mail->Port = 587;                                       // SMTP port

    // Feladó és címzett
    $mail->setFrom($email, $name);
    $mail->addAddress('viktor.mihaly.jozsa@gmail.com'); 

    // E-mail tartalom
    $mail->Subject = 'Kapcsolatfelvételi üzenet';
    $mail->Body = "Név: $name\nEmail: $email\nÜzenet: $message";

    // E-mail küldése
    $mail->send();
    echo 'Az üzenet sikeresen elküldve!';
} catch (Exception $e) {
    echo "Hiba történt: {$mail->ErrorInfo}";
}

?>