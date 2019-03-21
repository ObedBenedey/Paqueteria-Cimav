<!DOCTYPE html>
<html>
<head>
	<title>Almacen CIMAV</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!--Import css-->
  <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body >

	<div class="row">
		<div class="col s12">
			<ul class="tabs"> 
				<li class="tab col s4"><a class="black-text" href="#test2">Recepción</a></li>
				<li class="tab col s4"><a class="black-text" href="#test1">Salida</a></li>
				<li class="tab col s4"><a class="black-text" href="#test3">Historial</a></li>

			</ul>
		</div>

<div id="test2" class="col s12">
	<center>
		<form action="correo.php" method="POST" enctype="multipart/form-data"><br><br>

			<div class="row">
				<div class="conteriner">
					<div class="card-panel card-login margin-login">
						<div class="center" col s3 m6 l6>

							<input type="text" REQUIRED name="waybill" placeholder="Ingresa el WayBill: " value=""/>
							<input type="text" REQUIRED name="correo" placeholder="Ingresa el destinatario: " value="">		
							<input  class="waves-effect waves-light btn" type="submit" value="Enviar" name="Aceptar"/>

						</div>	
					</div>
				</div>
			</div>		
		</form>
	</center>
</div>
		
<div id="test1" class="col s12">
   <center>
		<form action="guardar_proceso.php" method="POST" enctype="multipart/form-data"><br><br>

			<div class="row">
				<div class="conteriner">
					<div class="card-panel card-login margin-login">
						<div class="center" col s3 m6 l6>
							<input type="text" REQUIRED name="nombre" placeholder="Ingresa el nombre" value=""/>
							<input type="text" REQUIRED name="rastreo" placeholder="Ingresa el WayBill" value=""/>

							 <form action="#">
							    <div class="file-field input-field">
							      <div class="btn">
							        <span>File</span>
							        <input REQUIRED name="Imagen" type="file">
							      </div>
							      <div class="file-path-wrapper">
							        <input class="file-path validate" type="text">
							      </div>
							    </div>
							 </form>
		
							<input  class="waves-effect waves-light btn" type="submit" value="Subir" name="Aceptar"/>


						</div>	
					</div>
				</div>
			</div>		
		</form>
	</center>
</div>


<div id="test3" class="col s12">
				<nav>
				    <div class="nav-wrapper #e0e0e0 grey lighten-3">
				      <form>
				        <div class="input-field">
				          <input id="search" type="search" required>
				          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
				          <i class="material-icons">close</i>
				        </div>
				      </form>
				    </div>
				  </nav>

			 <table>
        <thead>
          <tr>
              <th>Nombre</th>
              <th>WayBill</th>
              <th>Firma de Entrega</th>
              <th>Fecha de Entrega</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Salomon M.</td>
            <td>345678765434</td>
            <td>firma</td>
            <td>12-03-2019</td>
          </tr>
          <tr>
            <td>Lorena A.</td>
            <td>4567898765678</td>
            <td>firma</td>
            <td>22-03-2019</td>
          </tr>
          <tr>
            <td>Patricia A.</td>
            <td>567890987654</td>
            <td>firma</td>
            <td>03-03-2019</td>
          </tr>
        </tbody>
      </table>
		</div>


	</div>



<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/jsMaterialize.js"></script>
<script type="text/javascript">
	    var el = document.querySelectorAll('.tabs');
        var instance = M.Tabs.init(el);
</script>
</body>
</html>