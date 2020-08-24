#PHPBlock
_ Plataforma de Aprendizaje de Lenguaje PHP por medio de bloques_

##Comensando
 _ Estas instrucciones te permitirán obtener una copia del proyecto y ponerlo en funcionamiento_
### Pre-Requisitos
- PHP7
- Composer
- Git
- Laravel 5.8

### Intalación
- Primero clonaremos proyecto 
```
git clone (url del proyecto)
```
- Segundo actualizaremos nuestros paquetes con composer
```
composer update
```
- Tercero Generaremos nuestra llave para laravel con artisan
```
php artisan key:generate
```
-Cuarto  configurar nuestro archivo .evn  cambiandole el nombre de .env.example a solo  .env
- Quinto configurar el acceso a tu BD de mysql en ese archivo
- Sexto escribe en tu terminal
```
php artisan serve
```
- Una vez ejecutandose el servidor abrir el navegador y colocar la siguiente url
```
http://localhost:8000/bloques
```