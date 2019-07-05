$.ajax({ 
    type: 'GET', 
    url: 'js/datosBitacora.php', 
    datatype: 'json',

    success: function(response){
    	productos = $.parseJSON(response).data;



    }
});



