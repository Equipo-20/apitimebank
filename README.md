# APITIMEBANK

Bienvenido a APITIMEBANK. Este es un proyecto desarrollado con Symfony y API Platform que genera una API para realizar las operaciones CRUD
sobre una base de datos apitimebanks y la tabla publications.

## Requisitos previos

Antes de comenzar, asegúrate de tener instalados los siguientes requisitos:

- Git
- PHP
- Symfony CLI: https://symfony.com/download
- Composer: Si no tienes instalado Composer, sigue las instrucciones de instalación desde su sitio oficial [aquí](https://getcomposer.org/download/).
- XAMPP
  
## Instalación de XAMPP

XAMPP es una distribución de Apache, MySQL, PHP y Perl que facilita la configuración de un entorno de desarrollo local para aplicaciones web.

1. Descarga XAMPP desde el sitio oficial: [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).

2. Ejecuta el instalador descargado y sigue las instrucciones del asistente de instalación para instalar XAMPP en tu sistema.

3. Durante la instalación, selecciona los componentes que deseas instalar. Asegúrate de seleccionar al menos los módulos "Apache" y  "MySQL" para poder utilizar una base de datos MySQL con tu aplicación Symfony.

## Clonar el repositorio

Para obtener una copia de este proyecto en tu máquina local, ejecuta el siguiente comando en tu terminal:

git clone https://github.com/Equipo-20/apitimebank.git

## Instalación de dependencias

Después de clonar el repositorio, navega al directorio del proyecto e instala las dependencias utilizando Composer:

cd apitimebank
composer install

## Configuración del entorno

Edita el archivo `.env` y actualiza los valores de las variables de entorno según tus configuraciones.

## Creación de la base de datos

1. Abre XAMPP Control Panel desde el menú de inicio o la ubicación donde se instaló XAMPP.

2. Haz clic en el botón "Start" junto al módulo "MySQL" para iniciar el servidor de base de datos.

3. Abre un navegador web y visita [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/).

El proyecto utiliza una base de datos, es necesario crear la base de datos y ejecutar las migraciones:

php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

Esta API utiliza la base de datos "apibanktime" y la tabla "publicacion" con la siguiente estructura:

Publicacion {
id: integer (readOnly: true)
Tipo: string
Categoria: string
Titulo: string
Contenido: string
Usuario: string
Localidad: string
Provincia: string
Claves: [nullable: true, string]
Tiempo: integer
Caducidad: string($date-time)
}

## Ejecución del servidor local

1. Abre XAMPP Control Panel desde el menú de inicio o la ubicación donde se instaló XAMPP.

2. Haz clic en el botón "Start" junto al módulo "Apache" para iniciar el servidor web.

Para ejecutar el servidor local de Symfony y ver el proyecto en tu navegador, utiliza el siguiente comando:

symfony server:start -d

## Acceso a la API

El proyecto expone una API, puedes acceder a ella en la siguiente URL:

http://localhost:8000/api o http://127.0.0.1:8000/api

Para acceder a un listado de las publicaciones (Select * from publications): 
GET http://localhost:8000/api/publications

Para acceder pero con un filtrado por campos (Select * from publications where campo1="valor1" and campo2="valor2"):
GET http://localhost:8000/api/publications?campo1=valor1&campo2=valor2

Para grabar una publicación en la base de datos (Insert into publications (campo1,campo2,...campoN) values (valor1, valor2, ... valorN)):
POST http:/localhost:8000  Y pasarle un json con los datos de la publicacion, sin incluir id

## Problemas conocidos y ayuda adicional

Si encuentras algún problema o tienes preguntas sobre el proyecto, contacta conmigo (mailto:ramirez.martin.francisco@gmail.com) para obtener ayuda.

¡Gracias por probar APITIMEBANK! Espero que disfrutes explorando y trabajando con el proyecto.


