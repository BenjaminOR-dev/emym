## API de estados y municipios de méxico en Laravel 8 (PHP 7.4)

Este proyecto contiene los estados con su respectivo municipio, listo para montarse en un servidor
y usarla en tus proyectos

## Instalación

- Instalacion de dependencias
- Configuración de .env para la conexión a la base de datos (Opcional)
- Ejecutar las migraciones y seeders desde consola con 'php artisan migrate:fresh --seed'

## Uso de la API

- GET '/' Trae todos los estados
- GET '/municipios/{id_estado}' Trae todos los municipios pasando el id de un estado como parametro
