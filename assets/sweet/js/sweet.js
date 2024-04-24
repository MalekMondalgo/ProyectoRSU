function advertencia(e){
	e.preventDefault();
	var url = e.currentTarget.getAttribute('href');
	Swal.fire({
		title: '¿Está seguro que deseas Eliminar?',
		text: '¡ El registro se desactivara !',
		icon: 'warning',	/*icono que va mostrar success-error-info-warning-question*/
		showCancelButton: true,
		confirmButtonColor: '#d9534f',
		cancelButtonColor: '#8592a3',
		confirmButtonText: 'Si, Eliminar',
		cancelButtonText: 'No, Salir',
		reverseButtons: true,
		//width:'300px',
		padding: '20px',
		//background: 'rgb(70,200,255)',
		backdrop: true,	/* color oscuro de la pagina true-false */

		position: 'top',	/* posicion de ubicacion top--bottom--center top-end bottom-end top-start */
		/* bottom-start center-start center-end */

		allowOutsideClick: true,	/* para NO salir con un click */
		allowEscapeKey: true,	/* para SI salir con un escape */
		allowEnterKey: false,	/* para SI salir con un enter */

	}).then((result) => {
		/* Read more about isConfirmed, isDenied below */
		if (result.isConfirmed) {
		 // this.submit();
			window.location.href=url;
		}
	  })
}

function registroproyecto(e){
	e.preventDefault();
	var url = e.currentTarget.getAttribute('href');
	Swal.fire({
		title: '¿Está seguro que deseas registrar el proyecto?',
		text: '¡ El proyecto se registrara !',
		icon: 'warning',	/*icono que va mostrar success-error-info-warning-question*/
		showCancelButton: true,
		confirmButtonColor: '#0F4143',
		cancelButtonColor: '#8592a3',
		confirmButtonText: 'Si, Eliminar',
		cancelButtonText: 'No, Salir',
		reverseButtons: true,
		//width:'300px',
		padding: '20px',
		//background: 'rgb(70,200,255)',
		backdrop: true,	/* color oscuro de la pagina true-false */

		position: 'top',	/* posicion de ubicacion top--bottom--center top-end bottom-end top-start */
		/* bottom-start center-start center-end */

		allowOutsideClick: true,	/* para NO salir con un click */
		allowEscapeKey: true,	/* para SI salir con un escape */
		allowEnterKey: false,	/* para SI salir con un enter */

	}).then((result) => {
		/* Read more about isConfirmed, isDenied below */
		if (result.isConfirmed) {
		 // this.submit();
			window.location.href=url;
		}
	  })
}

function activar(e){
	e.preventDefault();
	var url = e.currentTarget.getAttribute('href');

	Swal.fire({
		title: '¿Está seguro que deseas Activar el Registro?',
		text: '¡ El registro se Activara !',
		icon: 'warning',	/*icono que va mostrar success-error-info-warning-question*/
		showCancelButton: true,
		confirmButtonColor: '#5cb85c',
		cancelButtonColor: '#8592a3',
		confirmButtonText: 'Si, Activar',
		cancelButtonText: 'No, Salir',
		reverseButtons: true,
		//width:'300px',
		padding: '20px',
		//background: 'rgb(70,200,255)',
		backdrop: true,	/* color oscuro de la pagina true-false */

		position: 'top',	/* posicion de ubicacion top--bottom--center top-end bottom-end top-start */
		/* bottom-start center-start center-end */

		allowOutsideClick: true,	/* para NO salir con un click */
		allowEscapeKey: true,	/* para SI salir con un escape */
		allowEnterKey: false,	/* para SI salir con un enter */

	}).then((result) => {
		/* Read more about isConfirmed, isDenied below */
		if (result.isConfirmed) {
		 // this.submit();
			window.location.href=url;
		}
	  })
}

function verificar(e){
	e.preventDefault();
	var url = e.currentTarget.getAttribute('href');

	Swal.fire({
		title: '¿Está seguro que ya verifico el Documento?',
		text: '¡ El registro se Verificara !',
		icon: 'warning',	/*icono que va mostrar success-error-info-warning-question*/
		showCancelButton: true,
		confirmButtonColor: '#5cb85c',
		cancelButtonColor: '#8592a3',
		confirmButtonText: 'Si, Verificado',
		cancelButtonText: 'No, Salir',
		reverseButtons: true,
		//width:'300px',
		padding: '20px',
		//background: 'rgb(70,200,255)',
		backdrop: true,	/* color oscuro de la pagina true-false */

		position: 'top',	/* posicion de ubicacion top--bottom--center top-end bottom-end top-start */
		/* bottom-start center-start center-end */

		allowOutsideClick: true,	/* para NO salir con un click */
		allowEscapeKey: true,	/* para SI salir con un escape */
		allowEnterKey: false,	/* para SI salir con un enter */

	}).then((result) => {
		/* Read more about isConfirmed, isDenied below */
		if (result.isConfirmed) {
		 // this.submit();
			window.location.href=url;
		}
	  })
}