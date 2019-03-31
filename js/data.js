$.ajax({ 
    type: 'GET', 
    url: 'js/data.php', 
    datatype: 'json',

    success: function(response){
    	productos = $.parseJSON(response).data;



    }
});



