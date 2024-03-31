# Vídeo 4. Controladores.

Vamos a trabajar con rutas dinámicas, necesitamos controladores, para asociar cada ruta a un controlador, que se va a encargar de gestionar los datos.
**routes>web.php**

1. Creamos un nuevo proyecto:  
   **laravel new controlers**
2. Migramos las bases de datos:  
   **php artisan migrate**
3. Creamos el controlador:  
   **php artisan make:controller UserController**  
   Ubicación: app>Http>Controllers>UserController.php  
   En la clase del Controlador vamos a definir funciones públicas para controlar las vistas.
4. En routes>web.php.  
   Importamos el controlador **use App\Http\Controllers\UserController;**  
   **_Route::get('/', [UserController::class, 'index'])->name('user.index');_**
   El primer valor indica el controlador, y el segundo la función (class es un método "mágico").
   - daba error una extensión borraba la clase importada.
5. Nuestra ruta ejecuta el controlador y el controlador nos deriva a la vista.
6. Introducir los modelos, el controlador se va a apoyar en los modelos para recuperar la información.
   - apoyarnos en el orm.
   - lo realizamos a través del modelo User.
   ```html
       @if($users->isEmpty())
        <p>The user list is empty</p>
    @else
        <ul>
            @foreach($users as $user)
                <li>{{$user->name}}</li>
            @endforeach
        </ul>
    @endif
    ```