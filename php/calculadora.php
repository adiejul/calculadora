<?php
/**
 * Calculadora de precios con IVA y descuento.
 *
 * @package CalculadoraPrecios
 */

/**
 * Calcula el precio con IVA incluido.
 *
 * @param float $precio Precio base sin IVA.
 * @param float $iva    Porcentaje de IVA, por ejemplo 21.
 * @return float Precio con el IVA aplicado.
 */
function calcularIva(float $precio, float $iva): float
{
    return $precio + ($precio * $iva) / 100;
}

/**
 * Aplica un descuento al precio.
 *
 * @param float $precio Precio base sin descuento.
 * @param float $dto    Porcentaje de descuento, por ejemplo 10.
 * @return float Precio con el descuento aplicado.
 */
function aplicarDescuento(float $precio, float $dto): float
{
    return $precio - ($precio * $dto) / 100;
}

/**
 * Calcula el precio final: primero aplica el descuento y después el IVA.
 *
 * @param float $precio Precio base bruto.
 * @param float $iva    Porcentaje de IVA, por ejemplo 21.
 * @param float $dto    Porcentaje de descuento, por ejemplo 10.
 * @return float Precio final con descuento e IVA.
 */
function calcularPrecioTotal(float $precio, float $iva, float $dto): float
{
    $precioDto = aplicarDescuento($precio, $dto);
    return calcularIva($precioDto, $iva);
}

/**
 * Pide precio, descuento e IVA por pantalla y muestra el total.
 *
 * @return void
 */
function main(): void
{
    echo "Calculadora de precios\n";
    echo "Introduce el precio del articulo: ";
    $precio = (float) trim(fgets(STDIN));
    echo "Introduce el descuento a aplicar: ";
    $dto = (float) trim(fgets(STDIN));
    echo "Introduce el iva a aplicar: ";
    $iva = (float) trim(fgets(STDIN));

    $resultado = calcularPrecioTotal($precio, $iva, $dto);

    echo "Precio = $precio\n";
    echo "Descuento = $dto\n";
    echo "IVA = $iva\n";
    echo "Total = " . number_format($resultado, 2) . "€\n";
}

main();