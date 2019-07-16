<?php 
include("conexion.php");

$id = $_REQUEST['id'];
$nombre = $_POST['nombre'];
$rastreo = $_POST['rastreo'];
$companias = $_POST['companias'];
$tipoPaquete = $_POST['tipo'];
$data_uri = $_POST['img64'];
$fechaEntregado = $_POST['fecha1'];




// $foto=$_FILES["firma"]["name"];
// $ruta=$_FILES["firma"]["tmp_name"];
// $destino="imagenFirmas/".$foto;
// copy($ruta,$destino);


$destino = "imagenFirmas/firma".$id.".png";
$encoded_image = explode(",", $data_uri)[1];
$decoded_image = base64_decode($encoded_image);
file_put_contents($destino, $decoded_image);

$query = "UPDATE info SET nombres='$nombre',rastreos='$rastreo',companias='$companias',fecha1='$fechaEntregado', tipo='$tipoPaquete',firmas='$destino' WHERE id='$id'";
$resultado = $conexion->query($query);

if ($resultado) {
	header('location: ./index.php');
	# code...
}else{
	echo "pero no se inserto la imagen";
}

?>