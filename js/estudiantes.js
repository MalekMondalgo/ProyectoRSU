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

    function cargarTipologia(select){
        var datos ={
            'op': 'cargarTipologia'
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

    function cargarDocente(select){
        var datos ={
            'op': 'cargarDocente'
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

    function cargarODS(select){
        var datos ={
            'op': 'cargarODS'
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

    function cargarLineas(select){
        var datos ={
            'op': 'cargarLineas'
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
    cargarEstudiantes("#buscadorequipo");
    cargarCiclo("#ciclo");
    cargarTipologia("#tipologia");
    cargarDocente("#buscadordocente");
    cargarODS("#ods");
    cargarLineas("#lineas");
});