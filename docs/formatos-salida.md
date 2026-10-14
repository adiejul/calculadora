# Formatos de salida

Las tres herramientas generan la documentación a partir de los comentarios
del código, pero no todas ofrecen los mismos formatos.

| Herramienta   | Formato | Para qué sirve                                |
|---------------|---------|-----------------------------------------------|
| Sphinx        | HTML    | Consulta en el navegador       |
| Sphinx        | PDF     | Entrega cerrada, para imprimir o enviar       |
| JSDoc         | HTML    | Consulta en el navegador                      |
| phpDocumentor | HTML    | Consulta en el navegador                      |

## Comparación

Sphinx es la más flexible: con el mismo código fuente genera HTML y PDF, y
admite otros formatos como EPUB o texto plano cambiando solo el comando.
JSDoc y phpDocumentor generan sobre todo una web HTML, que es lo que se usa
para consultar la API de un proyecto.

El HTML es el formato más cómodo para consultar, porque se navega y se
busca. El PDF es mejor para entregar un documento cerrado que no cambia.
En ambos casos se ejecutn con los comentarios del código, así que
la documentación se mantiene al día regenerándola.