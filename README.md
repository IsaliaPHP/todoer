# todoer
Lista de tareas con IsaliaPHP

## Configuración
Puede usarse todoer usando la base de datos de ejemplo que puede importarse desde el archivo todo.sql en la raíz del repositorio.

Es necesario configurar el acceso a la base de datos desde App\Libs\Config.php modificando las constantes:
- CONNECTION_STRING
- USER
- PASSWORD

## Uso de AJAX
Para este proyecto se hace uso de jQuery para ejecutar llamadas post al controlador Todos que se encarga del CRUD
