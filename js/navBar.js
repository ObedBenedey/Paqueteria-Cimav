
renderSalida();


function renderSalida(){
	var productosDiv = document.getElementById("productosDiv");
	productosDiv.innerHTML="";

	var pro = document.getElementById("buscador");
	pro.innerHTML="";
	
	var produc = document.getElementById("tabla");
	produc.innerHTML=`
	 <tbody id="registros">
	        </tbody>

	`


var momentoActual= new Date();
var año=momentoActual.getFullYear();
var mes = momentoActual.getMonth();
var mesAcutal = mes +1;
var dia=momentoActual.getDate();
var hora=momentoActual.getHours();
var minuto=momentoActual.getMinutes();
var segundo=momentoActual.getSeconds();
var horaImprimible = año +"-"+ mesAcutal +"-"+ dia +" "+hora+":"+minuto+":"+segundo;

	var productoDiv = document.createElement('div');	
productoDiv.innerHTML =`

 <div id='test1' class='col s12'>
	  <center>
		  <form  action='guardarSalida.php' method='POST' enctype='multipart/form-data'><br><br>
			  <div class='row'>
				  <div class='conteriner'>
					  <div class='card-panel card-login margin-login'>
					      <input type='text' REQUIRED name='rastreo' placeholder='Ingresa el WayBill' value='' autofocus/>
						  <input type='text' REQUIRED name='nombre' placeholder='Ingresa el Nombre' value=''/>
						  <input type='text' REQUIRED name='companias' placeholder='Ingresa la Compañia' value=''/>
						  <input type='text' name='fechas' value=' ${horaImprimible}'/>
						  <input  class='black-text active btn' type='submit' value='Guardar' name='Aceptar'/>
					  </div>
				  </div>
			  </div>		
		  </form>
	  </center>
  </div>
  `
productosDiv.appendChild(productoDiv);

}

function renderHistorial(){
	var productosDiv = document.getElementById("productosDiv");
	productosDiv.innerHTML="";

		var pro = document.getElementById("buscador");
	pro.innerHTML="";

	var produc = document.getElementById("tabla");
	produc.innerHTML=`
	 <tbody id="registros">
	        </tbody>

	`



	      let selectedProducts = productos;



buscador.innerHTML+= `

      <nav>
    <div class="nav-wrapper #757575 grey darken-1">
      <form>
        <div class="input-field">
          <input  type="search" id="formulario" placeholder='Busqueda por número de RASTREO:' required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>`

			tabla.innerHTML+= `

         <thead>
          <tr>
              <th>Nombre</th>
              <th>Nº Rastreo</th>
              <th>Compañia</th>
              <th>Fecha Recibido</th>
              <th>Fecha Entregado</th>
              <th>Firma</th>
              <th></th>

          </tr>
        </thead>

    `
const formulario = document.querySelector('#formulario');
	const resultado = document.querySelector('#registros');
	const filtrar = () => {
		resultado.innerHTML='';
const texto = formulario.value.toLowerCase();

for(let product of selectedProducts){
let nombre = product.rastreos.toLowerCase();
if (nombre.indexOf(texto) !== -1 ) {
	resultado.innerHTML += `
 			<tr>
            <td>`+product.nombres+`</td>
            <td ><a class="truncate black-text tooltipped" data-position="bottom" data-tooltip="I am a tooltip">`+product.rastreos+`</a></td>
            <td>`+product.companias+`</td>
            <td>`+product.fechas+`</td>
            <td>`+product.fecha1+`</td>
            <td><img width="90" src="`+product.firmas+`"></td>
            <td><button class=' color-boton'><a class='white-text' href='firma.php?id=`+product.id+`'>llllllllll</a></button></td>
          </tr>

	`
  }
 }
 if (resultado.innerHTML === '') {
 	`
	<li>producto no entontrado</li>
	`
 }
}

	formulario.addEventListener('keyup',filtrar)
	filtrar();


     
}
function renderExcel(){
	var productosDiv = document.getElementById("productosDiv");
	productosDiv.innerHTML="";
	var pro = document.getElementById("buscador");
	pro.innerHTML="";

	var produc = document.getElementById("tabla");
	produc.innerHTML=`
	 <tbody id="registros">
	        </tbody>`

	        	var productoDiv = document.createElement('div');

  	productoDiv.className = 'col s6 m3';

  	productoDiv.innerHTML =


"<div id='test2' class='col s12'>"
	+"<center>"
		+"<form action='reporte.php' method='POST' enctype='multipart/form-data'><br><br>"
			+"<div class='row'>"
				+"<div class='conteriner'>"
					+"<div class='card-panel card-login margin-login'>"
						+"<div class='center' col s3 m6 l6>"
							+"<form method='post' class='form' action='reporte.php'>"
								+"<input type='date' name='fecha1'>"
								+"<input type='date' name='fecha2'>"
								+"<input type='submit' class='btn black-text' name='generar_reporte'> "
							+"</form>" 
						+"</div>"	
					+"</div>"
				+"</div>"
			+"</div>"		
		+"</form>"
	+"</center>"
+"</div>";

productosDiv.appendChild(productoDiv);


}


