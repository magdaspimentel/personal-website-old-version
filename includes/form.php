<?php 

session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../vendor/autoload.php';

$mail = new PHPMailer();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);  
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);  

    // $mail->SMTPDebug = 4;
    $mail->isSMTP();
    $mail->Host = '';
    $mail->Username = '';
    $mail->Password = '';
    $mail->SMTPAuth = true;
    $mail->SMTPAutoTLS = false;
    $mail->SMTPSecure = false;
    $mail->Port = 25;  

    $mail->setFrom('', '');

    // destinatário
    $mail->addAddress('', '');

    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8'; 
    $mail->Subject = 'Pedido de Contacto';
    $mail->Body =
        '<html>
        <head>
            <title>Pedido de Contacto</title>
        </head>
        <body>
            <p>Foi efetuado um novo pedido de contacto com os seguintes dados:</p>
            <p>Nome: ' . $name . '</p>
            <p>Email: ' . $email . '</p>
            <p>Assunto: ' . $subject . '</p> 
            <p>Mensagem: ' . $message . '</p>                
        </body>
    </html>
    ';


    if ($mail->send()) {
        $_SESSION['form_success'] = true;
        header('Location: ../index.php');
    } else {
        $_SESSION['form_success'] = false;
        header('Location: ../index.php');
    }   
}
?>        