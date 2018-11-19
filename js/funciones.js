function cargarModulo(mod){
    var li = $(mod);
    var data = $(mod).find('a').attr('data-value');
    $('#contenido').fadeOut(500, function(){
        $('#contenido').load("mod/" + data + ".php", function(){
            $('#contenido').fadeIn(500);
        });
    });
    $('#contenido').load("mod/" + data + ".php");
}

function cargar(modulo){
    $('#contenido').load("mod/" + modulo + ".php");
}