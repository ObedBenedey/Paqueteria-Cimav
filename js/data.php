 
<?php 
		include("conexion.php");

		$query = "SELECT * FROM info ORDER BY id DESC LIMIT 20";
		$resultado = mysqli_query($conexion, $query);
		if (!$resultado) {
			die("error");
			# code...
		}else{
			while ($data = mysqli_fetch_assoc($resultado)) {
				$arreglo["data"][]= $data;
				# code...
			}
			echo json_encode($arreglo);
		}

		mysqli_free_result($resultado);
		mysqli_close($conexion);

?>