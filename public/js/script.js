// alert('Hola mundo')
function openModal(nombre_film) {
    // alert('Hola mundo: ' + nombre_film)
    $('.film-title').text(nombre_film)
}
function calcularPrecio() {
    entradas = $('#ticket-size').val()
    costo = 40
    total = 0
    total = entradas * costo
    $('#ticket-cost').text(total)
}
function pagoEfectivo() {
    efectivo = $('#ticket-money').val()
    precio = parseInt($('#ticket-cost').text())
    cambio = efectivo - precio
    if (cambio < 0) {
        alert('Fondos Insuficientes :(')
    } else {
        alert('Su cambio es de: ' + cambio)
    }
}
function resetData() {
    $('#ticket-cost').text('0.00')
    $('#ticket-money').val(0)
    $('#ticket-size').val(0)
}