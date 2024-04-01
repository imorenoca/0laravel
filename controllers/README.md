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

7. Creación y modificación de consultas. 
controllers>app>Http>Controllers>UserController.php

Desarrollar como realizar consultas con laravel.
orderby, limitar los resultados, etc. 

Bases de las búsquedas cuando estemos usando orm: Eloquent-ORM: MVC - Laravel  
   - a. Agnóstico a nuestro modelo de persistencia en patrones de arquitectura mvc.
   Traduce lo que queremos las sentencias correspondientes a la base de datos que nos conectamos.
   - b. nos manentenemos en oop    

Desventajas:  
- fuerte acoplamiento a la infraestructura en la lógica de negocio. No podemos extraer nuestro modelo de negocio.   
- Falta de control de las consultas: No se controlan como trabaja el orm para traer los datos, no se sabe como trabaja por debajo, si somos puntillosos con el control de la base de datos.

8. Realizar consultas directamente.

DB: clase que realiza las consultas.