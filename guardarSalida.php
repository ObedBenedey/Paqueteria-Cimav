<?php 
include("db/conexion.php");
$nombre = $_POST['nombre'];
//esto es de la imagen{
//$foto=$_FILES["Imagen"]["name"];
//$ruta=$_FILES["Imagen"]["tmp_name"];
//$destino="./imagenes/".$foto;
//copy($ruta,$destino);
//}

$rastreo = $_POST['rastreo'];


//$tipo = $_POST['tipo'];
//$precio = $_POST['precio'];
//$precioAdministrador = $_POST['precioAdministrador'];
//$stock = $_POST['stock'];
$query = "INSERT INTO info(nombre,rastreo) VALUES('$nombre','$rastreo')";
$resultado = $conexion->query($query);


if ($resultado) {
	header('location: ./index.php');
	# code...
}else{
	echo "pero no se inserto la info";
}

 ?>