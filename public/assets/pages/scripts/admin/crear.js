$(document).ready(function(){
    Biblioteca.validacionGeneral('form-general');
    $('#icono').on('blur', function () {
        $('#mostrar-icono').removeClass().addClass('fa fa-fw fa-2x '+ $(this).val() );
    });
});