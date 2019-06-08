<?php 
include("db/conexion.php");

$fecha1 = $_POST['fecha1'];
$fecha2 = $_POST['fecha2'];

if (isset($_POST['generar_reporte'])) {

header('Content-Type:text/csv; charset=latin1');
header('Content-Disposition: attachment; filename="Reporte_Fechas_Ingreso.csv"');
//salida de archivo 
$salida = fopen('php://output', 'w');
//encabezados
fputcsv($salida, array('Nombre', 'Rastreo', 'Compañia', 'Fecha', 'Firma'));

//query para crear consulta
$reporteCsv=$conexion->query("SELECT * FROM info where fechas BETWEEN '$fecha1' and '$fecha2'");
while ($filaR= $reporteCsv->fetc_assoc())

 {
	 fputcsv($salida, array($filaR['nombre'],
							 $filaR['rastreos'],
							 $filaR['companias'],
							 $filaR['firmas'],
							 $filaR['fechas']));
}

}
 ?>