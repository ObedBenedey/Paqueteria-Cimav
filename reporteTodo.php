<?php 
include("db/conexion.php");
date_default_timezone_set('Mexico/BajaSur');

$time = time();

$time2= date("d-m-Y", $time);





if (isset($_POST['generar_report'])) {

header('Content-Type:text/csv; charset=latin1');
header('Content-Disposition: attachment; filename="Reporte_paqueteria_de_'.$time2.'.csv"');
//salida de archivo 
$salida = fopen('php://output', 'w');
//encabezados
fputcsv($salida, array('Nombre', 'Rastreo', 'Paqueteria', 'Fecha Recibido', 'Fecha Entregado','Razon' ));

//query para crear consulta
$reporteCsv=$conexion->query("SELECT * FROM info");
while ($filaR= $reporteCsv->fetch_assoc())

 {
	 fputcsv($salida, array($filaR['nombres'],
							 $filaR['rastreos'],
							 $filaR['companias'],
							 $filaR['fechas'],
							 $filaR['fecha1'],
							 $filaR['tipo']
							));
}

}
 ?>