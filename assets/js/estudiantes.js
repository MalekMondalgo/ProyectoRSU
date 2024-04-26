

$(document).ready(function(){

    // Listar las carreras, cuando el usuario hara los preregistros
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

    // Listar todos los estudiantes, cuando el usuario hara los preregistros
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
    
    // Cargar los ciclos, cuando el usuario hara los preregistros
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

    // Cargar la el tipo de proyeccto, cuando el usuario hara los preregistros
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

    // Cargar todos los docentes, cuando el usuario hara los preregistros
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

    // Cargar ODS, cuando el usuario hara los preregistros
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

    // Cargar lineas, cuando el usuario hara los preregistros
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
    
    // Funcion de select2 para listar y almacenar multiples valores
    $(document).ready(function() {
        $('#buscadorequipo').select2();
    });
    $(document).ready(function() {
        $('#buscadordocente').select2();
    });

    $('#registrarPreProyecto').click(function() {
        // Obtener los valores de los campos de entrada
        var estudiante = $("#estudiante").val();
        var carrera = $("#carrera").val();
        var ciclo = $("#ciclo").val();
        var nombreProyecto = $("#nombreProyecto").val();
        var tipologia = $("#tipologia").val();
        var ods = $("#ods").val();
        var lineas = $("#lineas").val();
        var numeroBeneficiados = $("#numeroBeneficiados").val();
        var sectorBeneficiario = $("#sectorBeneficiario").val();
        var fechaInicial = $("#fechaInicial").val();
        var fechaFin = $("#fechaFin").val();
    
        // Obtener los valores seleccionados del select múltiple de estudiantes y docentes
        var estudiantesSelect = [];
        $('#buscadorequipo option:selected').each(function() {
            estudiantesSelect.push($(this).val());
        });
        var docentesSelect = [];
        $('#buscadordocente option:selected').each(function() {
            docentesSelect.push($(this).val());
        });
    
        // Convertir los arrays de valores a cadenas JSON
        var equipoJSON = JSON.stringify(estudiantesSelect);
        var docentesJSON = JSON.stringify(docentesSelect);
    
        // Almacenar las cadenas JSON en localStorage
        localStorage.setItem('equipoPreRegistro', equipoJSON);
        localStorage.setItem('docentesPreRegistro', docentesJSON);
    
        // Almacenar los valores de los campos de entrada en localStorage
        localStorage.setItem('estudiante', estudiante);
        localStorage.setItem('carrera', carrera);
        localStorage.setItem('ciclo', ciclo);
        localStorage.setItem('nombreProyecto', nombreProyecto);
        localStorage.setItem('tipologia', tipologia);
        localStorage.setItem('ods', ods);
        localStorage.setItem('lineas', lineas);
        localStorage.setItem('numeroBeneficiados', numeroBeneficiados);
        localStorage.setItem('sectorBeneficiario', sectorBeneficiario);
        localStorage.setItem('fechaInicial', fechaInicial);
        localStorage.setItem('fechaFin', fechaFin);
    
        // Redirigir a la página "conformidad.php"
        window.location.href = 'conformidad.php';
    });
    

    $('#registrarConformidad').click(function() {
        // Obtener los datos de estudiantes y docentes desde localStorage
        var equipoJSON = localStorage.getItem('equipoPreRegistro');
        var docenteJSON = localStorage.getItem('docentesPreRegistro');
    
        // Convertir las cadenas JSON a arrays
        var equipo = JSON.parse(equipoJSON);
        var docentes = JSON.parse(docenteJSON);
    
        // Obtener los otros datos de localStorage
        var estudiante = localStorage.getItem('estudiante');
        var carrera = localStorage.getItem('carrera');
        var ciclo = localStorage.getItem('ciclo');
        var nombreProyecto = localStorage.getItem('nombreProyecto');
        var tipologia = localStorage.getItem('tipologia');
        var ods = localStorage.getItem('ods');
        var lineas = localStorage.getItem('lineas');
        var numeroBeneficiados = localStorage.getItem('numeroBeneficiados');
        var sectorBeneficiario = localStorage.getItem('sectorBeneficiario');
        var fechaInicial = localStorage.getItem('fechaInicial');
        var fechaFin = localStorage.getItem('fechaFin');
    
        // Objeto con todos los datos a enviar al servidor
        var datos = {
            estudiante: estudiante,
            carrera: carrera,
            ciclo: ciclo,
            nombreProyecto: nombreProyecto,
            equipo: equipo,
            tipologia: tipologia,
            docentes: docentes,
            ods: ods,
            lineas: lineas,
            numeroBeneficiados: numeroBeneficiados,
            sectorBeneficiario: sectorBeneficiario,
            fechaInicial: fechaInicial,
            fechaFin: fechaFin
        };
        console.log(datos);
        // Enviar los datos al servidor usando AJAX
        /*$.ajax({
            url: 'guardar_datos.php', // Ruta al script en tu servidor
            type: 'POST', // Método de envío
            data: datos, // Datos a enviar
            success: function(response) {
                console.log('Datos guardados correctamente.');
                console.log(response); // Puedes imprimir la respuesta del servidor si lo deseas
            },
            error: function(xhr, status, error) {
                console.error('Error al guardar los datos:', error);
            }
        });*/
    });
    

    cargarCarreras("#carrera");
    cargarEstudiantes("#estudiante");
    cargarEstudiantes("#buscadorequipo");
    cargarCiclo("#ciclo");
    cargarTipologia("#tipologia");
    cargarDocente("#buscadordocente");
    cargarODS("#ods");
    cargarLineas("#lineas");
});