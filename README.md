
# HAL21-Ampliación

_El proyecto consiste en una web que recoge la información de las mesas de un restaurante para poder ocupar o desocupar mesas con un click y luego poder ver el propio historial para mantener un control de lo que esta Disponible y a que horas y dias, augmentando la eficiencia se an añadido funciones que previamente no estaban disponibles_

## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._

Mira **Deployment** (Despliegue) para conocer como desplegar el proyecto.


### Pre-requisitos 📋

_Que cosas necesitas para instalar el software y como instalarlas_

```
Necesitas : SQL XAMP y Visual Studio Code
```

### Instalación 🔧

_Una serie de ejemplos paso a paso que te dice lo que debes ejecutar para tener un entorno de desarrollo ejecutandose_

_Instalaciones_

```
La ultima versión de XAMP
```

__

```
La ultima versión de MYSQL y MYSQL Workbench <-- (Opcional)
```
_Añadir la base de datos_

```
Tendras que insertar una vez descargado el proyecto en el directorio bd encontraras todos los inserts que tendrás que 
meter en el sql copiar el texto, pegar y ejectutar el contenido del fichero
El orden es el siguiente:
bd_restaurante.sql
bd_restaurante_tbl_camareros.sql
bd_restaurante_tbl_lugar.sql
bd_restaurante_tbl_mesa.sql
bd_restaurante_tbl_fecha.sql
```
_Creación de un fichero config_
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
Introduce todo el directorio completo dentro de hdocs en Xampp y podras acceder al directorio mediante el navegador cuando el servidor apache del XAMP esté activado junto con el SQL


## Despliegue 📦

Entramos en 000Webhost (https://es.000webhost.com) y creamos una cuenta
a continuación agregaremos un nuevo proyecto,
en el editor de ficheros dentro de public html pegaremos todos los directorios de nuestro proyecto.

Ahora procederemos a añadir la base de datos creando una base de datos en 000webhost en Tools y Database manager, dentro crearemos la base de datos con nombre bd_restaurante
Tendras que insertar una vez descargado el proyecto en el directorio bd encontraras todos los inserts que tendrás que 
meter en el phpMyadmin copiar el texto, pegar y ejectutar el contenido del fichero
El orden es el siguiente:

bd_restaurante_tbl_camareros.sql
bd_restaurante_tbl_lugar.sql
bd_restaurante_tbl_mesa.sql
bd_restaurante_tbl_fecha.sql

Una vez tengamos esto y configuremos el fichero config.php ya podremos empezar.


## Construido con 🛠️

_Menciona las herramientas que utilizaste para crear tu proyecto_

* [MysqlWorkbench](http://www.dropwizard.io/1.0.2/docs/) - El editor de base de datos
* [Visual Studio Code](https://maven.apache.org/) - Editor de codigo

## Versionado 📌

Versión del proyecto 0.1.0

## Autores ✒️

* **Juan Carlos Gundin** - 

## Licencia 📄

Abierto para todos.

## Expresiones de Gratitud 🎁

* Gracias a la internet y a Danny Larrea por ser un absolute CHAD un abrazo :P
