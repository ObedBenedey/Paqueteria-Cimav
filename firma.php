<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Firma para paqueteria</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="Signature Pad - HTML5 canvas based smooth signature drawing using variable width spline interpolation.">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <link rel="stylesheet" href="css/signature-pad.css">


</head>


<body>
  <?php 
  include("conexion.php");

  $id = $_REQUEST['id'];
  $query = "SELECT * FROM info WHERE id ='$id'";
  $resultado = $conexion ->query($query);
  $row = $resultado->fetch_assoc();

  date_default_timezone_set('Mexico/BajaSur');

  $time = time();

  $time2= date("Y-m-d H:i:s");
  ?>
<form action="proceso_modificar.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
      <center>
        <div class='row'>
          <div class='conteriner'>
           
            <div id='test1' class='col s12'>
             <div class='card-panel card-login margin-login'>
              <div class="row" id="productosDiv"></div>


                    <select name="tipo">
                      <option selected value="personal">Personal</option>
                      <option value="Cimav">Cimav</option>
                    </select>

            <input  class='waves-effect waves-light btn' type='submit' value='Guardar' name='Aceptar'/>


<div class="body">
  <div id="signature-pad" class="signature-pad">
    <div class="signature-pad--body">
      <canvas class="canvas"></canvas>
    </div>
    <div class="signature-pad--footer">
      <div class="description">Firma aqui</div>

      <div class="signature-pad--actions">
        <div>
          <button type="button" class="btn" data-action="clear">Limpiar</button>
          <button type="button" class="btn" data-action="change-color">Color</button>
          <button type="button" class="btn" data-action="undo">Undo</button>

        </div>
        <div>
          <button type="button" class="btn" data-action="save-png">Guardar PNG</button>
         
        </div>
      </div>
    </div>
  </div>
</div>




              <input type='text' REQUIRED  name='nombre' placeholder='Ingresa el nombre' value='<?php echo $row['nombres']; ?>'/>
              <input type='text' REQUIRED name='rastreo' placeholder='Ingresa el WayBill' value='<?php echo $row['rastreos']; ?>'/>
              <input type='text' REQUIRED name='companias' placeholder='Ingresa la compañia' value='<?php echo $row['companias']; ?>'/>
              <input type='text' name='fecha1' value='<?php echo $time2 ?>'/>
            
            </div>
           </div>
          </div>
        </div> 
      </center> 
</form>


</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/data.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/jsMaterialize.js"></script>
  <script type="text/javascript" src="js/navBar.js"></script>
  <script src="js/signature_pad.umd.js"></script>
  <script src="js/app.js"></script>
</body>
</html>
