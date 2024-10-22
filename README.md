# Travels-server

Este es un proyecto construido con Laravel. A continuación se presentan las instrucciones para descargar y ejecutar la aplicación.

## Requisitos previos

Antes de comenzar, asegúrate de tener instalado:

- [PHP](https://www.php.net/) (versión 8.0 o superior)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/) (o cualquier otro sistema de gestión de bases de datos que estés utilizando)

## Paso 1
Dirigete a la carpeta del proyecto desde consola
```bash
cd travels-server
```
## paso 2
Luego instala las dependencias con composer
```bash
composer install
```
## paso 3
Migra la base de datos
```bash
php artisan migrate
```
## paso 4
Iniciar el servidor
```bash
php artisan serve
```
