<?php 

//primero es el correo que jala los parametros y lo inyecta en un correo 
$numeroRastreo = $_POST['rastreo'];
$destinatario = $_POST['nombre'];
$paqueteria = $_POST['companias'];

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
    $mail->Subject = 'LLEGO PAQUETERIA CIMAV CHIHUAHUA';//asuto de la paqueteria
    $mail->Body = 'Que tal <b>'.$destinatario.'</b>.<br>Me comunico para informarle que llego un paquete a su nombre, el numero de rastreo: <b>'.$numeroRastreo.'</b>, de la compañia: <b>'.$paqueteria.'</b>,  favor de pasar a recogerlo, saludos. <b>CIMAV ALMACEN CHIHUAHUA.</b> <br> <br> ESTE CORREO ES AUTOMATICO, FAVOR DE NO RESPONDER.';
    $mail->send();


} catch (Exception $exception) {
    echo 'Algo salio mal', $exception->getMessage();
}

if ($mail) {

//despues guarda los parametros para guardarlo en la base de datos


include("db/conexion.php");
$nombre = $_POST['nombre'];
//esto es de la imagen{
//$foto=$_FILES["Imagen"]["name"];
//$ruta=$_FILES["Imagen"]["tmp_name"];
//$destino="./imagenes/".$foto;
//copy($ruta,$destino);
//}

$rastreo = $_POST['rastreo'];

$fecha = $_POST['fechas'];
$compania = $_POST['companias'];
//$precioAdministrador = $_POST['precioAdministrador'];
//$stock = $_POST['stock'];
$query = "INSERT INTO info(nombres,rastreos,fechas,companias) VALUES('$nombre','$rastreo','$fecha','$compania')";
$resultado = $conexion->query($query);


if ($resultado) {
//eesto es para enviar por la cabecera info pero ya no es necesario 
  $query = "SELECT * FROM info WHERE fechas ='$fecha'";
  $resultado = $conexion ->query($query);
  $row = $resultado->fetch_assoc();
  $enviar = $row['id'];

  
	header("location: ./index.php");
	# code...
}else{
	echo " no se inserto la info";
}
}
 ?>