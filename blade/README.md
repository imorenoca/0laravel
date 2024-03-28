# Curso de Laravel Profesional de GOGODEV

# Laravel 2 - Vistas y plantillas

Crear un nuevo proyecto de laravel

```php
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

**levantar sevidor de pruebas**
php artisan serve
Nota: desde nuestra carpeta de proyecto.

**Consejos**  
Si repetimos mucho código, es señal de que algo no estamos haciendo bien.  
Aquí entra el concepto de **layout**  
Blade ofrece recursos

**resources>view**
En este directorio están las **Vistas** de nuestra aplicación.
Nomenclatura index.blade.php // about.blade.php
Dentro de Laravel las vistas tienen la extensión blade
Añadimos el directorio **layouts**: partes comunes a nuestras vistas.  
 - Si sólo tenemos uno **base.blade.php** o **app.blade.php**  
 - **landing.blade.php**: aquí realizamos nuestra parte común, esta estructura la vamos a extender a través del resto de vistas. Definir huecos para que sean implementados por las vistas. - **@yield('title')**: Definir una sección en la plantilla, para inyectar contenido. La arroba es una directiva.

```html
<title>@yield('title')</title>
```

Para llamar a la plantilla general dentro de la vista que queremos invocarla tenemos que usar **@extends('direccion.nombre')**  
Tener en cuenta que los directorios se llaman con puntos, en nuestro caso:

```php
@extends('layouts.landing')

@section('title','Home')

@section('content')
    <h1>Index</h1>
    <p>Ubicamos todo el contenido</p>
@endsection

```

**Creación de un menú de navegación**  
Incluimos <nav></nav> en el landing.blade.php, nuestra plantilla general para las vistas.  
Truco

```
 ul>li*4>a

```

Una buena práctica es incluir las partes de nuestra aplicación, dentro de una carpeta llamada _\_partials_  
resources>views>layouts>\_partials>menu.blade.php  
El layout va a tener un componente hijo ** @include **

Error encontrado en el menú de navegación con el index, si no existe el general en el menú de navegación hay que incluir la dirección dónde está ubicado:

```php
Route::view('/index', 'index')->name('index');
```

Navegación - rutas

**{{}} código** Código scoopado

```html
<li><a href="{{route('index')}}">Index</a></li>
```

La modificación del nombre de la ruta se realiza en el enrutador web.php

```php
Route::view('/contacta-con-nosotros', 'contact')->name('contact');
```

Componente hijo -- compenentes blade, igual que includes se puede definir secciones, manipulables.

Se guardan en la carpeta resources>views>\_components>card.blade.php

```php

<div>
    <h3>{{ $title }}</h3>
    <p>{{ $content }}</p>
</div>

```

**\_components**  
Los componentes se definen con los slogs y asignando {{}} nombre de variable php

```php
    @component('_components.card')
        @slot('title', 'Service 1')
        @slot('content','lorem ipsum dolor set aimet.')

    @endcomponent
```

Los componentes pueden ir dentro de las secciones, son hijos.

**Carga de recursos**
Estáticos: recursos que tiene nuestro proyecto que están albergados en nuestra carpeta public. Todo comienza en la carpeta pública en el index.php.

public>assets>img

Si cargamos la imagen así:

```html
<img src="assets/img/mvc.png" alt="example" />
```

Se hace de manera directa. Si cambiamos la ruta, el enlace de la imagen se puede romper. Hay que indicar a Laravel, que es un contenido estático.

Método **asset** - le indica a Laravel que el recurso es estático y se encuentra en esa carpeta.

```html
<img src="{{ asset('assets/img/mvc.png')}}" alt="example" width="256" />
```

public>assets>css>style.css  
También se puede cargar como un recurso estático

Para cargar este recurso:

```html
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
```

includes, partials para subdividir el contenido.

Podemos añadir un recurso espécifico que necesita la página.

```html
@section('style')
<link rel="stylesheet" href="" />
@endsection
```
