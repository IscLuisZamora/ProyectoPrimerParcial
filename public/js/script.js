// alert('Hola mundo')
function calcularPrecio() {
    entradas = $('#ticket-size').val()
    costo = 40
    total = 0
    if (entradas <= 0) {
        swal("Ups!", "Ingresaste datos incorrectos!", "error");
    } else {
        total = entradas * costo
        $('#ticket-cost').text(total)
    }
}
function resetData() {
    $('#ticket-cost').text('0.00')
    $('#ticket-money').val(0)
    $('#ticket-size').val(0)
}