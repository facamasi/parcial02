Evaluación de Proyecto de Desarrollo en Laravel

Objetivo:
Desarrollar una aplicación en Laravel para la gestión de un concesionario de
automóviles, facilitando operaciones CRUD sobre vehículos, clientes y ventas.

Pasos para descargar el proyecto y utilizarlo:
1. En el explorador de archivos elegir una ruta para clonar el proyecto, por ejemplo "C:\Laravel-9.0-projects" Esta es una carpeta creada dentro del disco c.
2. Selecciona la ruta en la parte superior, aparece asi : Este equipo - Disco Local (c): , etc. Click en la ruta y borrar el contenido para escribir cmd.
3. Se abrirá una terminal en donde utilizamos el comando git clone "URL del repositorio" - en este caso seria git clone "https://github.com/facamasi/parcial02.git" damos enter y esperamos a que finalice el proceso.
4. Abrimos el proyecto en la ruta donde clonamos y al abrir visual studio damos ctrl + shift + Ñ para abrir una terminal, utilizamos "Composer install" y "Composer Update".
5. Una vez finalizado en Xampp levantamos el servidor Apache y Msql-damos en la terminal de visual studio code : "php artisan serve" y nos dirigimos a la URL que nos otorga.
6. Se nos abrira la pagina de laravel y en la parte derecha superior observamos Login y Register, seleccionamos register para lleanr los campos y luego nos logueamos para usar el proyecto.

Posibles errores:
1.Si la base de datos phpMyAdmin tira una alerta diciendo que la extensión mysqli no está vamos a Xampp-Config del servidor Apache-Php.ini y descomentamos esta extension si tiene punto y coma "extension=mysqli".
2.En caso de que no se solucione, ejecutar el "http://localhost/phpmyadmin/" en otro navegador, como por ejemplo EDGE.
3. 505 ERROR : Vamos al proyecto y buscamos en el listado izquierdo un archivo llamado .env.example - damos click derecho-rename y borramos para solo dejar -env. 
En la linea 22 a la 27 quitamos este signo para descomentar # pasara de verde a un color azul.

En caso de necesitar nuevamente Laravel Breeze, ejecutar los siguientes comandos en el orden:
1.composer require laravel/breeze --dev
2.npm install ; npm run dev
3.composer update
4.php artisan breeze:install
5.npm run dev


JOSEPH ALEXANDER PARRA TOVAR S5AN 
CECEP
