<?php 
include("conexion.php");

$id = $_REQUEST['id'];
$nombre = $_POST['nombre'];
$rastreo = $_POST['rastreo'];
$companias = $_POST['companias'];
$fechas = $_POST['fechas'];




$foto=$_FILES["firma"]["name"];
$ruta=$_FILES["firma"]["tmp_name"];
$destino="./imagenFirmas/".$foto;
copy($ruta,$destino);


$query = "UPDATE info SET nombres='$nombre',rastreos='$rastreo',companias='$companias',fechas='$fechas',firmas='$destino' WHERE id='$id'";
$resultado = $conexion->query($query);

if ($resultado) {
	header('location: ./index.php');
	# code...
}else{
	echo "pero no se inserto la imagen";
}

?>