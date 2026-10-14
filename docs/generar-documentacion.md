# Generar la documentación técnica

Cada versión del proyecto se documenta con la herramienta propia de su
lenguaje. La documentación se genera a partir de los comentarios del código.

## Python: Sphinx

Instalación (con el entorno virtual activado, desde `python/`):

```bash
pip install sphinx
```

Generar el HTML (desde `python/docs/`):

```bash
.\make.bat html
```

El resultado queda en `python/docs/_build/html/index.html`.

Para generar el PDF hace falta tener MiKTeX instalado. El comando
`.\make.bat latexpdf` necesita Perl, que no está instalado por defecto en
Windows. Como alternativa, se compila el archivo LaTeX directamente:

```bash
cd _build\latex
pdflatex -interaction=nonstopmode calculadoradeprecios.tex
pdflatex -interaction=nonstopmode calculadoradeprecios.tex
```

Se ejecuta dos veces para que el índice y las referencias queden bien. La
primera vez MiKTeX descarga los paquetes que faltan. El PDF resultante se
guarda en `python/docs/pdf/`.

## JavaScript: JSDoc

Instalación (desde `javascript/`):

```bash
npm install --save-dev jsdoc
```

Generar el HTML:

```bash
npx jsdoc calculadora.js -d docs
```

El resultado queda en `javascript/docs/`. Las funciones aparecen en la
página `global.html`, enlazada desde el menú lateral.

## PHP: phpDocumentor

Descargar `phpDocumentor.phar` desde [phpdoc.org](https://phpdoc.org/) y
guardarlo en una ruta **sin espacios**, por ejemplo `C:\tools\`.

Generar el HTML (desde `php/`):

```bash
php C:\tools\phpDocumentor.phar run -f calculadora.php -t C:\tools\salida-php
xcopy C:\tools\salida-php docs /E /I
```

El resultado queda en `php/docs/index.html`.
