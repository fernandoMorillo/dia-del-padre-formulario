function validar(obj) {
    var d = document.formulario;
    if (obj.checked == true) {
        d.enviar.disabled = false;
    } else {
        d.enviar.disabled = true;
    }
}