$(document).ready(function(){

    function cargarCarreras(select){
        var datos ={
            'op': 'cargarCarrera'
        };
        $.ajax({
            url : 'controllers/estudiante/cargarSelect.controller.php',
            type: 'GET',
            data: datos,
            success:function(e){
                $(select).html(e);
            }
        });
        console.log(datos);
    }
    
    cargarCarreras("#carrera");
});