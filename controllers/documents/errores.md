# Errores encontrados y solución.
Borra la base de datos  
```php
php artisan migrate:reset  
```
Crear una nueva base de datos.
```php
php artisan migrate
```

En el controlador del modelo que usamos para la base de datos, tenemos que poner los campos que queremos que se permitan rellenar en la base de datos.

En el caso de nuestro ejemplo es

controllers>app>Models>User.php

```php

    protected $fillable = [
        'name',
        'email',
        'password',
        'age',
        'address',
        'zip_code'
    ];
```

En nuestro ejemplo, vamos a rellenar la base de datos con:  
controllers>app>Http>Controllers>UserController.php
```php
public function creat() {

            User::create([
            "name" => 'Ana',
            "email" =>'ana@gmail.com',
            "password" => Hash::make("123"),
            "age" => 30,
            "address" => "Avda. Principal",
            "zip_code" => 25555,
        ]);
}
```

Para ejecutarlo lo vamos a llamar:  

http://127.0.0.1:8000/create
