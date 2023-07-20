# APITIMEBANK

Bienvenido a APITIMEBANK. Este es un proyecto desarrollado con Symfony y API Platform que genera una API para realizar las operaciones CRUD
sobre una base de datos apitimebanks y la tabla publications.

## Requisitos previos

Antes de comenzar, asegúrate de tener instalados los siguientes requisitos:

- Git
- PHP 
- Composer: [Instrucciones para instalar Composer si es necesario].
- MySQL: A través de XAMPP 

## Clonar el repositorio

Para obtener una copia de este proyecto en tu máquina local, ejecuta el siguiente comando en tu terminal:

git clone https://github.com/Equipo-20/apitimebank.git


## Instalación de dependencias

Después de clonar el repositorio, navega al directorio del proyecto e instala las dependencias utilizando Composer:

cd tuproyecto
composer install


## Configuración del entorno

Antes de ejecutar el proyecto, asegúrate de configurar el entorno copiando el archivo `.env.example` a `.env` y proporcionando los valores adecuados para tu entorno:


Edita el archivo `.env` y actualiza los valores de las variables de entorno según tus configuraciones.

## Creación de la base de datos

Si el proyecto utiliza una base de datos, crea la base de datos y ejecuta las migraciones:

php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

## Ejecución del servidor local

Para ejecutar el servidor local de Symfony y ver el proyecto en tu navegador, utiliza el siguiente comando:

symfony server:start

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


