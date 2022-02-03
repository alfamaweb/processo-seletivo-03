<?php
require_once ('src/PHPMailer.php');
require_once ('src/SMTP.php');
require_once ('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try{
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smpt.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'tieresbomfim@gmail.com';
    $mail->Password = 'minhasenha';
    $mail->Port = 587;


    $mail->setFrom('tieresbomfim@gmail.com');
    $mail->addAddress('viniciuss@alfamaweb.com.br');

    $mail->isHTML(true);
    

    $mail->Subject = 'Olá, Vinícius :))';
    $mail->Body = '<h1>Email de <strong>Cássio Vinícius</strong></h1>';
    $mail->AltBody = 'Email de Cássio Vinícius';

}catch(Exception $e){
    echo "Erro ao enviar e-mail: {$mail->ErrorInfo}";
}

?>