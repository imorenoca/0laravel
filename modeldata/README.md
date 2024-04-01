#Video Número 3
Persistencia - modelo.  
Estructura de la base de datos:
database>migrations
Estructura de nuestra base de datos

Configurar la base de datos que vamos a usar.
.env

Config>database.php **controladores**

```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3326
DB_DATABASE=modeldata
DB_USERNAME=root
DB_PASSWORD=
```

-   Tenemos que crear la base de datos en nuestro sistema (en mi caso phpMyAdmin)
    desplegar la base de datos  
    **php artisan migrate**
    si la base de datos está bien conectada laravel va a empezar a migrar la base de datos.

En laravel en las bases de datos se escriben en plurar y en minúsculas.
**\_php artisan make:migration create_notes_table**

Se crea una clase anónima que extiende de la clase Migrations (hereda, esta clase tiene todos los métodos, etc para generar la base de datos)

Por defecto tiene dos funciones la función up()-> CREAR va a contener la información que necesita el sistema para crear esa tabla.
CLASE Schema::create (métodos estáticos) - create (argumentos)  
 ('notes', function (Blueprint $table))

-   Blueprint clase que va a contener todos los métodos para generar la estructura de la tabla (campos)
-   Por defecto dos registros, un id y un timestamps: create y update (cuando se crea y cuando se modifica)

    -   table: modificar estructura de una tabla existente.
    -   dropIfExists: eliminar.

función down()-> ELIMINAR la información necesaria para volver atrás esa migración(elimina la tabla del sistema)

```PHP
    public function up(): void
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('description', 255);
            $table->boolean('done');
            $table->integer('example');
            $table->unsignedInteger('example');
            $table->bigInteger('futurasClavesForaneas');
            $table->unsignedBigInteger('example');
            $table->text('example');
            $table->float('example');
            $table->double('double');
            $table->enum('state', ['DRAFT', 'PUBLISHED', 'DELETED'])
            $table->timestamps();
        });
    }
```

Valores de las tablas

```php
         $table->string('description', 255)->nullable();
         $table->boolean('done')->default(false);

```

Una vez creada la tabla: php artisan migrate  
eliminar las migraciones

```php
artisan migrate:reset

```

modificar datos que he migrado.

1.  Borrar la tabla, no debemos realizar esto. Son acciones manuales.
2.  Ejecutar un punto en particular:
    -   **php artisan migrate:rollback**
    -   Tirar hacia atrás todas las migraciones: **php artisan migrate:reset**
    -   Tirar hacia atrás el número de lote: **php artisan migrate:rollback --batch=3**
    -   Rollback y ejecutar las acciones: **php artisan migrate:refresh**
3.  Generar un nuevo archivo de migración, para actualizar la estructura de una tabla.

    -   php artisan make:migration update_notes_table

#Paso 2

Trabajar con el modelo. La tabla note- generar el modelo
**php artisan make:model Note**  
Modelo **Note** en singular y mayúscula
Si no se respeta la convención de nombres **protected $table = 'tasks';**

Explicación
´´´
class Note extends Model
{
use HasFactory;
protected $fillable = ['title',etc...] los campos que se pueden rellenar
protected $guarded= los que no se pueden rellenar
protected $casts = forzar datos
protected $hidden = evitar que se entreguen datos cuando entreguemos una serialización 'password'

}
´´´

Crear un nuevo modelo y migración
php artisan make:model Author --migration
