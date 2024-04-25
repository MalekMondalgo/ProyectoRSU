$(document).ready(function(){

    function cargarCarreras(select){
        var datos ={
            'op': 'cargarCarrera'
        };
        $.ajax({
            url : '../../../controllers/estudiantes.controller.php',
            type: 'GET',
            data: datos,
            success:function(e){
                $(select).html(e);
            }
        });
    }

    function cargarEstudiantes(select){
        var datos ={
            'op': 'cargarEstudiantes'
        };
        $.ajax({
            url : '../../../controllers/estudiantes.controller.php',
            type: 'GET',
            data: datos,
            success:function(e){
                $(select).html(e);
            }
        });
    }

    function cargarCiclo(select){
        var datos ={
            'op': 'cargarCiclo'
        };
        $.ajax({
            url : '../../../controllers/estudiantes.controller.php',
            type: 'GET',
            data: datos,
            success:function(e){
                $(select).html(e);
            }
        });
    }
    
    cargarCarreras("#carrera");
    cargarEstudiantes("#estudiante");
    cargarCiclo("#ciclo");
});