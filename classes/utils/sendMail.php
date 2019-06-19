<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'php_mailer/Exception.php';
require 'php_mailer/PHPMailer.php';
require 'php_mailer/SMTP.php';

class Mailing {

    public function sendMail($asunto, $destinatario, $nombre, $mensaje) {

        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->Username = 'corecongress.noreply@gmail.com';
        $mail->Password = 'C0r3C0ngr355';
        $mail->setFrom('corecongress.noreply@gmail.com', 'CORE Congress 2019');
        $mail->addReplyTo('corecongress.noreply@gmail.com', 'CORE Congress 2019');
        $mail->isHTML(true);
        $mail->Subject = $asunto;
        $mail->Body = $mensaje;
        $mail->addAddress($destinatario, $nombre);
        if (!$mail->send()) {
            echo "Error al enviar: " . $mail->ErrorInfo;
        } else {
            echo "Mensaje enviado!";
        }
    }

}
?>

