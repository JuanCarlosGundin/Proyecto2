
# HAL21-Ampliaci贸n

_El proyecto consiste en una web que recoge la informaci贸n de las mesas de un restaurante para poder ocupar o desocupar mesas con un click y luego poder ver el propio historial para mantener un control de lo que esta Disponible y a que horas y dias, augmentando la eficiencia se an a帽adido funciones que previamente no estaban disponibles_

## Comenzando 馃殌

_Estas instrucciones te permitir谩n obtener una copia del proyecto en funcionamiento en tu m谩quina local para prop贸sitos de desarrollo y pruebas._

Mira **Deployment** (Despliegue) para conocer como desplegar el proyecto.


### Pre-requisitos 馃搵


```
Necesitas : SQL XAMP y Visual Studio Code
```

### Instalaci贸n 馃敡


_Instalaciones_

```
La ultima versi贸n de XAMP
```

__

```
La ultima versi贸n de MYSQL y MYSQL Workbench <-- (Opcional)
```
_A帽adir la base de datos_

```
Tendras que insertar una vez descargado el proyecto en el directorio bd encontraras todos los inserts que tendr谩s que 
meter en el sql copiar el texto, pegar y ejectutar el contenido del fichero
El orden es el siguiente:
2122_gundinjuancarlos.sql
2122_gundinjuancarlos_tbl_origen.sql
2122_gundinjuancarlos_tbl_perfiles.sql
2122_gundinjuancarlos_tbl_usuarios.sql
2122_gundinjuancarlos_tbl_lugar.sql
2122_gundinjuancarlos_tbl_mesa.sql
2122_gundinjuancarlos_tbl_fecha.sql
2122_gundinjuancarlos_tbl_reservas.sql
```
_Creaci贸n de un fichero config_
```
Crea un fichero llamado config.php en el directorio services con el siguiente contenido dentro:
```
```
<?php
define("SERVIDOR","localhost");
define("USUARIO","root");
define("PASSWORD","");
define("BD","bd_restaurante");
?>
```
Introduce todo el directorio completo dentro de hdocs en Xampp y podras acceder al directorio mediante el navegador cuando el servidor apache del XAMP est茅 activado junto con el SQL


## Despliegue 馃摝

Entramos en 000Webhost (https://es.000webhost.com) y creamos una cuenta
a continuaci贸n agregaremos un nuevo proyecto,
en el editor de ficheros dentro de public html pegaremos todos los directorios de nuestro proyecto.

Ahora procederemos a a帽adir la base de datos creando una base de datos en 000webhost en Tools y Database manager, dentro crearemos la base de datos con nombre bd_restaurante
Tendras que insertar una vez descargado el proyecto en el directorio bd encontraras todos los inserts que tendr谩s que 
meter en el phpMyadmin copiar el texto, pegar y ejectutar el contenido del fichero
El orden es el siguiente:

2122_gundinjuancarlos.sql

2122_gundinjuancarlos_tbl_origen.sql

2122_gundinjuancarlos_tbl_perfiles.sql

2122_gundinjuancarlos_tbl_usuarios.sql

2122_gundinjuancarlos_tbl_lugar.sql

2122_gundinjuancarlos_tbl_mesa.sql

2122_gundinjuancarlos_tbl_fecha.sql

2122_gundinjuancarlos_tbl_reservas.sql

Una vez tengamos esto y configuremos el fichero config.php ya podremos empezar.


## Construido con 馃洜锔?

* [MysqlWorkbench](http://www.dropwizard.io/1.0.2/docs/) - El editor de base de datos
* [Visual Studio Code](https://maven.apache.org/) - Editor de codigo

## Versionado 馃搶

Versi贸n del proyecto 0.1.0

## Autores 鉁掞笍

* **Juan Carlos Gundin** - 

## Licencia 馃搫

Abierto para todos.

## Expresiones de Gratitud 馃巵

* Gracias a la internet y a Danny Larrea por ser un absolute CHAD un abrazo :P
