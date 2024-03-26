#Curso de Laravel Profesional de GOGODEV

# Laravel 2 - Vistas y plantillas

Crear un nuevo proyecto de laravel  
``` php
laravel new blade 
```
**routes>web.php**  

Enrutamiento de nuestra aplicación.  
Clase Route usamos el método estático view (:: en php).  
Asociamos el directorio '/' a la vista, y le asignamos un nombre. 
Landing estática.  

```php
Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
``` 

**resources>view**
En este directorio están las **Vistas** de nuestra aplicación. 
Nomenclatura index.blade.php // about.blade.php 
Dentro de Laravel las vistas tienen la extensión blade
Añadimos el directorio **layouts**: partes comunes a nuestras vistas.  
    - Si sólo tenemos uno **base.blade.php** o **app.blade.php**  
    - **landing.blade.php**: aquí realizamos nuestra parte común, esta estructura la vamos a extender a través del resto de vistas. Definir huecos para que sean implementados por las vistas.
    - **@yield('title')**: Definir una sección en la plantilla, para inyectar contenido. La arroba es una directiva.  
``` html
    <title>
        @yield('title')
    </title>
```

**levantar sevidor de pruebas**
php artisan serve
Nota: desde nuestra carpeta de proyecto.

**Consejos**  
Si repetimos mucho código, es señal de que algo no estamos haciendo bien.  
Aquí entra el concepto de **layout**  
Blade ofrece recursos  
