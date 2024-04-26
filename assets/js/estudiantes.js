

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

    $('#registrarProyecto').click(function() {
        // Obtener los valores de los campos de entrada
        var estudiante = $("#idEstudiante").val();
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
        var docente = $("#buscadordocente").val();
        var estudiantesSelect = [];
        var archivoEstudianteProyecto = $("#archivoEstudianteProyecto")[0].files[0];
        $('#buscadorequipo option:selected').each(function() {
            estudiantesSelect.push($(this).val());
        });
        var equipoJSON = JSON.stringify(estudiantesSelect);
    
        if(estudiante == "" || carrera == "" || archivoEstudianteProyecto == undefined  || equipoJSON == "" || docente == "" || ciclo == "" || nombreProyecto =="" || tipologia== "" || ods == "" || lineas== "" || numeroBeneficiados == "" || sectorBeneficiario == "" || fechaInicial=="" || fechaFin == ""){
            mostrarAlerta("warning", "¡Completar los campos necesarios!");
        }else{
            Swal.fire({
                icon:'question',
                title:'¿Está seguro de registrar?',
                showCancelButton: true,
                cancelButtonText:'Cancelar',
                confirmButtonText:'Aceptar'
            }).then((result) => {
                
                if(result.isConfirmed){
                    var formData = new FormData();
                    formData.append('op', 'registrarProyecto');
                    formData.append('nombreProyecto', nombreProyecto);
                    formData.append('tipologia', tipologia);
                    formData.append('ods', ods);
                    formData.append('lineas', lineas);
                    formData.append('numeroBeneficiados', numeroBeneficiados);
                    formData.append('sectorBeneficiario', sectorBeneficiario);
                    formData.append('fechaInicial', fechaInicial);
                    formData.append('fechaFin', fechaFin);
                    formData.append('docente', docente);
                    formData.append('archivoEstudianteProyecto', archivoEstudianteProyecto);
                    formData.append('equipoJSON', equipoJSON); 
                    $.ajax({
                        url : '../../../controllers/estudiantes.controller.php',
                        type: 'POST',
                        data: formData,   
                        contentType: false,
                        processData: false,
                        cache: false,                     
                        success: function(result){
                            window.location.href = 'estadoproyecto.php';
                            mostrarAlerta("success", "¡Registrado con éxito!");
                            $("#formularioProyecto")[0].reset();
                            $('#buscadorequipo').val(null).trigger('change');
                            $('#buscadorequipo option:first-child').remove();
                        }
                    });
                }
            });
        }
    });

    cargarCarreras("#carrera");
    cargarEstudiantes("#estudiante");
    cargarEstudiantes("#buscadorequipo");
    cargarCiclo("#ciclo");
    cargarDocente("#buscadordocente");
    cargarODS("#ods");
    cargarLineas("#lineas");
    cargarTipologia("#tipologia");
});