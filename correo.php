

<?php

$numeroRastreo = $_POST['waybill'];
$destinatario = $_POST['correo'];

/**
 * Created by PhpStorm.
 * User: elporfirio
 * Date: 2019-02-26
 * Time: 23:04
 */
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
    $mail->Username = 'obed.rodriguez@cimav.edu.mx';
    $mail->Password = EMAIL_PASSWORD;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    ## MENSAJE A ENVIAR
    $mail->setFrom('obed.rodriguez@cimav.edu.mx');//remitente
    $mail->addAddress($destinatario.'@cimav.edu.mx');//esto es la variable a donde lo enviaremos
    $mail->isHTML(true);
    $mail->Subject = 'LLEGO PAQUETERIA';
    $mail->Body = 'Que tal, me comunico para informarle que ha llego un paquete a su nombre con el numero de rastreo: '.$numeroRastreo.', favor de pasar a recogerlo, saludos.<b>CIMAV ALMACEN</b>';
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