function crearProducto() {
    formData = new FormData(document.getElementById('formProducto'));
    $.ajax({
        url: '../../app/controllers/productController.php',
        type: 'POST',
        data: formData,
        dataType: "json",
        cache: false,
        contentType: false,
        processData: false,
    }).done(function (result) {
        location.reload();
    });
}

function eliminarProducto() {
    id = $(this).data('id');
    if (window.confirm('Desea eliminar?') == true) {
        $.ajax({
            url: '../../app/controllers/productController.php',
            type: 'POST',
            data: {
                metodo: 'eliminarProducto',
                id: id
            }
        }).done(function (resultado) {
            location.reload();
        })
    }
}

function actualizarProducto() {
    formData = new FormData(document.getElementById('actualizarProductos'));
    $.ajax({
        url: '../../app/controllers/productController.php',
        type: 'POST',
        data: formData,
        dataType: "json",
        cache: false,
        contentType: false,
        processData: false,
    }).done(function (result) {
        location.reload();
    });
}

function editarProducto() {
    id = $(this).data('id');
    $.ajax({
        url: '../../app/controllers/productController.php',
        type: 'POST',
        data: {
            metodo: 'obtenerProducto',
            id: id
        }
    }).done(function (resultado) {
        resultado = JSON.parse(resultado);
        $.ajax({
            url: '../../resources/views/parts/editar.php',
            type: 'POST',
            data: resultado
        }).done(function (contenido) {
            $('#content').html(contenido);
            $('#actualizarProductos').on('submit', actualizarProducto);
        })
    })
}

$(document).ready(function () {
    if ($('#productos').length > 0) {
        $.ajax({
            url: 'http://localhost/catalogo/app/controllers/productController.php',
            type: 'POST',
            data: {
                metodo: 'obtenerProductos'
            }
        }).done(function (result) {
            result = JSON.parse(result);
            $.ajax({
                url: 'http://localhost/catalogo/resources/views/parts/productos.php',
                type: 'POST',
                data: result
            }).done(function (content) {
                $('#content').html(content);
                $('#formProducto').on('submit', crearProducto);
                $('.eliminar').on('click', eliminarProducto);
                $('.editar').on('click', editarProducto);
            })
        })
    };
    $('#cerrarSesion').on('click', function () {
        $.ajax({
            url: 'http://localhost/catalogo/app/controllers/authController.php',
            type: 'POST',
            data: {
                metodo: 'logouth'
            }
        }).done(function (data) {
            location.assign('../../')
        })
    });
})