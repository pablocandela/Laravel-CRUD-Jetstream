$(document).ready(function() {
    $('#products').DataTable({
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "Todos"] ],
        "oLanguage": {
            "sSearch": "Buscar"
          },
          "language": {
            "lengthMenu": "Mostrar _MENU_",
            "zeroRecords": "No se encontraron productos",
            "info": "Mostrando pagina _PAGE_ of _PAGES_",
            "infoEmpty": "No se encontraron coincidencias",
            "infoFiltered": "",
            "paginate": {
                "previous": "Anterior",
                "next": "Siguiente"
            }
        }
    })
});