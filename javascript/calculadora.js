/**
 * Calculadora de precios con IVA y descuento.
 *
 * @module calculadora
 */

/**
 * Calcula el precio con IVA incluido.
 *
 * @param {number} precio - Precio base sin IVA.
 * @param {number} iva - Porcentaje de IVA, por ejemplo 21.
 * @returns {number} Precio con el IVA aplicado.
 */
function calcularIva(precio, iva) {
    return precio + (precio * iva) / 100;
}

/**
 * Aplica un descuento al precio.
 *
 * @param {number} precio - Precio base sin descuento.
 * @param {number} dto - Porcentaje de descuento, por ejemplo 10.
 * @returns {number} Precio con el descuento aplicado.
 */
function aplicarDescuento(precio, dto) {
    return precio - (precio * dto) / 100;
}

/**
 * Calcula el precio final: primero aplica el descuento y después el IVA.
 *
 * @param {number} precio - Precio base bruto.
 * @param {number} iva - Porcentaje de IVA, por ejemplo 21.
 * @param {number} dto - Porcentaje de descuento, por ejemplo 10.
 * @returns {number} Precio final con descuento e IVA.
 */
function calcularPrecioTotal(precio, iva, dto) {
    const precioDto = aplicarDescuento(precio, dto);
    return calcularIva(precioDto, iva);
}



// Ejemplo: 100 € con 10 % de descuento y 21 % de IVA

console.log("Total:", calcularPrecioTotal(100, 21, 10).toFixed(2), "€");

