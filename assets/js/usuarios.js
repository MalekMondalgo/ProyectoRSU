

$(document).ready(function(){

    function iniciarSesion(){
        if ($("#correo").val() == "" || $("#password").val() == ""){
            Swal.fire({
                icon: 'warning',
                title: 'Complete los campos solicitados',
                position: 'bottom-end',
                timerProgressBar: true,
                timer: 1000,
                toast:true,
                showConfirmButton:false,
                didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });
        }else{
            $.ajax({
                url : '../controllers/usuarios.controller.php',
                type: 'GET',
                data: {
                    op          	: 'login',
                    correo          : $("#correo").val(),
                    password        : $("#password").val()
                },
                success: function(result) {
                    var respuesta = JSON.parse(result);
                    if (respuesta.mensaje == "") {
                        // Redirigir según el nivel de acceso
                        if (respuesta.nivelacceso == 'E') {
                            window.location.href = 'estudiantes/index.php';
                        } else if (respuesta.nivelacceso == 'A') {
                            //Aca coloc a tus administradores
                            window.location.href = 'usuario/index.php';
                        } else {
                            // Otro nivel de acceso
                            // ...
                        }
                    } else {
                        Swal.fire(respuesta.mensaje);
                    }
                }
            });
        }
      }

    
    $('#ingresoLogin').click(iniciarSesion);

});