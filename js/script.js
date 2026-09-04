function validarFormulario() {
    var nombre = document.getElementById('nombre').value.trim();
    var descripcion = document.getElementById('descripcion').value.trim();
    var precio = document.getElementById('precio').value;
    var cantidad = document.getElementById('cantidad').value;

    if (nombre === '' || descripcion === '' || precio === '' || cantidad === '') {
        alert('Por favor complete todos los campos');
        return false;
    }

    if (!/^[a-zA-Z\s]+$/.test(nombre)) {
        alert('El nombre solo debe contener letras y espacios');
        return false;
    }

    if (isNaN(precio) || parseFloat(precio) < 0) {
        alert('El precio debe ser un numero positivo');
        return false;
    }

    if (isNaN(cantidad) || parseInt(cantidad) < 0 || cantidad % 1 !== 0) {
        alert('La cantidad debe ser un numero entero positivo');
        return false;
    }

    return true;
}