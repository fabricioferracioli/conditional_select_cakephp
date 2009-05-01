$(document).observe('dom:loaded', function(){
    new dgCidadesEstados({
        estado: $('estado'),
        cidade: $('cidade')
    });
});
