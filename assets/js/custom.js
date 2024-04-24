
let tbldata;
let myTable2;
let myTable3;
let voluntariado;
let tablaacceso;
let searchInput;
let rankingdocente;

$(document).ready(function() {
    // Inicializa DataTables en tu tabla, pero sin mostrarla de inmediato
    var tablaacceso = $('#tablaacceso').DataTable({
        searching: true,
        deferRender: true,
        columns: [
            // Configura tus columnas aquí
        ]
    });

    // Oculta la tabla inicialmente
    $('#tablaacceso').hide();

    // Escucha el evento de entrada en el cuadro de búsqueda
    $('#searchInput').on('input', function() {
        // Muestra la tabla cuando se escriba en el cuadro de búsqueda
        $('#tablaacceso').show();
        // Realiza la búsqueda en la tabla
        tablaacceso.search(this.value).draw();
    });
});

let rankingdoc= new DataTable('#rankingdocente', {
    "language": {
      "lengthMenu": "Mostrar _MENU_ registros por página",
      "zeroRecords": "No se encontraron registros",
      "info": "Mostrando página _PAGE_ de _PAGES_",
      "infoEmpty": "No hay registros disponibles",
      "infoFiltered": "(filtrado de un total de _MAX_ registros)",
      "search": "Buscar",
      "paginate": {
        "first": "Primero",
        "last": "Último",
        "next": "Siguiente",
        "previous": "Anterior"
      }
    },
    "order": [
      [3, 'desc'] 
    ]
  
  });

let table1= new DataTable('#myTable5', {
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros por página",
    "zeroRecords": "No se encontraron registros",
    "info": "Mostrando página _PAGE_ de _PAGES_",
    "infoEmpty": "No hay registros disponibles",
    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
    "search": "Buscar",
    "paginate": {
      "first": "Primero",
      "last": "Último",
      "next": "Siguiente",
      "previous": "Anterior"
    }
  },
  "order": [
    [3, 'desc'] 
  ]

});
let table = new DataTable('#tbldata', {
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros por página",
    "zeroRecords": "No se encontraron registros",
    "info": "Mostrando página _PAGE_ de _PAGES_",
    "infoEmpty": "No hay registros disponibles",
    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
    "search": "Buscar",
    "paginate": {
      "first": "Primero",
      "last": "Último",
      "next": "Siguiente",
      "previous": "Anterior"
    }

  }
});

let table4 = new DataTable('#voluntariado', {
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros por página",
    "zeroRecords": "No se encontraron registros",
    "info": "Mostrando página _PAGE_ de _PAGES_",
    "infoEmpty": "No hay registros disponibles",
    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
    "search": "Buscar",
    "paginate": {
      "first": "Primero",
      "last": "Último",
      "next": "Siguiente",
      "previous": "Anterior"
    }

  }
});
let table3 = new DataTable('#myTable3', {
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros por página",
    "zeroRecords": "No se encontraron registros",
    "info": "Mostrando página _PAGE_ de _PAGES_",
    "infoEmpty": "No hay registros disponibles",
    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
    "search": "Buscar",
    "paginate": {
      "first": "Primero",
      "last": "Último",
      "next": "Siguiente",
      "previous": "Anterior"
    }

  }
});
//let table2 = new DataTable('#myTable2');


let table2 = new DataTable('#myTable2', {
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros por página",
    "zeroRecords": "No se encontraron registros",
    "info": "Mostrando página _PAGE_ de _PAGES_",
    "infoEmpty": "No hay registros disponibles",
    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
    "search": "Buscar",
    "paginate": {
      "first": "Primero",
      "last": "Último",
      "next": "Siguiente",
      "previous": "Anterior"
    }

  }
});


function alertaPersonalizada(type, mensaje) {
    Swal.fire({
      position: "top-end",
      icon: type,
      title: mensaje,
      showConfirmButton: false,
      timer: 1500
    });
  
  }
  
  function eliminarRegistro(title, text, accion, url,table) {
  
    Swal.fire({
      title: title,
      text: text,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: accion
    }).then((result) => {
      if (result.isConfirmed) {
        const http = new XMLHttpRequest();
        http.open("GET", url, true);
        http.send();
        http.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.responseText);
            alertaPersonalizada(res.tipo,res.mensaje);
            if (res.tipo == 'success') {
                table.ajax.reload();
            }
          }
  
        };
  
  
        // Swal.fire({
        //   title: "Deleted!",
        //   text: "Your file has been deleted.",
        //   icon: "success"
        // });
      }
    });
  }

  