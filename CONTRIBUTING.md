#  ¿Cómo Contribuir?

CakePHP encanta dar la bienvenida a sus contribuciones. Hay varias maneras de ayudar:
* Crear una [Pregunta](https://github.com/Widrogo/Mujer-Libre-De-Violencia/issues) en GitHub, si usted ha encontrado un error
* Casos de prueba de escritura para problemas de bichos abierta
* Parches de escritura para asuntos bug / funciones abiertos, preferiblemente con casos de prueba incluidos
* Contribuir a la [documentación](https://github.com/Widrogo/Mujer-Libre-De-Violencia/docs)

Hay algunas pautas que necesitamos contribuyentes a seguir para la contribucion todo en la parte de arriba.

## Empezando

* Asegúrese de que tener una [Cuenta en GitHub](https://github.com/signup/free).
* Presentar una [un cambio](https://github.com/Widrogo/Mujer-Libre-De-Violencia/issues), asumiendo uno no existe ya.
   * Describa claramente el problema incluyendo pasos para reproducir cuando se trata de un error.
   * Asegúrese de llenar en la versión más antigua que se conoce tiene el problema.
* Fork del repositorio en GitHub.


## Haciendo cambios

* Crear una sucursal tema desde la que desea basar su trabajo.
   * Esta suele ser la rama principal.
   * Sólo apuntar ramas de liberación si está seguro de que su solución debe ser en aquella rama(branch).
   * Para crear rápidamente una rama tema basado en master;
    `git branch master /my_contribution master` entonces descargar la nueva branch
    `git checkout master/my_contribution`. Mejor evitar trabajar directamente en la
    `master` branch, para evitar conflictos si se tira en las actualizaciones desde el origen.
* Hacer commits de unidades lógicas.
* Compruebe si hay espacios en blanco innecesarios con `git diff --check` antes de comprometerse.
* Uso descriptivo los mensajes de confirmación y el número de referencia #issue.
* Casos de prueba  deben seguir pasando. Puede ejecutar las pruebas solo a nivel local.


## Cambios Presentando

* Empuje sus cambios a una rama tema en su fork del repositorio.
* Presentar una solicitud de extracción en el repositorio en la organización cakephp, con la
   rama de destino correcto. 
