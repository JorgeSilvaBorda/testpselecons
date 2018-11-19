function cargar(modulo) {
    $('#contenido').fadeOut(200, function () {
        $('.modulo').hide();
        $('#modulo-' + modulo).show();
        $('#contenido').fadeIn(200);
    });
}