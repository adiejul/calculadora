# Calculadora de precios

Programa que calcula el precio de un artículo con IVA y con descuento, (primero se aplica el descuento y después el IVA). Está
implementado en tres lenguajes y cada versión se documenta con la
herramienta propia de su plataforma.

## Estructura del repositorio

```text
calculadora/
|── README.md
├── docs/          Documentación general del proyecto
├── python/        Versión en Python (documentada con Sphinx)
├── javascript/    Versión en JavaScript (documentada con JSDoc)
└── php/           Versión en PHP (documentada con phpDocumentor)
```

## Requisitos

- Python 3.8 
- Node.js 17
- PHP 8.2 
- Git

## Ejecución

```bash
git clone https://github.com/adiejul/calculadora.git
cd calculadora
```

### Python

```bash
cd python
python calculadora.py
```

### JavaScript

```bash
cd javascript
node calculadora.js
```

### PHP

```bash
cd php
php calculadora.php
```

En los tres casos el programa pide el precio, el descuento y el IVA, y
muestra el total. Por ejemplo, con 100 €, un 10 % de descuento y un 21 % de
IVA, el total es 108,90 €.

## Documentación técnica

| Lenguaje   | Herramienta    | Salida                                         |
|------------|----------------|------------------------------------------------|
| Python     | Sphinx         | HTML y PDF (`python/docs/`)                    |
| JavaScript | JSDoc          | HTML y JSON(`javascript/docs/`)                |
| PHP        | phpDocumentor  | HTML (`php/docs/`)                             |

Cada función está documentada en el propio código (docstrings, comentarios
JSDoc y DocBlocks), y las herramientas generan la documentación a partir de
esos comentarios.

La guía para regenerarla y la descripción de los formatos de salida están en
la carpeta [`docs/`](docs/).