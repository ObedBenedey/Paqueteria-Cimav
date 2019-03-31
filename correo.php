

<?php

$numeroRastreo = $_POST['waybill'];
$destinatario = $_POST['correo'];


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
require 'constantes.php';
$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'paqueteria.almacen@cimav.edu.mx';//este es elremitente
    $mail->Password = EMAIL_PASSWORD;//jala la contraseña
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    // aqui se envia el mensaje
    $mail->setFrom('paqueteria.almacen@cimav.edu.mx');//remitente
    $mail->addAddress($destinatario.'@cimav.edu.mx');//esto es la variable a donde lo enviaremos
    $mail->isHTML(true);
    $mail->Subject = 'LLEGO PAQUETERIA CIMAV';//asuto de la paqueteria
    $mail->Body = 'Que tal <b>'.$destinatario.'</b>, me comunico para informarle que ha llego un paquete a su nombre con el numero de rastreo: <b>'.$numeroRastreo.'</b>, favor de pasar a recogerlo, saludos. <b>CIMAV ALMACEN</b>';
    $mail->send();

} catch (Exception $exception) {
    echo 'Algo salio mal', $exception->getMessage();
}

if ($mail) {
    header('location: ./index.php');
    # code...
}else{
    echo "no se envio nada";
}

 ?>