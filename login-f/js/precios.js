// Función para convertir dólares a la moneda del país seleccionado
function convertirADOPrecio(dolares, tipoCambio) {
  return dolares * tipoCambio;
}

// Función para obtener el tipo de cambio según el país seleccionado
function obtenerTipoCambio(pais) {
  switch (pais) {
    case "colombia":
      return 3892; // Tipo de cambio para pesos colombianos
    case "mexico":
      return 16; // Tipo de cambio para pesos mexicanos
    case "argentina":
      return 880; // Tipo de cambio para pesos argentinos
    case "Euros":
      return 0.93;
    default:
      return 1; // Por defecto, no hay conversión
  }
}

// Función para convertir los precios al país seleccionado
function convertirPrecios() {
  // Obtener todos los precios en dólares desde la página
  var preciosEnDolares = document.querySelectorAll(".precioEnDolares");

  // Obtener el país seleccionado
  var paisSeleccionado = document.getElementById("selectPais").value;

  // Obtener el tipo de cambio para el país seleccionado
  var tipoDeCambio = obtenerTipoCambio(paisSeleccionado);

  // Convertir cada precio a la moneda del país seleccionado y mostrarlos al lado del precio original
  preciosEnDolares.forEach(function (precioEnDolares) {
    var precioEnDolaresValor = parseFloat(precioEnDolares.textContent);
    var precioConvertido = convertirADOPrecio(
      precioEnDolaresValor,
      tipoDeCambio
    );
    var elementoPadre = precioEnDolares.parentNode;
    var precioConvertidoSpan = elementoPadre.querySelector(".precioConvertido");
    precioConvertidoSpan.textContent =
      " (" +
      precioConvertido.toFixed(2) +
      " " +
      paisSeleccionado.toUpperCase() +
      ")";
  });
}
