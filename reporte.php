<?php 
include("db/conexion.php");
date_default_timezone_set('Mexico/BajaSur');

$time = time();

$time2= date("d-m-Y", $time);


$fecha1 = $_POST['fecha1'];
$fecha2 = $_POST['fecha2'];

if (isset($_POST['generar_reporte'])) {

header('Content-Type:text/csv; charset=latin1');
header('Content-Disposition: attachment; filename="Reporte_paqueteria_de_'.$time2.'.csv"');
//salida de archivo 
$salida = fopen('php://output', 'w');
//encabezados
fputcsv($salida, array('Nombre', 'Rastreo', 'Paqueteria', 'Fecha Recibido', 'Fecha Entregado' ));

//query para crear consulta
$reporteCsv=$conexion->query("SELECT * FROM info where fechas BETWEEN '$fecha1' and '$fecha2'");
while ($filaR= $reporteCsv->fetch_assoc())

 {
	 fputcsv($salida, array($filaR['nombres'],
							 $filaR['rastreos'],
							 $filaR['companias'],
							 $filaR['fechas'],
							 $filaR['fecha1'],
							));
}

}
 ?>