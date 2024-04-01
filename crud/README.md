# Parámetros dinámicos y CRUD.

1. Crear nuevo proyecto.
    **laravel new crud**
2. Editar el archivo de configuración.
 crud>.env
3. Route::get('product/{id?}', [Controller::class, 'function'])->name('example');
4. php artisan make:controller NoteController
5. php artisan make:model Note --migration 
6. Crear base de datos en Servidor de Mysql. crud
7. Configurar .env -> en mi caso cambiar el puerto.
8. Modificar las crud>database>migrations>create_notes_table.php para que tenga los campos
9. Ir al modelo crud>app>Models>Note.php para cumplimentar los campos que se pueden rellenar.
   protected $fillable = ['title','description'];
10. Migrar el contenido: php artisan migrate
11. En crud>app>Http>Controllers>NoteController.php crear la función index()
     public function index($id) { 
         return view('note.index',['id'=>$id]); }
12. crud>routes>web.php - agregar ruta
use App\Http\Controllers\NoteController;
Route::get('/note/{id}', [NoteController::class, 'index']) > name('note.index');
13. El controlador recepciona un id.
public function index($id)
14. Creamos la vista.
    crud>resources>views>note>index.php
        <h1>El valor de la ruta es {{ $id }}</h1>
15. En las rutas debemos incluir siempre primero los casos más específicos, y los más generales, más abajo.
Ejecutar rutas que no provoquen colisiones.




