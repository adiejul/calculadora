def calcular_iva(precio, iva):
    """Calcula el precio con IVA
    
    :param precio: Precio base sin IVA.
    :param iva: El iva que se le tiene que aplicar al precio.
    :return: Devuelve el precio con IVA
    """

    resultado = ((precio*iva)/100)+precio

    return resultado

def aplicar_descuento(precio, dto):
    """Calcula el precio quitandole el descuento
    
    :param precio: Precio base sin descuento
    :param dto: El descuento que se le tiene que aplicar al precio.
    :return: Devuelve el precio reducido
    """

    resultado = precio-((precio*dto)/100)

    return resultado

def calcularPrecioTotal(precio, iva, dto):
    """Calcula el precio quitandole el descuento y con IVA
    
    :param precio: Precio base bruto
    :param dto: El descuento que se le tiene que aplicar al precio
    :param iva: El iva que se le tiene que aplicar al precio.
    :return: Devuelve el precio con descuento y con IVA
    """
    precioDto = aplicar_descuento(precio, dto)

    precioIva = calcular_iva(precioDto, iva)

    return precioIva

def main():
    print("Calculadora de precios")
    precio = float(input("Introduce el precio del articulo: "))
    print("Vamos a calcular el descuento")
    dto = float(input("Introduce el descuento a aplicar: "))
    print("Vamos a calcular el iva")
    iva = float(input("Introduce el iva a aplicar: "))
        
    resultado = calcularPrecioTotal(precio, iva, dto)
   
    print(f"Precio = {precio}")
    print(f"descuento = {dto} ")
    print(f"iva = {iva} ")
    print(f"total = {resultado}€")

if __name__=="__main__":
    main()