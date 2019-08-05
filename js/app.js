

var wrapper = document.getElementById("signature-pad");
var clearButton = wrapper.querySelector("[data-action=clear]");
var changeColorButton = wrapper.querySelector("[data-action=change-color]");
var undoButton = wrapper.querySelector("[data-action=undo]");
var savePNGButton = wrapper.querySelector("[data-action=save-png]");
var saveJPGButton = wrapper.querySelector("[data-action=save-jpg]");
var saveSVGButton = wrapper.querySelector("[data-action=save-svg]");

var saveButton = document.getElementById("save-btn");

var canvas = wrapper.querySelector("canvas");


var signaturePad = new SignaturePad(canvas, {
  backgroundColor: 'rgb(255, 255, 255)'
});


function resizeCanvas() {

  var ratio =  Math.max(window.devicePixelRatio || 1, 1);

  canvas.width = canvas.offsetWidth * ratio;
  canvas.height = canvas.offsetHeight * ratio;
  canvas.getContext("2d").scale(ratio, ratio);


  signaturePad.clear();
}


window.onresize = resizeCanvas;
resizeCanvas();
//aqui es donde llama eta funciona para descargar la imagen y guardarla dependiendo de
function download(dataURL, filename) {
  if (navigator.userAgent.indexOf("Safari") > -1 && navigator.userAgent.indexOf("Chrome") === -1) {
    var blob = dataURLToBlob(dataURL);
    var url = window.URL.createObjectURL(blob);

    var a = document.createElement("a");
    a.style = "display: none";
    a.href = url;
    a.download = filename;

    document.body.appendChild(a);
    a.click();

    window.URL.revokeObjectURL(url);

 var productosDiv = document.getElementById("productosDiv");
  productosDiv.innerHTML="";

productosDiv.innerHTML =`

  <form action="#">
    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" name="firma" value="">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate"  value="" type="text">
      </div>
    </div>
  </form>
          `
          var contador = 2;
var na = "na";
while(contador)
{
    na += na;
    contador -= 1;
}
console.log(na + " Freddy ")
  } else {
      var blob = dataURLToBlob(dataURL);
    var url = window.URL.createObjectURL(blob);

    var a = document.createElement("a");
    a.style = "display: none";
    a.href = url;
    a.download = filename;

    document.body.appendChild(a);
    a.click();

    window.URL.revokeObjectURL(url);

 var productosDiv = document.getElementById("productosDiv");
  productosDiv.innerHTML="";

productosDiv.innerHTML =`

  <form action="#">
    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" name="firma" value="">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate"  value="" type="text">
      </div>
    </div>
  </form>
          `
          var contador = 2;
var na = "na";
while(contador)
{
    na += na;
    contador -= 1;
}
console.log(na + " Freddy ")

  }
}


function dataURLToBlob(dataURL) {

  var parts = dataURL.split(';base64,');
  var contentType = parts[0].split(":")[1];
  var raw = window.atob(parts[1]);
  var rawLength = raw.length;
  var uInt8Array = new Uint8Array(rawLength);

  for (var i = 0; i < rawLength; ++i) {
    uInt8Array[i] = raw.charCodeAt(i);
  }

  return new Blob([uInt8Array], { type: contentType });
}
//esto es para limpiar el canvas 

clearButton.addEventListener("click", function (event) {
  signaturePad.clear();
});
//esto es para regresar la ultima linea que trasaste

undoButton.addEventListener("click", function (event) {
  var data = signaturePad.toData();

  if (data) {
    data.pop(); 
    signaturePad.fromData(data);
  }
});
//color de linea aleatorio, con mathrandom

changeColorButton.addEventListener("click", function (event) {
  var r = Math.round(Math.random() * 255);
  var g = Math.round(Math.random() * 255);
  var b = Math.round(Math.random() * 255);
  var color = "rgb(" + r + "," + g + "," + b +")";

  signaturePad.penColor = color;
});
//aqui guarda el canvas pero en PNG

savePNGButton.addEventListener("click", function (event) {
  if (signaturePad.isEmpty()) {
    alert("Please provide a signature first.");
  } else {
  
  var nombreCanvas = window.location.search;

    var dataURL = signaturePad.toDataURL();
    var img64 = document.getElementById("img64");
    img64.value = signaturePad.toDataURL();
    var img64 = document.getElementById("forma-modificar");
    img64.submit();
    //download(dataURL, nombreCanvas+".png");
  }
});


saveJPGButton.addEventListener("click", function (event) {
  if (signaturePad.isEmpty()) {
    alert("Please provide a signature first.");
  } else {
    var dataURL = signaturePad.toDataURL("image/jpeg");
    download(dataURL, "signature.jpg");
  }
});

saveSVGButton.addEventListener("click", function (event) {
  if (signaturePad.isEmpty()) {
    alert("Please provide a signature first.");
  } else {
    var dataURL = signaturePad.toDataURL('image/svg+xml');
    download(dataURL, "signature.svg");
  }
});

