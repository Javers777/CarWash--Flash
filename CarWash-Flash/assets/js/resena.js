
let selectedEstrellas = null;

function setEstrellas(estrellas) {
    selectedEstrellas = estrellas;
    document.getElementById('estrellas').value = estrellas;
}

function validateForm() {
    if (selectedEstrellas === null) {
        alert('Por favor, seleccione una cantidad de estrellas.');
        return false;
    }
    return true;
}
