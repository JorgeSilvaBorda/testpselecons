function cargar(modulo) {
    $('#contenido').fadeOut(200, function () {
        $('.modulo').hide();
        $('#modulo-' + modulo).show();
        console.log("Se muestra: modulo-" + modulo);
        $('#contenido').fadeIn(200);
    });
}